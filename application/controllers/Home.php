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
		redirect('Home/portal');
	}

	public function portal(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/portal'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
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
		$query = $this->Recentwork_model->recentwork_list();
		$value = array(
			'Result' => array(
				'recentwork' => $query
			),
			'View' => 'front/recentwork'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}

	public function recentwork_detail(){
		$id  = $this->uri->segment(3);
		$query = $this->Recentwork_model->recentwork_detail($id);
		$lecturer = $this->Lecturer_model->lecturer_list($id);
		$pic_group_list = $this->Recentwork_model->pic_group_list($id);
		$pic_list = $this->Recentwork_model->pic_list($id);
// print_r($pic_list);

		$value = array(
			'Result' => array(
				'recentwork_detail' => $query,
				'lecturer' => $lecturer,
				'pic_group_list' => $pic_group_list,
				'pic_list' => $pic_list

			),
			'View' => 'front/recentwork_detail'
		);
		$this->LoadPage($value);
	}

	// public function tpdi(){
	// 	$this->load->view('front/tpdi');
	//
	// }

	public function lecturer(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/lecturer'
		);
		$this->LoadPage($value);
	}

	public function teamwork(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'front/teamwork'
		);
		$this->LoadPage($value);
	}



}
