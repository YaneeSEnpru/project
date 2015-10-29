<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manageuser extends CI_Controller {

	
	function __construct(){
		parent::__construct();
		$this->load->model('Users_model','Users');
	}



 
        
       // if   (isset( $postdata)){
       function insert(){
        $postdata = array(
              'id' => $this->input->post('u_id'),
              'name' => $this->input->post('u_name'),
              'lastname' => $this->input->post('u_lastname'),
              'email' => $this->input->post('u_email')
            );
                $this->Users->form_insert($postdata);
		$data['users'] = $this->Users->_getUsers();
		$this->load->view('users/show_all',$data);
        
}
        function update_user_id(){ 
           
            $id    = $this->input->post('u_id');
            $name = $this->input->post('u_name');
            $lastname = $this->input->post('u_lastname');
            $email  = $this->input->post('u_email');
            $this->Users->_update_user($name,$lastname,$email,$id);
            
            $data['users'] = $this->Users->_getUsers();
		        $this->load->view('users/show_all',$data);
        }
        
      function delete_user_id(){
           //$id='12';
           $id = $this->input->post('u_id');
           $this->Users->delete_user($id);
           
          
           
           $data['users'] = $this->Users->_getUsers();
		       $this->load->view('users/show_all',$data);
      }
        
      /*  function delete_user_id2($id){
               $this->db->where('id',$id); //ใส่ค่าเมธอด
               $this->db->delete_user2('users');
        }
*/
  function getall(){
            
            $data['users'] = $this->Users->_getUsers();
    $this->load->view('users/show_all',$data);
                 
        }


         function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $type = $this->input->post('type');  
        $data['users']    =   $this->Users->search($keyword , $type );
        $this->load->view('users/show_all',$data);
    }


}

?>