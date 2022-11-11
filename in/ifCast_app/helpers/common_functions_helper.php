<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * InvoicePlane
 * 
 * A free and open source web based invoicing system
 *
 * @package		InvoicePlane
 * @author		Kovah (www.kovah.de)
 * @copyright	Copyright (c) 2012 - 2015 InvoicePlane.com
 * @license		https://invoiceplane.com/license.txt
 * @link		https://invoiceplane.com
 * 
 */
function random_string($length=6){
	$str_1 = substr(str_shuffle("Aa1Bb2Cc3Dd4Ee5Ff6Gg7Hh8Ii9Jj0Kk1Ll2Mm3Nn4Oo5Pp6Qq7Rr8Ss9Tt0Uu1Vv2Ww3Xx4Yy5Zz6"), 0, $length);
	$str   = $str_1;
	return $str;
}

	
function check_login($user_type=1){
	$CI =& get_instance();
	
	switch($user_type)
	{
		case '1':	$ifcast_log = $CI->session->userdata('ifcast_log');
				break;
		case '2':	$ifcast_log = $CI->session->userdata('ifcast_recruiterLog');
				break;
	}
	
	if(!$ifcast_log)
	{
		 redirect('login');
	}
}
	
	
function trans($line, $id = '')
{
    $CI =& get_instance();
    $lang_string = $CI->lang->line($line);

    // Fall back to default language if the current language has no translated string
    if (empty($lang_string)) {
        // Load the default language
        $CI->lang->is_loaded = array();
        $CI->lang->language = array();
        $CI->lang->load('ip', 'english');
        $CI->lang->load('form_validation', 'english');
        $CI->lang->load('custom', 'english');

        $lang_string = $CI->lang->line($line);

        // Load the user-selected language again
        $CI->lang->is_loaded = array();
        $CI->lang->language = array();
        $CI->lang->load('ip', $CI->mdl_settings->setting('default_language'));
        $CI->lang->load('form_validation', $CI->mdl_settings->setting('default_language'));
        $CI->lang->load('custom', $CI->mdl_settings->setting('default_language'));
    }

    // Fall back to the $line value if the default language has no translation either
    if (empty($lang_string)) {
        $lang_string = $line;
    }

    if ($id != '') {
        $lang_string = '<label for="' . $id . '">' . $lang_string . "</label>";
    }

    return $lang_string;
}

function send_SMS($mob_otp, $mobile_no, $massage)
{
	if($mobile_no && is_numeric($mobile_no) && strlen(trim($mobile_no)) == 10)
	{
		$mobile_no = trim($mobile_no);
		$username = "t1ifcast"; $password = "94576050"; 
		//$sender = "TSTREG"; 
		$sender = "otpsms"; 
		$URL = "http://sms4power.com/api/swsendSingle.asp?username=".$username."&password=".$password."&sender=".$sender."&sendto=".$mobile_no."&message=".urlencode($massage);
		
		$output = file($URL);
		
		//echo "<pre> ===>".$URL; print_r($output); exit;  
	}
}

function update_userStep($updateArr)  // recaptcha
{
	
	$CI =& get_instance();
	if($updateArr['is_recruiter']==1)
	{
		$seesionArr = $CI->session->userdata('ifcast_recruiterLog');
		unset($updateArr['is_recruiter']);
	}		
	else
		$seesionArr = $CI->session->userdata('ifcast_log');
	
	$user_id = $seesionArr['user_id'];
	
	$selectclaus = array('user_id', 'step');
	$where = array('user_id'=>$user_id);
	$user_details = $CI->mainmodel->select_object_row('users', $where, $selectclaus);	
	$affected_rows = 0;
	if($user_details->step >= $updateArr['step'])
	{
		unset($updateArr['step']);
	}
	
	if(count($updateArr) >0)
		$affected_rows = $CI->mainmodel->updateRecords('tbl_users', array('user_id'=>$user_id), $updateArr);
	
	return $affected_rows;
}

function getCurlData($url)  // recaptcha
{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$curlData = curl_exec($curl);
		curl_close($curl);
		return $curlData;
}


function load_menus()
{
   	$CI =& get_instance();
	$seesionArr = $CI->session->userdata('ifcast_log');
	
	if(!$seesionArr)
		$seesionArr = $CI->session->userdata('ifcast_recruiterLog');
	
	
	$user_type = $seesionArr['user_type'];
	$data['user_name'] = ($seesionArr['user_name'])?$seesionArr['user_name']:"Already a member?";
	
	switch($user_type)
	{
	    case 1: $CI->load->view('layouts/user_menu', $data); break;
	    case 2: $CI->load->view('layouts/recruiter_menu', $data); break;
	    default: $CI->load->view('layouts/guest_menu', $data); break;
	}
	
}

function load_view($url, $data=array())
{
	$CI =& get_instance();
	$CI->load->view('header',$data);
	//$CI->load->view('header_menu'); 
	$CI->load->view($url,$data);	
	$CI->load->view('footer');
}
