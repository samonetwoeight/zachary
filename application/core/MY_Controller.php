<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	 public function __construct() {
       parent::__construct();
    }

    public function getPaginationConfig(){
    	$config["uri_segment"] = 3;
        $config['query_string_segment'] = 'page';
        $config['enable_query_string'] = TRUE;
        $config['page_query_string'] = TRUE;

        $config['use_page_numbers'] = TRUE;
        $config['reuse_query_string'] = TRUE;
        $config['attributes'] = array('class' => 'page-link');
        $config['full_tag_open'] = '<div class="dataTables_paginate paging_simple_numbers"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></div>';
        $config['num_tag_open'] = '<li class="paginate_button page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link" >';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
         
        $config['first_link'] = '<<';
        $config['first_tag_open'] = '<li class="paginate_button page-item previous">';
        $config['first_tag_close'] = '</li>';
         
        $config['last_link'] = '>>';
        $config['last_tag_open'] = '<li class="paginate_button page-item next">';
        $config['last_tag_close'] = '</li>';
         
        $config['next_link'] = '>';
        $config['next_tag_open'] = '<li class="paginate_button page-item previous">';
        $config['next_tag_close'] = '';

        $config['prev_link'] = '<';
        $config['prev_tag_open'] = '<li class="paginate_button page-item next">';
        $config['prev_tag_close'] = '';

        return $config;
    }
}

?>