<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Util_lib
{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }


    /**
     * Ensure request is an AJAX request
     * @return string
     */
    public function ajaxOnly()
    {
        //display uri error if request is not from AJAX
        if (!$this->CI->input->is_ajax_request()) {
            redirect(base_url());
        } else {
            return "";
        }
    }
}
