<?php
class MyMod extends CI_Model {

   
    public function getProduct($where=""){
        $data = $this->db->query('SELECT * FROM product '.$where);
        return $data->result_array();
    }

    public function getDtl($productID) {  
            $data = $this->db->get_where('product',array('productID'=>$productID));
            return $data->result_array();  
    }

    public function getCat($categoryID) {  
            // $data = $this->db->get_where('product',array('productCategory'=>$productCategory));
            $data = $this->db->get_where('category',array('categoryID'=>$categoryID));
            return $data->result_array();  
    } 

    public function getCategory($where=""){
        $data = $this->db->query('SELECT * FROM category '.$where);
        return $data->result_array();
    }

    public function getUser($where=""){
        $data = $this->db->query('SELECT * FROM user '.$where);
        return $data->result_array();
    }



}

?>