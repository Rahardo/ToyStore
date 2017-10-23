<?php

class Crud_test extends TestCase
{
    public function setup(){
        $this->resetInstance();
        $this->CI->load->model('MyMod');
        $this->obj= $this->CI->MyMod;
    }
    public function test_createProduct(){
           $totalsebelum = $this->obj->getTotProd();
           $outputsukses = $this->request('POST', 'home/createProduct',
                [
                'btnSubmit' => 'true',
                'target1' => 'test',
                'target2' => 'test',
                'target3' => 'test',
                'productID' => '40',
                'productName' => 'test',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '1000',
                'productDisc' => '0',
                'productFixCost' => '1000',
                'gambar1' => 'test',
                'gambar2' => 'test',
                'gambar3' => 'test'
                ]);
            $total_setelah = $this->obj->getTotProd();
            $this->assertEquals($total_setelah, $totalsebelum+1);
            $this->assertRedirect('home/admin');
    }
            
    public function test_editProduct(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
                'productName' => 'test',
                'productCategory' => 'test',
                'productOverview' => 'test',
                'productDetail' => 'test',
                'productCost' => '111',
                'productDisc' => '111',
                'productFixCost' => '111',
            ]);
        $updated = $this->CI->MyMod->find(51);
        $actual1 = $update->productName;
        $actual2 = $update->productCategory;
        $this->assertEquals('test', $actual1);
        $this->assertEquals('test', $actual2);
    }
    
    public function test_deleteProduct(){
        $expext = $this->obj->getTotProd()-1;
        $output = $this->request('POST', 'home/deleteProduct/40');
        $actual = $this->obj->getTotProd();
        $this->assertEquals($expext, $actual);
        $this->assertRedirect('home/admin');
    }
}

