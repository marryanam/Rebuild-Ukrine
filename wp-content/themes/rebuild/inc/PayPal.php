<?php
/**
 * PayPal API
 */
class PayPal
{
    private string $request_url   = 'https://api-m.paypal.com/v1/invoicing/invoices';
    private string $token_url     = 'https://api-m.paypal.com/v1/oauth2/token';
    private string $client_id     = 'AXlb0bhSMkql_bWDa8B8doOcR-FV_eMC8SpCzU-DX_E0d21ttJnNFic1EpfVzNwqAHKebiC0dkv8xtBT';
    private string $client_secret = 'EHkOriWHXa_iRG7URvFWB4CQaaJYlvzLA7gPlPK8Kui5cT2rzsZuTpSKa5n_S2qO4-TmZTePZtCe6sKH';

    public function __construct() {
        if ( PAYPAL_SANDBOX )
            $this->activate_paypal_sandbox();
    }

    /**
     * @return array $response_json
     */
    public function get_paypal_api()
    {
        $access_token = $this->get_paypal_token();

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->request_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Authorization: Bearer '.$access_token
            ],
        ]);

        $response = curl_exec($curl);
        $response_json = json_decode($response, true);

        return $response_json;

        curl_close($curl);
    }

    /**
     * Fills the variables with sandbox data
     */
    public function activate_paypal_sandbox()
    {
        $this->request_url   = 'https://api-m.sandbox.paypal.com/v1/invoicing/invoices';
        $this->token_url     = 'https://api-m.sandbox.paypal.com/v1/oauth2/token';
        $this->client_id     = 'AVIeHve-UvRPgrCxG1hUeE81IYev8QDK1xP_AU3HLbvPtLM1AbHNej9PXDKoj7tFs23QhdSSWq7je4B3';
        $this->client_secret = 'ECbTMiJJSD1eqRyu1DEGwqle3FO-6YSOykm3kkRUwR2wZNpB6tZuPS24NxTVziWpXgXT9AgxiqLREK-B';
    }

    /**
     * @return string $api_token
     */
    private function get_paypal_token()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->token_url,
            CURLOPT_HTTPAUTH => CURLAUTH_BASIC,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_USERPWD => $this->client_id.':'.$this->client_secret,
            CURLOPT_POSTFIELDS => http_build_query([
                'grant_type' => 'client_credentials'
            ]),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $response = curl_exec($curl);
        $response_json = json_decode($response, true);
        $api_token = $response_json['access_token'];

        return $api_token;

        curl_close($curl);
    }
}