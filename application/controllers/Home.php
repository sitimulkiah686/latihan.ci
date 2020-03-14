<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Home extends CI_Controller {

	function index() {
 //memanggil homemosel di folder models
	$this->load->model('HomeModel');

	//menampung fungsi dari getdata()
	$tampilkanData = $this-> HomeModel->getData();

	$this->load->view('home', array("tampilkanData => $tampilkanData"));

	echo "Nama: " . $tampilkanData['Nama'] . "<br>";
	echo "kampus: " . $tampilkanData['Kampus'] . "<br>";
	echo "Website: " . $tampilkanData['Website'] . "<br>";
	}
}