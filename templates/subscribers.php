<div class="wrap">

<!-- <img src="../wp-content/uploads/2020/11/portin-list.jpg" width="100%" alt=""> -->
<img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>portin-list.jpg">

    <h1 class="wp-heading-inline">MVNO Portin</h1>

    <a href="<?php echo get_admin_url();?>admin.php?page=mvno-portin" class="page-title-action">Add New</a>

    <hr class="wp-header-end">

    <table class="table widefat fixed" cellspacing="0">

        <thead>

        <tr>



            <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>

            <th id="full_name" class="manage-column column-full_name sortable desc" scope="col">

                <a>

                    <span>Name</span>

                    <span class="sorting-indicator"></span>

                </a>

            </th>

            <th id="plan" class="manage-column column-plan num" scope="col">Plan</th>

            <th id="new_number" class="manage-column column-new_number num" scope="col">Number</th>

            <th id="imei" class="manage-column column-imei num" scope="col">IMEI</th>

            <th id="iccid" class="manage-column column-iccid num" scope="col">ICCID</th>

            <th id="status" class="manage-column column-status num" scope="col">Status</th>

            <th id="Actions" class="manage-column column-status num" scope="col">Actions</th>





        </tr>

        </thead>



        <tbody>

        <?php foreach($subscribers as $subscriber){?>

            <tr class="column-visible" valign="middle" style="text-align: center">

                <th class="check-column" scope="row">

                    <input type="checkbox" id="cb" name="plans[]" value="<?=$subscriber->ID?>">

                </th>

                <td class="full_name column-full_name page-title" data-colname="full_name">

                    <a href="<?=admin_url('admin.php?page=mvno-activations-subscribers&sub_id='.$subscriber->ID)?>">

                        <span>

                            <?=$subscriber->first_name?></span>

                    </a>

                </td>

                <td class="plan column-plan" data-colname="plan"><?=$subscriber->plan?></td>

                <td class="new_number column-new_number" data-colname="new_number"><?=$subscriber->port_number?></td>

                <td class="imei column-imei" data-colname="imei"><?=$subscriber->imei?></td>

                <td class="iccid column-iccid" data-colname="iccid"><?=$subscriber->iccid?></td>

                <td class="status column-status" data-colname="status">

                    <?php

                    if($subscriber->port_status == 'CT'){

                        echo "Conflict";

                    }

                    if($subscriber->port_status == 'OP'){

                        echo "Open";

                    }

                    if($subscriber->port_status == 'CN'){

                        echo "Cancel";

                    }

                    if($subscriber->port_status == 'DN'){

                        echo "Denied";

                    }

                    if($subscriber->port_status == 'ER'){

                        echo "Error";

                    }

                    if($subscriber->port_status == 'CF'){

                        echo "Confirmed";

                    }

                    if($subscriber->port_status == 'CO'){

                        echo "Completed";

                    }

                    ?>

                </td>

                <td>

                    <a class="button" href="?page=mvno-portin-list&action=conflict&id=<?=$subscriber->ID?>">Port Conflict</a>

                    <a class="button" href="?page=mvno-portin-list&action=activation_conflict&id=<?=$subscriber->ID?>">Activation Conflict</a>

                </td>



            </tr>

        <?php } ?>

        </tbody>

        <tfoot>

        <tr>



            <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>

            <th id="full_name" class="manage-column column-full_name sortable desc" scope="col">

                <a>

                    <span>Name</span>

                    <span class="sorting-indicator"></span>

                </a>

            </th>

            <th id="plan" class="manage-column column-plan num" scope="col">Plan</th>

            <th id="new_number" class="manage-column column-new_number num" scope="col">Number</th>

            <th id="imei" class="manage-column column-imei num" scope="col">IMEI</th>

            <th id="iccid" class="manage-column column-iccid num" scope="col">ICCID</th>

            <th id="status" class="manage-column column-status num" scope="col">Status</th>

            <th id="status" class="manage-column column-status num" scope="col">Actions</th>





        </tr>

        </tfoot>

    </table>

</div>

