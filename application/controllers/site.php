<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/10
 * Time: 13:42
 */
class Site extends CI_Controller
{

    private $art = 'articles';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));

    }

    public function index(){

        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
        $title    = $this->input->post('title');
        $date     = $this->input->post('yyyy');
        $date    .= $this->input->post('mm');
        $date    .= $this->input->post('dd');
        $content  = $this->input->post('content');
        $link     = $this->input->post('link_area');
        //ここは力不足で$dataの配列を成立させるためにおいてあるだけです。

        $this->db->set('title', $title);
        $this->db->set('date', $date);
        $this->db->set('content', $content);
        $this->db->set('link', $link);


        $this->db->order_by('date','DESC');
        //配列の中のdateを取ってきて'DESC'で降順に並べ替え(ソート)をしています
        ///////////////////////////////////////////////////////////////////////////ここまでがlistの年月での降順並べ替え

        $query = $this->db->get($this->art);
        $db_result = $query->result_array();

        log_message('debug', '�f�[�^�x�[�X�o�͂���Ă�H');
        log_message('debug', var_export($db_result, TRUE));
        foreach ($db_result as $array){
        }

        $array = array();
        $array['articles'] = $db_result;

        $this->load->view('site_page', $array);

    }

}