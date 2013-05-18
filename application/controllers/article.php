<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {

    private $username;

    public function __construct() {
        parent::__construct();
        $this->username = $this->session->userdata('username');
    }

    public function edit() {
        $this->load->view('templates/header');
        $this->load->view('article_edit');
        $this->load->view('templates/footer');
    }

    public function publish() {

    }

    public function show() {

    }

    public function del() {

    }
}