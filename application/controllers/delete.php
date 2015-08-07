<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/07
 * Time: 16:46
 */
class Delete extends CI_Controller
{

    private $art = 'articles';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));

    }


    //ポストしてきたidをテーブルの中で照合し、イコールのレコードをdeleteします。
    public function index(){

        $id  = $this->input->post('id');

        $this->db->where('id', $id);
        $this->db->delete('articles');

        $this->load->view('delete_already');

    }


}