<?php
class Blog extends CI_Controller {

    public function index(){
        echo 'dfdfdf';
        log_message('debug','debug');
        log_message('info','info');
        log_message('error','error');
        show_error('show errror', 200,  'An Error Was Encountered');
    }
}