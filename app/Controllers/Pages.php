<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Seafood'
		];
		return view('pages/home', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | Seafood'
		];
		return view('review/about', $data);
	}

	public function menu()
	{
		$data = [
			'title' => 'Menu | Seafood'
		];
		return view('pages/menu', $data);
	}

	public function location()
	{
		$data = [
			'title' => 'Location | Seafood'
		];
		return view('pages/location', $data);
	}
}
