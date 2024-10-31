<style>

.main_box {
    max-width: 500px;
    margin-top: 0px;
    background: #333;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    color: #fff !important;
}

.main_box h3 {
    display: block;
    padding: 2px 0;
    font-size: 20px;
    margin-bottom: 10px;
    margin-top: 10px;
    color: #fff;
}

</style>

<div class="wrap">

<!-- <img src="../wp-content/uploads/2020/11/portin-settings.jpg" width="100%" alt=""> -->
<img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>/portin-settings.jpg">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>





    <h1>Short Code for Portin</h1>

    <div class="wrap main_box">



        <b>Portin Shortcode:</b>

        <b>[mvno_portin]</b>

        <br>

    </div>

    <hr>

    <form method="post" class="main_box" action="">

        <h3>Portin Frontend Page Settings</h3>

        <div class="wrap">



            <h3><?php esc_attr_e('Color', 'WpAdminStyle')?></h3>

            <input type="text" class="input_color" name="color_ha" value="<?=esc_html($styles->input_color)?>">



            <h3><?php esc_attr_e('Background Color', 'WpAdminStyle')?></h3>

            <input type="text" class="color-field" name="background_color" value="<?=esc_html($styles->background_color)?>">



            <h3><?php esc_attr_e('Border Color', 'WpAdminStyle')?></h3>

            <input type="text" class="border_color" name="border_color" value="<?=esc_html($styles->border_color)?>">





            <h3>Width</h3>

            <input type="number" class="width_number" name="width" value="<?=esc_html($styles->width)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="width_type" id="width_type">

                <option value="px" >PX</option>

                <option value="%" >%</option>

            </select>



            <h3>Height</h3>

            <input type="number" class="height_number" name="height" value="<?=esc_html($styles->height)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="height_type" id="height_type">

                <option value="px" >PX</option>

                <option value="%" >%</option>

            </select>



        </div>

        <hr>



        <div class="wrap">

            <?php

            wp_nonce_field( 'mvno-activations-setting-save-nounce', 'mvno-activations-setting-save-nounce' );

            submit_button(null, 'button-primary', 'mvno_portin_settings_btn');

            ?>

        </div>

    </form>

    <div class="mvno-activations-loader-center">

        <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" id="loader">

    </div>

</div><!-- .wrap -->