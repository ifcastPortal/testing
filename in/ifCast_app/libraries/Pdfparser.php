<?php 
// require_once APPPATH."/third_party/pdfparser.php";

class Pdfparser
{
    public function __construct()
    {
        require_once APPPATH."/third_party/pdfparser.php";

        if (!defined('pdfparser')) {
            define('pdfparser', dirname(__FILE__) . '/');
            require(pdfparser . 'pdfparser/autoload.php');
        }
    }
    
}