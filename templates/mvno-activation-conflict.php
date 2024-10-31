<div class="wrap">
    <div class="form-wrap">
<?php

foreach ($activation_verification_messages as $activation_verification_message){
    echo $activation_verification_message;
}
?>
        <h2>Activation Conflict</h2>

        <h3><?=$activation_message?></h3>
        <h2><?=$number?></h2>
        <h2><?=$status?></h2>
        <h3>Issue:</h3>
        <b><p style="color: #e31c13;"><?=$subscriber->activation_message?></p></b>
        <form action="" method="post" class="form-table">
            <input type="hidden" name="phone" value="<?=$subscriber->port_number?>">

            <label for="first_name">First name</label>
            <input type="text" name="first_name" class="regular-text" value="<?=$subscriber->first_name?>">

            <label for="last_name">Last name</label>
            <input type="text" name="last_name" class="regular-text" value="<?=$subscriber->last_name?>">

            <label for="street_number">Street Number</label>
            <input type="text" name="street_number" class="regular-text" value="<?=$subscriber->street_number?>">

            <label for="street_name">Street Name</label>
            <input type="text" name="street_name" class="regular-text" value="<?=$subscriber->street_name?>">

            <label for="street_type">Street type</label>
            <input type="text" name="street_type" class="regular-text" value="<?=$subscriber->street_type?>">

            <label for="street_direction">Street Direction</label>
            <input type="text" name="street_direction" class="regular-text" value="<?=$subscriber->street_direction?>">

            <label for="city">City</label>
            <input type="text" name="city" class="regular-text" value="<?=$subscriber->city?>">

            <label for="state">state</label>
            <input type="text" name="state" class="regular-text" value="<?=$subscriber->state?>">

            <label for="zip">Zip</label>
            <input type="text" name="zip" class="regular-text" value="<?=$subscriber->zipcode?>">

            <label for="imei">IMEI</label>
            <input type="text" name="imei" class="regular-text" value="<?=$subscriber->imei?>">

            <label for="iccid">ICCID</label>
            <input type="text" name="iccid" class="regular-text" value="<?=$subscriber->iccid?>">

            <label for="plan">Plan</label>
            <select name="plan" id="plan" class="regular-text">
                <option value="1GB">1GB</option>
                <option value="3GB">3GB</option>
                <option value="5GB">5GB</option>
                <option value="7GB">7GB</option>
            </select>

            <?php
            wp_nonce_field("mvno_port_activation_conflict", "port_activation_conflict");
            submit_button( __( 'Resolve', 'textdomain' ), 'primary', 'mvno_activation_resolve_btn' );
            ?>
        </form>
    </div>
</div>