<div class="wrap">
    <style>
        .form-wrap {
            background-color: <?=$styles->background_color?>;
            border-color: <?=$styles->border_color?>;
            color: <?=$styles->color?>;
            width: <?=$styles->width?><?=$styles->width_type?>;
            height: <?=$styles->height?><?=$styles->height_type?>;

        }
    </style>
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

    <div class="form-wrap mvno_prtin_confirm_div">
        <table class="tab-content-wrapper">
            <thead>
            <tr>
                <th>Port Number</th>
                <th>Status</th>
                <th>Port Message</th>
                <th>Resolve Conflict</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($portin_status as $portin){ ?>
            <tr>
                <td><?=$portin->port_number?></td>
                <td>
                    <?php
                    switch ($portin->port_status){
                        case "CT":
                            echo "Conflict";
                            break;
                        case "CF":
                            echo "Confirm";
                            break;
                        case "CN":
                            echo "Cancel";
                            break;
                        case "CO":
                            echo "Complete";
                            break;
                        default:
                            echo "Open";
                    } ?>
                </td>
                <td><?=$portin->port_message?></td>
                <td>
                    <button class="myBtn" value="<?=$portin->ID?>">Resolve</button>
                    <button class="mvno_cancel_portin" value="<?=$portin->ID?>">Cancel Portin</button>
                </td>
            </tr>
            <?php } ?>
            </tbody>

            <tfoot>
            <tr>
                <th>Port Number</th>
                <th>Status</th>
                <th>Port Message</th>
                <th>Resolve Conflict</th>
            </tr>
            </tfoot>
        </table>
    </div>

    <!-- The Modal -->
    <div id="myModal_cancel_portin" class="modal">
<!--        <div class="modal-header">Cancel Portin</div>-->
        <!-- Modal content -->
        <div class="modal-content">
            <input type="hidden" class="mvno_portin_cancel_number">
            <input type="hidden" class="mvno_portin_cancel_zip">
            <p>Cancel Portin<span class="close">&times;</span></p>
            <hr>
            <div class="form-wrap">
                Are you sure, you want to cancel the portin request?
                <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" id="mvno_cancel_loader" style="display: none; width: 100px;">
            </div>
<!--        </div>-->
        <hr>

        <!--        <div class="modal-footer">-->
            <button class="mvno_btn_cancel_yes">Yes</button> | <button class="mvno_btn_cancel_no">No</button>
        </div>

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <form class="form-wrap" method="post" action="">
                <b>Conflct Message: </b><h5 id="conflict_message"></h5><br>
                <input type="hidden" name="id" id="mvno_id">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="mvno_phone" class="regular-text" value="">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="mvno_first_name" class="regular-text" value="">

                <label for="mvno_zip_code">Zip Code</label>
                <input type="text" name="zipcode" id="mvno_zip_code" class="regular-text" value="">


                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="mvno_last_name" class="regular-text" value="">

                <label for="street_number">Street Number</label>
                <input type="text" name="street_number" id="mvno_street_number" class="regular-text">

                <label for="street_direction">Street Direction</label>
                <input type="text" name="street_direction" id="mvno_street_direction" class="regular-text">

                <label for="street_name">Street Name</label>
                <input type="text" name="street_name" id="mvno_street_name" class="regular-text">

                <label for="street_type">Street Type</label>
                <input type="text" name="street_type" id="mvno_street_type" class="regular-text">

                <label for="city">City</label>
                <input type="text" name="city" id="mvno_city" class="regular-text">

                <label for="state">State</label>
                <select name="state" id="mvno_state" style="width: 100%; padding: 10px" class="regular-text">
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
                <input type="text" name="business_name" class="regular-text" id="mvno_business_name">

                <label for="account_number">Account Number</label>
                <input type="text" name="account" class="regular-text" id="mvno_account_number">

                <label for="account_password">Password</label>
                <input type="text" name="password" id="mvno_account_password" class="regular-text">

                <label for="imei">IMEI</label>
                <input type="text" name="imei" id="mvno_imei" class="regular-text">

                <label for="iccid">ICCID</label>
                <input type="text" name="iccid" id="mvno_iccid" class="regular-text">

                <label for="plan">Plan</label>
                <input type="text" name="plan" id="mvno_plan" class="regular-text">
                <br>
                <button value="resolve" type="submit" name="conflict_resolve">Resolve</button>
            </form>
        </div>

    </div>
</div>

    <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" id="loader" style="display: none; width: 100px;">
</div><!-- .wrap -->