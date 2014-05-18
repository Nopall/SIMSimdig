<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Sitemodel extends CI_Model 
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	function login($email,$pass)
	{
		$this->db->like('email', $email);
		$this->db->like('password', $pass); 
		$query = $this->db->get('admin');
		return $query;
	}

	 /*********************************** START MODEL POST ***************************/

    function create_item($table,$data)
    {
        $this->db->insert($table,$data);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function read_item($table,$id,$selecting,$num, $offset)
    {
        $this->db->order_by($id,$selecting);
        $sql = $this->db->get($table,$num,$offset);
        if($sql->num_rows() > 0){
            return $sql->result();
        } else {
            return null;
        }
    }

    function update_item($table,$id,$kode,$data)
    {
        $this->db->where($id,$kode);
        $this->db->update($table,$data);
        if($this->db->affected_rows() > 0 ){
            return true;
        } else {
            return false;
        }
    }

    function delete_item($table,$id,$kode)
    {
        $this->db->where($id,$kode);
        $this->db->delete($table);
        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    function get_item($table,$id,$kode)
    {
        $query = $this->db->get_where($table,array($id => $kode));
        if($query->num_rows() > 0){
            return $query->row();
        } else {
            return null;
        }
    }

    /*********************************** END MODEL POST ***************************/
}