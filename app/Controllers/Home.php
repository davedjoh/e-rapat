<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function index()
	{
		echo view('calendar');
	}

	public function calendar()
	{
		helper(['form', 'calendar_helper']);
		echo view('frontend/calendar');
	}
}
