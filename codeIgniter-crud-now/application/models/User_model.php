<?php
class User_model extends CI_model{
    
    function create($formArray)
    {
        $this->db->insert('users',$formArray); //insert into (name rollno class) values(?,?)
    }
    
    function all(){
        return $users=$this->db->get('users')->result_array(); //Select * from users
    }
    function getUser($name){
        $this->db->where('name',$name);
        return $user=$this->db->get('users')->row_array();
    }

    function updateUser($name,$formArray){
        $this->db->where('name',$name);
        $this->db->update('users',$formArray); //update users set name=,User_rollno=,class=,
    }

    function deleteUser($name){
        $this->db->where('name',$name);
        $this->db->delete('users'); //delete from users where name=,User_rollno=,class=,
    }

}
?>