<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	 
	 public function __construct()
    {
		parent::__construct();
        $this->load->model('MyMod');
		$this->load->model('login_database');
    
    }
 
	 
	public function index()
	{
		$data['product'] = $this->MyMod->getProduct();
		$data['category'] = $this->MyMod->getCategory();
		// $data['jumlahP'] =$this->MyMod->jumlahP();
		$this->load->view('index', $data);
	}

	public function singleProduct($productID)
	{
		$data['product'] = $this->MyMod->getDtl($productID);
		// $data['jumlahP'] =$this->MyMod->jumlahP();
		$this->load->view('single-page', $data);
	}

	public function product($categoryID)
	{
		$data['category'] = $this->MyMod->getCat($categoryID);
		$data['product'] = $this->MyMod->getProduct();
		// $data['jumlahP'] =$this->MyMod->jumlahP();
		$this->load->view('products', $data);
	}

	public function products()
	{
		$data['cat1'] = $this->MyMod->getProduct();
		$data['cat2'] = $this->MyMod->getProduct();
		$data['cat3'] = $this->MyMod->getProduct();
		// $data['jumlahP'] =$this->MyMod->jumlahP();
		$this->load->view('index', $data);
	}


}
?>
