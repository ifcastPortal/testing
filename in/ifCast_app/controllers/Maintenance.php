<?php

class Maintenance extends CI_Controller {


	/* Onkar created Functions for temporary pages -- START */
	public function index(){
		load_view('maintenance/dataupdate', $data);
	}
	public function aboutus(){
		load_view('ifcastportal/aboutus', $data);
	}
	public function companiessmall1(){
		load_view('adviews/companiessmall1', $data);
	}
	public function companiessmall2(){
		load_view('adviews/companiessmall2', $data);
	}
	public function dreamerregister(){
		load_view('adviews/dreamerregister', $data);
	}

	public function dreamerservices(){
		load_view('adviews/dreamerservices', $data);
	}

	public function recordinterview(){
		load_view('adviews/recordinterview', $data);
	}
	public function purchaseinterview(){
		load_view('adviews/purchaseinterview', $data);
	}

	public function enablerservices(){
		load_view('adviews/enablerservices', $data);
	}
	
	public function get_Country(){
		echo "Country Code: ". countryCode;
	}

	/* Onkar created Functions for temporary pages -- END */


}




