<?php
class welcome extends fh_ctrl{   
    public function index(){
        global $data;
        
        $data['title'] = $this->title("Home");
    }

    public function new_page(){
    	global $data;

    	$data['title'] = 'Page';

    	$data['name'] = ['full' => 'John Doe', 'age' => 20];

    	// $data['new_footer'] = 'no_footer';
    }
}