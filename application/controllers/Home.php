<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('front/template/header', $data);
		}else{
			$this->load->view('front/template/header');
		}
		$this->load->view('front/template/sidebar');
		$this->load->view($value['View']);
		$this->load->view('front/template/footer');
	}
	public function index(){
		redirect('Home/news');
	}

	public function news(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/news'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function course(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/course'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function contact(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/contact'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function about(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/about'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function recentwork(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/recentwork'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function recentwork_detail(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/recentwork_detail'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function tpdi(){
		$this->load->view('front/tpdi');

	}

}
