<?php
class admin extends CI_Controller{
	
    function __construct(){
        parent::__construct();    
        $this->load->model('my_model');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('sub');
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->library('form_validation');
        if ($data['LoggedIn'] == false && $data['IsAdmin'] == false) {
            redirect('login','refresh');
        }elseif($data['LoggedIn'] == true && $data['IsAdmin'] == false){
            redirect('login','refresh');
        }
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


    public function games($key){
        $this->load->model('my_model');
        $key = urldecode($key);
        $data['query'] = $this->my_model->getDataByGame($key)->result_array(); 
        $data['page'] = 'games_mygame';       
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

     public function myProfile(){
        $this->load->model('admin_model');
        $data['sessionName'] = getSession();
        $data['message'] = '';     
        $data['page'] = 'profile_page';  
        $data['profile'] = $this->admin_model->getProfile($data['sessionName'])->result_array();         
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['success'] = "";
        $this->load->view('index1' , $data);
    }

     public function changePass(){
        $this->load->model('admin_model');
        $data['sessionName'] = getSession();
        $data['page'] = 'changePass_page';  
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['success'] = "";
        $this->load->view('index1' , $data);
    }

    public function doUpdate(){
        $this->load->model('admin_model');
        $data['sessionName'] = getSession();
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['message'] = '';     
        $this->form_validation->set_rules('old_pass', 'old password', 'required|max_length[25]|xss_clean');
        $this->form_validation->set_rules('new_pass', 'new password', 'required|max_length[100]|xss_clean'); 
        $this->form_validation->set_rules('repass', 'new password', 'required|max_length[100]|xss_clean'); 

        if($this->form_validation->run() === true){
             $password = array(
                    'Password' => $this->input->post('new_pass')                                  
            );
            $data['success'] = $this->admin_model->updatePass($data['sessionName'] , $password);
            $data['profile'] = $this->admin_model->getProfile($data['sessionName'])->result_array();         
            $data['page'] = 'profile_page';
            $data['message'] = 'Change Passsword Success !';
            $this->load->view('index1' , $data);
        }elseif($this->form_validation->run() === false){
            $data['page'] = 'changePass_page';  
            $this->load->view('index1' , $data);
           // redirect('admin/changePass');

         }
       
    }

    public function addGames(){
        $this->load->model('admin_model');
        $data['page'] = 'adding_game';  
        $data['message'] = '';
        $data['console'] = $this->admin_model->getConsole()->result_array(); 
        $data['category'] = $this->admin_model->getCategory()->result_array();  
        $data['tag'] = $this->admin_model->getTag()->result_array();                
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['success'] = '';
        $data['error'] = '';
        $simpan = $this->input->post('tombol');

        if(isset($simpan)){            
                $this->form_validation->set_rules('name', 'Game Name', 'required|max_length[25]|xss_clean');
                $this->form_validation->set_rules('desc', 'Description', 'required|max_length[100]|xss_clean'); 
            
            if($this->form_validation->run() === true){

                $tmp_name = $_FILES['picture']['tmp_name'];
                $name = $_FILES['picture']['name'];
                $name = date("Y-m-d-H-i-s") .'-'. substr(md5(rand(0,10000)),0,6) .'-'. $name;
                
                $config['file_name'] = $name;
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '1000';
                $config['max_width']  = '5000';
                $config['max_height']  = '5000';

                $this->load->library('upload', $config);
                $field = 'picture';
                
                if ( ! $this->upload->do_upload($field))
                {
                    $data['error'] = $this->upload->display_errors();
                    $this->load->view('index1', $data);
                }
                else
                {
                    $data['success1'] = "success";
                    $game = array(
                            'Game_name' => $this->input->post('name') ,
                             'Id_console' => $this->input->post('console') ,
                           'Id_category' => $this->input->post('category'),
                           'Id_tag' => $this->input->post('tag'),
                          'Description' => $this->input->post('desc'),
                        'Status' => $this->input->post('status'),
                          'Picture' => $name
                    );
                    $data['message'] = 'Add success !!!';
                    $data['success2'] = $this->admin_model->addGame($game);       
                    $this->load->view('index1' , $data);
                }

             }elseif($this->form_validation->run() === false){
                $this->load->view('index1' , $data);
             }
        } else {
            $this->load->view('index1' , $data);
        }
    
    }


    public function settingUser(){
        $this->load->model('admin_model');
         $this->load->library('table');       
        $data['page'] = 'setting_user';  
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $data['users'] = $this->admin_model->getAllUser()->result();
       
        $data['message'] = '';
        if($this->uri->segment(3) == 'delete_success'){
            $data['message'] = 'delete berhasil!!!!!';
        }
        $this->load->view('index1' , $data);
    }

    public function deleting($key){
        $this->load->model('admin_model');
        $this->admin_model->doDelete($key); 
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();       
        $data['message'] = '';        
        redirect ('admin/settingUser/delete_success' , 'refresh');
    }

    public function deleteGame($key){
        $this->load->model('my_model');
        $this->load->model('admin_model');
        $this->admin_model->doDeleteGame($key); 
        $data['gameResult'] = $this->my_model->getAllData()->result_array(); 
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();       
        $data['message'] = '';        
        $this->load->view('search_page2' , $data);
    }

    public function editInfo($file , $root ,$action){
        if($action == 'write'){
            $data['action'] = 'write';
            $data['success'] = true;
        }
        $this->load->model('admin_model');
        $data['page'] = 'edit_page';  
        $data['root'] = $root;
        $data['file'] = $file;        
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);
    }

    public function settingDatabase(){
        $this->load->model('admin_model');
        $data['page'] = 'setting_database';  
        $data['LoggedIn'] = LoggedIn();
        $data['IsAdmin'] = IsAdmin();
        $this->load->view('index1' , $data);   
    }
   
}
?>