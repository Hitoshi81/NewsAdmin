<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/06/30
 * Time: 15:06
 */
class Auda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }

    //save_pageに飛びます

    public function index(){
        $this->load->view('save_page');
    }
}