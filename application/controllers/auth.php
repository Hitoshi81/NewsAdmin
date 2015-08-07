<?php
class Auth extends CI_Controller
{
    private $user_table = 'useradmin';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('session', 'form_validation'));
        $this->load->helper(array('form', 'url'));
    }
    
    public function index()
    {
        $data['username'] = "";
        $data['password'] = "";
        $data['next'] = "";
        $this->load->view('login_form', $data);
    }
    
    public function login($next='')
    {
        // after login
        if($this->session->userdata('is_login') == TRUE) {
            $this->load->view('list');
            redirect($next);
        }
        
        // before login
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $next = $this->input->post('next'); // hidden value from <INPUT> when login NG
        }
        
        // validation rules
        $this->form_validation->set_rules('username', 'ユーザー名', 'required');
        $this->form_validation->set_rules('password', 'パスワード', 'required');
        
        // validation check
        if ($this->form_validation->run() == TRUE) {
            //login check
            if ($this->_db_check($username, $password)) {
                //login OK
                $this->session->sess_destroy();
                $this->session->sess_create();
                $this->session->set_userdata(array('is_login' => TRUE));
                $this->session->set_userdata(array('username' => $username));
                redirect($next);
            }
        }
        
        // when first access OR validation error OR login NG
        $data['username'] = $username;
        $data['password'] = $password;
        $data['next'] = $next;
        $this->load->view('login_form', $data);
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }

    private function _db_check($username='', $password='')
    {
        $this->db->where('username', $username);
        $query = $this->db->get($this->user_table);
        if (0 < $query->num_rows()) {
            $row = $query->row();
            if($row->password == $password) {
            echo "ok";
                return TRUE;
            }
        }
                    echo "no ユーザ名もしくはパスワードが違いますよｗ";
        return FALSE;
    }
}
?>