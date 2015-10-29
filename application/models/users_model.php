<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
                 function _update_user($name,$lastname,$email,$id){
			$result = $this->db->where('id',$id)
                         ->set('name',$name)
                        ->set('lastname',$lastname)
 			->set('email',$email)
 			->update('user');
 			return $result;
                }
                         
 
        function form_insert($data){   
                    $this->db->insert('user',$data);
             
                    }
        function delete_user($id){ 
                     //$this->db->delete('user',$id);   
                     $this->db->delete('user', array('id' => $id)); 
                }
        /* function delete_user2($id){ 
                     //$this->db->delete('user',$id);   
                     $this->db->delete('user', array('id' => $id)); 
                }
 */

            function _getUsers(){
    
            $result = $this->db->get('user');
                    //  return $result->row();  //แสดงแถวเดียว
            return $result;
        }            


                 function search($keyword , $type)
    {
        $this->db->like($type,$keyword);
        $result  =   $this->db->get('user');
        return  $result;
    }


    }
   