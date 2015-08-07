<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/07
 * Time: 12:24
 */

class Update extends CI_Controller
{

    private $art = 'articles';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }

    //�ҏW�����L�����e�[�u���̒����瓯��'id'�̋L���ɍX�V����
    public function index(){

        $id       = $this->input->post('id');
        $title    = $this->input->post('title');
        $date     = $this->input->post('date');
        $content  = $this->input->post('content');
        $link     = $this->input->post('link_area');

        $data = array(

            'title'      => $title,
            'date'       => $date,
            'content'    => $content,
            'link'       => $link,
        );

        $this->load->database();

        $this->db->where('id', $id);
        $this->db->update('articles',$data);

        $this->load->view('update_already');

    }

}