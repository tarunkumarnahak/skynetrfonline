<?php defined('BASEPATH') OR exit('No direct script access allowed');


use PEAR2\Net\RouterOS;

class Logs extends CI_Controller {

    function __construct() {
        parent::__construct();
        isAdmin();
        
        isLogin();
        $this->load->model('main');
    }

    public function index() {

        $data = array();
        $data['logs'] = '';
        $data['systemInfo'] = "";
        $data['error'] = '';
        try {
            $data['logs'] = mkUtil()->setMenu('/log')->getAll();
            $data['systemInfo'] = mkUtil()->setMenu('/system resource')->getAll();
        } catch (Exception $e) {
            $data['error'] =  $e->getMessage();
        }

        $this->load->view('header');
        $this->load->view('logs', $data);
        $this->load->view('footer');
    }

}

?>
