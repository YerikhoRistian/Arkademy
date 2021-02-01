<?php

class Produk_model extends CI_Model{
    public function tampil_data(){
        return $this->db->get('produk');
    }
    public function insert($data)
	{
		return $this->db->insert('produk', $data);
    }
    
    public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
    }
    
    public function Update($data, $id)
	{
		return $this->db->where('id_produk', $id)->update('produk', $data);
    }
    
    public function delete($id)
	{
		return $this->db->where('id_produk', $id)->delete('produk');
	}
}