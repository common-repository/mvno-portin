<?php
/**
 * Created by PhpStorm.
 * User: Husnain
 * Date: 6/15/2020
 * Time: 8:06 PM
 */

class MvnoPortinInstall
{
    public function create_mvno_portin_database_table()
    {
        global $wpdb;
        $mvno_portin_table = $wpdb->prefix .'mvno_portin';
        $mvno_portin_settings_table = $wpdb->prefix .'mvno_portin_settings';
        $my_products_db_version = '1.0.0';
        $charset_collate = $wpdb->get_charset_collate();

        // create portin plugin
        if ( $wpdb->get_var( "SHOW TABLES LIKE '{$mvno_portin_table}'" ) != $mvno_portin_table ) {

            $sql = "CREATE TABLE $mvno_portin_table (
            ID mediumint(9) NOT NULL AUTO_INCREMENT,
            `user_id` varchar(255) NULL,
            `port_number` varchar(255) NULL,
            `zipcode` varchar(255) NULL,
            `first_name` varchar(255) NULL,
            `last_name` varchar(255) NULL,
            `street_number` varchar(255) NULL,
            `street_name` varchar(255) NULL,
            `street_type` varchar(255) NULL,
            `street_direction` varchar(255) NULL,
            `city` varchar(255) NULL,
            `state` varchar(255) NULL,
            `zip` varchar(255) NULL,
            `business_name` varchar(255) NULL,
            `imei` varchar(255) NULL,
            `iccid` varchar(255) NULL,
            `plan` varchar(255) NULL,
            `port_status` varchar(255) NULL,
            `activation_status` varchar(255) NULL,
            `activation_id` varchar(255) NULL,
            `port_message` varchar(255) NULL,
            `activation_message` varchar(255) NULL,
            `account` varchar(255) NULL,
            `password` varchar(255) NULL,
            PRIMARY KEY  (ID)
            )    $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );
            add_option( 'mvno_db_version', $my_products_db_version );
      }



      if ( $wpdb->get_var( "SHOW TABLES LIKE '{$mvno_portin_settings_table}'" ) != $mvno_portin_settings_table ) {

            $sql = "CREATE TABLE $mvno_portin_settings_table (
            ID mediumint(9) NOT NULL AUTO_INCREMENT,
            `background_color` varchar(255) NOT NULL,
            `border_color` varchar(255) NOT NULL,
            `input_color` varchar(255) NOT NULL,
            `color` varchar(255) NOT NULL,
            `width` varchar(255) NOT NULL,
            `width_type` varchar(255) NOT NULL,
            `height` varchar(255) NOT NULL,
            `height_type` varchar(255) NOT NULL,
            PRIMARY KEY  (ID)
            )    $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );
            add_option( 'mvno_db_version', $my_products_db_version );

          $wpdb->insert(
              $mvno_portin_settings_table,
              array(
                  'background_color' => '#eeeeee',
                  'border_color' => '#ffffff',
                  'input_color' => '#ffffff',
                  'color'=> '#1d252c',
                  'width' => '100',
                  'width_type' => '%',
                  'height' => '100',
                  'height_type' => '%'
              ),
              array(
                  '%s',
                  '%s',
                  '%s',
                  '%s',
                  '%s',
                  '%s',
                  '%s',
                  '%s'
              )
          );
      }

    }
}