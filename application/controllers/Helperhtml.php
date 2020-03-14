<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Helperhtml extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->helper('html'); //memangggil helper thml
    }

    function index() {
        //memanggil view v_helperhtml di folser views
        $this->load->view('v_helperhtml'); 
    }
}