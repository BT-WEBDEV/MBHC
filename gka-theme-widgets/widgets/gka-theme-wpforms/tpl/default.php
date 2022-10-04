<?php $wpforms_shortcode = "[wpforms id=" . $wpforms . "]"; ?>
<div class="contact-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="text-center">
                    <div>SEND YOUR REQUEST</div>
                    <h1 class="text-blue">Contact Us</h1>
                </div>
                <?php echo do_shortcode($wpforms_shortcode); ?>
            </div>
        </div>
    </div>
</div>