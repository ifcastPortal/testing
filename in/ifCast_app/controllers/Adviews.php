<?php

class Adviews extends CI_Controller {


	/* Onkar created Functions for temporary pages -- START */
	public function companiesbig1(){
		load_view('adviews/companiesbig1', $data);
	}
	public function companiesbig2(){
		load_view('adviews/companiesbig2', $data);
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
	/* Onkar created Functions for temporary pages -- END */

}




