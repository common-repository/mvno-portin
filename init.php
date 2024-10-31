<?php

class MvnoPortin{

    protected $mvno_number;
    protected $auth_code;
    protected $mvno_settings_tbl;
    protected $mvno_portin_tbl;
    /**
     * Mvno constructor.
     */
    public function __construct()
    {
    }


    /**
     * Register Mvno Scripts
     */
    public function mvno_portin_frontend_js()
    {

    }

    function mvno_custom_cron_schedule( $schedules ) 
    {
    
    }

    //create your function, that runs on cron
    function mvno_portin_verify_and_activation()
    {
    
    }

    /**
     * @param $phone
     * @return array|bool|mixed|object
     */
    public function mvno_port_status_verification_cron($phone)
    {
    
    }

    /**
     * Recursive sanitation for text or array
     *
     * @param $array_or_string (array|string)
     * @since  0.1
     * @return mixed
     */
    function mvno_sanitize_text_or_array_field($array_or_string)
    {
    
    }

    /**
     * Creating a sub menu page
     */
    public function register_mvno_activations_settings_page() 
    {
    
    }


    /**
     * Submenu page settings page Template
     */
    public function mvno_portin_settings_page()
    {
    
    }

    /**
     * Adding menu page for plans
     */
    public function register_mvno_portin_menu_page()
    {
    
    }

    /**
     *
     */
    public function mvno_portin_menu_page()
    {
    
    }


    /**
     * Adding menu page for plans
     */
    public function register_mvno_portin_submenu_page()
    {
    
    }

    /**
     *
     */
    public function mvno_portin_list()
    {
    
    }

    /**
     * @param array $data
     * @return int
     */
    public function mvno_portin_update(array $data)
    {
    
    }
    /**
     * @param array $data
     * @return array|mixed|object
     */
    public function mvno_protin_resolve_conflict(array $data)
    {
    
    }

    /**
     * @param $phone
     * @param $zip_code
     * @return array|mixed|object
     */
    public function mvno_portin_eligible_number($phone, $zip_code)
    {
    

    }

    /**
     * @param array $data
     */
    public function mvno_portin(array $data)
    {
    
    }

    /**
     * @param array $data
     * @return int
     */
    public function mvno_store_portin(array $data)
    {
    
    }


    /**
     * @param $phone
     * @return array|bool|mixed|object
     */
    public function mvno_verify_portin($phone)
    {

    }

    /**
     * @param array $data
     * @return array|mixed|object
     */
    public function mvno_portin_activation(array $data)
    {
    }

    /**
     * @param $activation_id
     * @return array|bool|mixed|object
     */
    public function mvno_verify_activations($activation_id)
    {

    }


    /**
     * @param array $data
     */
    public function mvno_update_activation_status(array $data)
    {

    }

    /**
     * Data usage shortcode
     */
    public function mvno_portin_frontend()
    {

    }

    /**
     * @return bool
     */
    public function mvno_portin_eligible_frontend()
    {

    }

    /**
     *
     */
    public function mvno_portin_ajax()
    {

    }

    /**
     * @param array $data
     * @return string
     */
    public function mvno_portin__ajax(array $data)
    {

    }


    public function mvno_portin_status_shortcode()
    {

    }



    public function mvno_get_portin_info_by_id()
    {

    }


    public function mvno_cancel_portin()
    {

    }

}
