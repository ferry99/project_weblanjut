<?php
class site extends CI_Controller{
	
    function __construct(){
        parent::__construct();    
        $this->load->model('my_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('sub');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->model('my_model');        
        $data['query1'] = $this->my_model->getData(1)->result_array();
        $data['query2'] = $this->my_model->getData(2)->result_array();
        $data['query3'] = $this->my_model->getData(3)->result_array();
        $data['page'] = 'main';
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

    public function tag($key){
        $this->load->model('my_model');
        $data['query'] = $this->my_model->getDataByTag($key)->result_array(); 
        $data['page'] = 'games_tag';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

    public function console($key){
        $this->load->model('my_model');
        $data['query'] = $this->my_model->getDataByCons($key)->result_array(); 
        $data['page'] = 'games_cons';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }


    public function games($key){
        $this->load->model('my_model');
        $key = urldecode($key);
        $data['query'] = $this->my_model->getDataByGame($key)->result_array(); 
        $data['page'] = 'games_mygame';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }


    public function search(){
        $this->load->model('my_model');
        $data['page'] = 'search_page';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['gameResult'] = $this->my_model->getAllData()->result_array(); 
        $this->load->view('index1' , $data);
    }

    public function ajaxSearch($keyword=''){
        $this->load->model('my_model');
        $this->load->helper('html');
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();       
        $data['gameResult'] = $this->my_model->getDataByKeyword($keyword)->result_array();
        $this->load->view('search_page2', $data);
    }

    public function about(){
        $this->load->model('my_model');
        $data['page'] = 'about_page';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

    public function contact(){
        $this->load->model('my_model');
        $data['page'] = 'contact_page';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

    public function sendEmail(){
        $this->form_validation->set_rules('name', 'name', 'required|max_length[12]|xss_clean');
        $this->form_validation->set_rules('email', 'email', 'required|max_length[25]|xss_clean');
        $this->form_validation->set_rules('message', 'message', 'required|max_length[100]|xss_clean');
    
        if($this->form_validation->run() === true){
            $this->load->library('email');
              $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com'; //change this
        $config['smtp_port'] = '465';
        $config['smtp_user'] = 'ferrysanjaya99@gmail.com'; //change this
        $config['smtp_pass'] = 'so19423705'; //change this
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard

                $this->email->initialize($config);

            $this->email->from(set_Value('email') , set_value('name'));
            $this->email->to('ferrysanjaya99@gmail.com');
            $this->email->subject('this subject');
            $this->email->message(set_value('message'));

            $this->email->send();

            echo $this->email->print_debugger();
            
        }elseif ($this->form_validation->run() === false) {
            $data['page'] = 'contact_page';
            $data['LoggedIn'] = LoggedIn();
            $data['IsAdmin'] = IsAdmin();
            $this->load->view('index1' , $data);       
        }

    }

    public function get_profile_post(){
        $data = $this->input->post("keyword");
        echo  "hasil : ".$data;
    }
    
   
}
?>