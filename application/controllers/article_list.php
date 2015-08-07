<?php
/**
 * Created by IntelliJ IDEA.
 * User: h.yamazaki
 * Date: 2015/06/30
 * Time: 19:38
 */
class article_list extends CI_Controller
{
    private $user_table = 'useradmin';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }

    public function editArticle()
    {
        $this->load->view('article_edit_form');
    }
}
?>