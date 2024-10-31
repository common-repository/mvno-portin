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

<img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>/portin.jpg">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>



    <div class="form-wrap">



        <form method="post" class="main_box" action="">



            <label for="user_id">Users</label>

            <select name="user_id" id="user_id"  class="form-field" style="width: 350px;">

                <?php foreach ( $blogusers as $user ) { ?>

                    <option value="<?=$user->ID?>"><?=esc_html( ucfirst($user->display_name) )?></option>

                <?php }?>

            </select>



            <label for="phone">Phone</label>

            <input type="text" name="phone_number" id="phone" class="regular-text">



            <label for="zip_code">Zip</label>

            <input type="text" name="zip_code" id="zip_code" class="regular-text">



            <?php

            wp_nonce_field("mvno_port_verification", "port_verification");

            submit_button( __( 'Verify', 'textdomain' ), 'primary', 'mvno_verify_btn' );

            ?>

        </form>



        <div>

            <p>

                <?php

                if(isset($_REQUEST['msg'])){

                    echo sanitize_text_field($_REQUEST['msg']);

                }

                ?>

                <?=$message?>

            </p>

        </div>

    </div>

    <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" width="100px" id="loader" style="display: none;">

</div><!-- .wrap -->