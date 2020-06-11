<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Verify extends CI_Controller {

    function __construct() {
        parent::__construct();
        //isAdmin();
        isLogin();
        $this->load->model('main');
    }

    public function index() {
        $this->load->view('verify');
    }

  

?>
