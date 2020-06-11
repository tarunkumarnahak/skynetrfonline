<?php defined('BASEPATH') OR exit('No direct script access allowed');



class Global_m extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    //Insert Data To Table
    public function globalInsert($table, $data) {
        return $this->db->insert($table, $data);
    }




}
