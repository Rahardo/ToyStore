<?php
class Editproduct_test extends TestCase
{
	public function test_editProductBenar(){
		$output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => 'test',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data berhasil di update', $output);
	}

	public function test_editProductGaadaID(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '982368258',
                'productName' => 'test',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Gagal', $output);
    }

    public function test_editProductKosongID(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '',
                'productName' => 'test',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductKosongNama(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => '',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductKosongKategori(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => 'aksesoris cantik',
                'productCategory' => '',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductHargaHuruf(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => 'aksesoris cantik',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => 'huruf',
                'productDisc' => '99',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductDiscHuruf(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => 'aksesoris cantik',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => 'huruf',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductHargaAkhirHuruf(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
            	'productID' => '51',
                'productName' => 'aksesoris cantik',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '99',
                'productFixCost' => 'huruf',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }

    public function test_editProductDiskonGede(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
                'productID' => '51',
                'productName' => 'aksesoris cantik',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '111',
                'productFixCost' => '111',
            ]);
        $this->assertContains('Data harus terisi dengan benar', $output);
    }
}
?>