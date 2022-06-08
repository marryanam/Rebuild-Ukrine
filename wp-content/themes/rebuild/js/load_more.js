/**
 * Infinite scroll
 */
jQuery(function($)
{
    let loadBtn = $('#loadMoreBtn');

    loadBtn.click(function(){
        $(this).find('span').text('Loading...');

        let data = {
            'action': 'loadmore',
            'query': query_posts,
            'page' : paged
        };

        $.ajax({
            url:ajaxurl,
            data:data,
            type:'GET',

            success:function(data){
                if( data ) {
                    $('#filterData').append(data);
                    paged++;
                    if (paged == max_pages) loadBtn.remove();
                } else {
                    loadBtn.remove();
                }
            }
        });
    });
});