<?php
/**
 * Template name: Contacts
 */
?>

<?php get_header(); ?>

<main class="page-wrapper contacts-page">

    <section class="section_1">
        <div class="container">
            <div class="row block_1">
                <div class="column">
                    <p class="heading">Contacts</p>
                    <div class="group">
                        <svg class="svg_icon svg_phone">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_phone" />
                        </svg>
                        <a href="tel:2139266627" class="subtitle_1">213 926-6627</a>
                    </div>
                    <div class="group">
                        <svg class="svg_icon svg_email">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_email" />
                        </svg>
                        <a href="mailto:support@shellholster.com" class="subtitle_1">info@rebuildukraine.org</a>
                    </div>
                    <div class="group">
                        <svg class="svg_icon svg_adress">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_adress" />
                        </svg>
                        <span class="subtitle_1">310 Hampton Rd, Hatboro, PA 19040</span>
                    </div>
                </div>
            </div>

            <div class="row block_2">
                <div class="column">
                    <div class="social">
                        <a href="#">
                            <svg class="svg_icon svg_social">
                                <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_fb" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="svg_icon svg_social">
                                <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_twitter" />
                            </svg>
                        </a>
                    </div>
                    <div class="btn btn-primary">
                        <svg class="svg_icon btn_svg_1">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#btn_svg_1" />
                        </svg>
                        <span>Donate</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.9169004171886!2d-75.12263448461162!3d40.16640387939504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6afc570d86247%3A0xa50da7d7b9bd7cd4!2zMzEwIEhhbXB0b24gUmQsIEhhdGJvcm8sIFBBIDE5MDQwLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1653757642720!5m2!1sru!2sua" width="600" height="450" style="border:0; margin-top: -150px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="section_2">
        <div class="container">
            <div class="column">
                <p class="heading">contact </br> us</p>
                <p class="subtitle_3">Contact us if you have any questions</p>
                <svg class="svg_icon svg_branch">
                    <use xlink:href="<?php echo get_template_directory_uri();  ?>/<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_branch" />
                </svg>
            </div>
            <div class="column">
                <form>
                    <fieldset>
                        <label>Name</label>
                        <input type="text">
                    </fieldset>
                    <fieldset>
                        <label>Email</label>
                        <input type="email">
                    </fieldset>
                    <fieldset>
                        <label>Text</label>
                        <textarea></textarea>
                    </fieldset>
                    <button class="btn btn-primary" type="submit"><span>Send</span></button>
                </form>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
