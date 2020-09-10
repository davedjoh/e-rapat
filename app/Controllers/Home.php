<?php

namespace App\Controllers;

use phpDocumentor\Reflection\Types\Array_;

class Home extends BaseController
{

	public function __construct()
	{
		helper(['form', 'calendar_helper']);
	}

	public function index()
	{
		$data = array('title' => 'Pengaturan Tampilan kalender');

		echo view('templates/public_header', $data);
		echo view('templates/public_navbar', $data);
		echo view('calendar/index');
		echo view('templates/public_footer', $data);
	}

	public function get_calendar()
	{
		// this function place on \system\Helpers\calendar_helper.php
		echo get_data_calendar();
	}
}
