<?php

	class Pages extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->view('v_home');
		}

		public function mulaifundrising()
		{
			$this->load->view('v_mulaifundrising');
		}
		
		public function campaign()
		{
			$this->load->view('v_campaign');
		}

		public function masuk()
		{
			$this->load->view('v_masuk');
		}

		public function daftar()
		{
			$this->load->view('v_daftar');
		}

		public function cekstatusdonasi()
		{
			$this->load->view('v_cekstatusdonasi');
		}
		
	}