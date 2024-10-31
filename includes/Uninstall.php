<?php
/**
 * Created by PhpStorm.
 * User: Husnain
 * Date: 6/15/2020
 * Time: 8:06 PM
 */

class MvnoPortinUninstall
{

    public function mvno_portin_remove_database_table() {
        global $wpdb;
        $mvno_portin_table = $wpdb->prefix .'mvno_portin';
        $mvno_portin_settings_table = $wpdb->prefix .'mvno_portin_settings';

        $sql = "DROP TABLE IF EXISTS $mvno_portin_table";
        $sql1 = "DROP TABLE IF EXISTS $mvno_portin_settings_table";
        $wpdb->query($sql);
        $wpdb->query($sql1);
        delete_option("mvno_portin_db_version");
    }

}