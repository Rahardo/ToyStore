<?php
class MyMod extends CI_Model {

   
    public function getProduct($where=""){
        $data = $this->db->query('SELECT * FROM product '.$where);
        return $data->result_array();
    }

    public function update($tabelName, $data, $where){
        $upd = $this->db->update($tabelName, $data, $where);
        return $upd;
    }

    public function delete($tableName, $where){
        $res = $this->db->delete($tableName, $where);
        return $res;
    }

    public function getDtl($productID) {  
            $data = $this->db->get_where('product',array('productID'=>$productID));
            return $data->result_array();  
    }

    public function getTotProd(){
            $total = $this->db->get('product');
            return $total->num_rows();
    }

//    public function getTotUser(){
//            $total = $this->db->get('user_login');
//            return $total->num_rows();
//    }

    // public function getCat($categoryID) {  
    //         $data = $this->db->get_where('category',array('categoryID'=>$categoryID));
    //         return $data->result_array();  
    // } 

    // public function getCategory($where=""){
    //     $data = $this->db->query('SELECT * FROM category '.$where);
    //     return $data->result_array();
    // }

//    public function getUser($where=""){
//        $data = $this->db->query('SELECT * FROM user '.$where);
//        return $data->result_array();
//    }

    public function find($productID){
            $result = $this->db->where('productID', $productID)
                               ->limit(1)
                               ->get('product');
            if($result->num_rows()>0)
                return $result->row();
            else return array();
        }

}

?>