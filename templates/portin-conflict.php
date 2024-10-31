<div class="wrap">
    <div class="form-wrap">

        <h2>Portin Conflict</h2>
        <h3>Issue:</h3>
        <b><p style="color: #e31c13;"><?=$subscriber->port_message?></p></b>
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

            <label for="zipcode">Zip</label>
            <input type="text" name="zipcode" class="regular-text" value="<?=$subscriber->zipcode?>">

            <label for="account">Account</label>
            <input type="text" name="account" class="regular-text" value="<?=$subscriber->account?>">

            <label for="password">password</label>
            <input type="text" name="password" class="regular-text" value="<?=$subscriber->password?>">

            <?php
            wp_nonce_field("mvno_port_verification", "port_verification");
            submit_button( __( 'Resolve', 'textdomain' ), 'primary', 'mvno_resolve_btn' );
            ?>
        </form>
    </div>
</div>