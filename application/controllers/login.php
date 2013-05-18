<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    private $user;

    public function __construct() {
        parent::__construct();
        $this->user = array(
            'username' => 'test',
            'password' => 'test'
        );
    }

    public function index() {
        var_dump($this->session->all_userdata);
        var_dump($this->session->userdata('username'));
        $this->load->view('templates/header');
        $this->load->view('user_login');
        $this->load->view('templates/footer');
    }

    public function process() {
        $username = $this->input->get_post('username');
        $password = $this->input->get_post('password');
        if ($this->user['username'] == $username && $this->user['password'] == $password) {
            echo "Login successfully!";
            $this->session->set_userdata(
                array(
                    'username'   => $username,
                    'login_time' => time()
                )
            );
        }
    }
}
