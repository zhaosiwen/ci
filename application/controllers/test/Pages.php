<?php
class Pages extends CI_Controller{
    
    public function view($page='home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
        }
        echo 'test';
        $data['title'] = ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer',$data);
    }
    
    public function index()
    {
        echo 'hello world';
    }
    public function comment($who,$content){
        echo $who.'='.$content;
    }
    
//     public function _remap($method,$params = array()){
//         if($method === 'some_method')
//         {
//             $this->$method();
//         }
//        else 
//         {
//             $this->default_method();
//         }
//          $method = 'process_'.$method;
//          if(method_exists($this,$method))
//          {
//              return call_user_func_array(array($this,$method),$params);
//          }
//          show_404();
//     }
    public function process_show($a,$b,$c)
    {
        echo $a.'='.$b.'='.$c;
    }
    public function some_method()
    {
        echo 'some_method';
    }
    public function default_method(){
        echo 'default_method';
    }
    
    public function _output($output)
    {
        if($this->output->cache_expiration>0)
        {
            $this->output->_write_cache($output);
        }
        
        echo 'fd';
        echo $output;
    }
}