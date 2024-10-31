<div class="wrap">
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

    <div class="form-wrap">

        <form method="post" action="">

            <label for="user_id">Users</label>
            <input type="text" name="user_id" class="regular-text" value="1">

            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" class="regular-text">

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" class="regular-text">

            <label for="street_number">Street Number</label>
            <input type="text" name="street_number" id="street_number" class="regular-text">

            <label for="street_direction">Street Direction</label>
            <input type="text" name="street_direction" id="street_direction" class="regular-text">

            <label for="street_name">Street Name</label>
            <input type="text" name="street_name" id="street_name" class="regular-text">

            <label for="street_type">Street Type</label>
            <input type="text" name="street_type" id="street_type" class="regular-text">

            <label for="city">City</label>
            <input type="text" name="city" id="city" class="regular-text">

            <label for="state">State</label>
            <select name="state" id="state" style="width: 350px;">
                <option value="">Choose...</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>

            <label for="business_name">Business Name</label>
            <input type="text" name="business_name" class="regular-text" id="business_name">

            <label for="account_number">Account Number</label>
            <input type="text" name="account_number" class="regular-text" id="account_number">

            <label for="account_password">Password</label>
            <input type="text" name="password" id="account_password" class="regular-text">

            <label for="imei">IMEI</label>
            <input type="text" name="imei" id="imei" class="regular-text">

            <label for="iccid">ICCID</label>
            <input type="text" name="iccid" id="iccid" class="regular-text">

            <label for="plan">Plan</label>
            <input type="plan" name="plan" id="plan" class="regular-text">

            <?php
            wp_nonce_field("mvno_port_verification", "port_verification");
            submit_button( __( 'Portin', 'textdomain' ), 'primary', 'mvno_portin_btn' );
            ?>
        </form>

        <div>
            <p>
                <?=$message?>
            </p>
        </div>
    </div>
    <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" width="100px" id="loader" style="display: none;">
</div><!-- .wrap -->