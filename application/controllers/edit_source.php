<?php

/**
 * Created by IntelliJ IDEA.
 * User: user
 * Date: 2015/07/01
 * Time: 17:39
 */
class Edit_source extends CI_Controller
{

    private $art = 'articles';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form', 'url'));

    }

    //ここでsave_pageから送られてきた記事をarticlesテーブルにinsertして追加をします
    public function index(){

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'タイトル', 'required');
        $this->form_validation->set_rules('date', '日付', 'required');
        $this->form_validation->set_rules('content', '記事の中身', 'required');
        $this->form_validation->set_rules('link_area', 'リンク', '');


        $title    = $this->input->post('title');
        $date     = $this->input->post('date');
        $content  = $this->input->post('content');
        $link     = $this->input->post('link_area');


        if ($this->form_validation->run() == FALSE)
        {
            if($this->_text_check($title,$date,$content)){
                $this->form_validation->set_message('required', '全て入ってないよ！全部書いて書いて！！');
                $this->load->view('save_page');
            }
        }
        else
        {


            $data = array(

                'title'      => $title,
                'date'       => $date,
                'content'    => $content,
                'link'       => $link,
            );
            $this->db->insert('articles',$data);
            $this->db->order_by('date','DESC');

            $query = $this->db->get($this->art);

            $db_result = $query->result_array();

            log_message('debug', '�f�[�^�x�[�X�o�͂���Ă�H');
            log_message('debug', var_export($db_result, TRUE));
            foreach ($db_result as $array){}

            $array = array();
            $array['articles'] = $db_result;
            $array['page_title'] = "ページタイトルです！";

            // ���������Ӗ�
            /*
            $array = array(
                'articles'   => $db_result,
                'page_title' => "ページタイトルです！"
            );*/
            $this->load->view('Relay', $array);
        }
    }


    public function _text_check($title="",$date="",$content=""){
        echo "すべての項目を埋めなければここは通しません！";
        return true;
    }


    /*編集ボタンを押された際に呼び出されて送られてきたレコードの
     *データを、新規登録と同じ形のフォームで適したところに
     *表示させる予定です。
     */
    public function update(){

        $id  = $this->input->post('id');

        $this->load->database();


        $this->db->select('id, title, content, date, link');
        $this->db->where('id', $id);
        $this->db->from($this->art);
        $query = $this->db->get();


        $db_result = $query->result_array();
        $array = array();
        $array['articles'] = $db_result;
        $this->load->view('update_page',$array);
    }


}