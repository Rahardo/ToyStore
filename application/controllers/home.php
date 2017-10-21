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

	public function admin(){
		$data['product'] = $this->MyMod->getProduct();
		$this->load->view('admin/list', $data);
	}
	public function adminadd(){
		$data['product'] = $this->MyMod->getProduct();
		$this->load->view('admin/add', $data);
	}
	public function adminedit($productID){
		// $data['product'] = $this->MyMod->getProduct();
		$data['product'] = $this->MyMod->getDtl($productID);
		$this->load->view('admin/edit', $data);
	}


	public function createProduct(){
		if (isset($_POST['btnSubmit'])){
			$target1 = "./assets/images/".basename($_FILES['productPic1']['name']);
			$target2 = "./assets/images/".basename($_FILES['productPic2']['name']);
			$target3 = "./assets/images/".basename($_FILES['productPic3']['name']);

			$productID = $_POST['productID'];
			$productName = $_POST['productName'];
			$productCategory =  $_POST['productCategory'];
			$productOverview = $_POST['productOverview'];
			$productDetail = $_POST['productDetail'];
			$productCost =  $_POST['productCost'];
			$productDisc = $_POST['productDisc'];
			$productFixCost = $_POST['productFixCost'];
			$gambar1 = $_FILES['productPic1']['name'];
			$gambar2 = $_FILES['productPic2']['name'];
			$gambar3 = $_FILES['productPic3']['name'];
			$data_insert = array(
				'productID' => $productID,
				'productName' => $productName,
				'productCategory' => $productCategory,
				'productOverview' => $productOverview,
				'productDetail' => $productDetail,
				'productCost' => $productCost,
				'productDisc' => $productDisc,
				'productFixCost' => $productFixCost,
				'productPic1' => $target1,
				'productPic2' => $target2,
				'productPic3' => $target3
			);

			// if(is_uploaded_file($_FILES['productPic1']['tmp_name'])){
			// 	move_uploaded_file($_FILES['productPic1']['tmp_name'], $target1);
			// 	echo "berhasil";


			// } else {
			// 	echo "salah";
			// }

			$res = $this->db->insert('product', $data_insert) or trigger_error(mysql_error().$sql);
		}
		redirect('home/admin');
        // $this->load->view('admin/blog/blog', $data);
	}
 
    function editProduct($productID)
    {
        $productID = $_POST['productID'];
		$productName = $_POST['productName'];
		$productCategory =  $_POST['productCategory'];
		$productOverview = $_POST['productOverview'];
		$productDetail = $_POST['productDetail'];
		$productCost =  $_POST['productCost'];
		$productDisc = $_POST['productDisc'];
		$productFixCost = $_POST['productFixCost'];
		$update_product = array(
			'productID' => $productID,
			'productName' => $productName,
			'productCategory' => $productCategory,
			'productOverview' => $productOverview,
			'productDetail' => $productDetail,
			'productCost' => $productCost,
			'productDisc' => $productDisc,
			'productFixCost' => $productFixCost,
		);
		$where = array('productID' => $productID);
		$upd = $this->MyMod->update('product', $update_product, $where);
		if ($upd >= 1) {
			redirect('home/admin');
		} else {
			echo "Gagal";
		}
    }
 
    function deleteProduct($productID){
		$wheree = array('productID' => $productID);
		$res = $this->MyMod->delete('product',$wheree);
		if($res>=1){
			redirect('home/admin');
		}
	}


}
?>
