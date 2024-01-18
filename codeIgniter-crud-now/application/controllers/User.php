<?php
class User extends CI_controller{

    function index(){
        $this->load->model('User_model');
        $users=$this->User_model->all();
        $data=array();

        $data['users']=$users;
        $this->load->view('list',$data);
    }
    function create() {
        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('user_rollno','User_Rollno','required');
        $this->form_validation->set_rules('class','Class','required');

        if($this->form_validation->run()==false){
            $this->load->view('create');
        }else{
            //save record to the database
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['user_rollno']=$this->input->post('user_rollno');
            $formArray['class']=$this->input->post('class');
            $formArray['created_at']=date('Y-m-d');
            $this->User_model->create($formArray);
            $this->session->set_flashdata('success','Record added successfully!');
            redirect(base_url().'index.php/user/index');


        }
    }
    function edit($name)
    {
        $this->load->model('User_model');
        $user=$this->User_model->getUser($name);
        $data=array();
        $data['user']=$user;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('user_rollno','User_Rollno','required');
        $this->form_validation->set_rules('class','Class','required');

        if($this->form_validation->run()==false){
            $this->load->view('edit',$data);
        }else{
            $formArray=array();
            $formArray['name']=$this->input->post('name');
            $formArray['user_rollno']=$this->input->post('user_rollno');
            $formArray['class']=$this->input->post('class');
            
            $this->User_model->updateUser($name,$formArray);
            $this->session->set_flashdata('success','Record updated succesfully');
            redirect(base_url().'index.php/user/index');
        }

    }
    function delete($name)
    {
        $this->load->model('User_model');
        $user=$this->User_model->getUser($name);
        if(empty($user)){
            $this->session->set_flashdata('failure','');
            redirect(base_url().'index.php/user/index');
        }
        $this->User_model->deleteUser($name);
        $this->session->set_flashdata('success','Record deleted successfully');
        redirect(base_url().'index.php/user/index');
    }
}
?>