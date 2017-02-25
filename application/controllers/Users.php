<?php

	class Users extends CI_Controller {

		public function index() {
			$data['users'] = $this->user_model->get_users();

			$this->load->view('templates/header');
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer');
		}

	}