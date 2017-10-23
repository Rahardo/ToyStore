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
    
//    public function test_editProduct(){
//        $productID = '50';
//        $productName = '50';
//        $productCategory =  '50';
//        $productOverview = '50';
//        $productDetail = '50';
//        $productCost =  '50';
//        $productDisc = '50';
//        $productFixCost = '50';
//            
//           $sebelum = $this->obj->getTotProd();
//           $this->assertEquals(1, $sebelum);
//           $setelah = $this->obj->getTotProd();
//           $this->assertEquals(0, $setelah);
//           $this->request('POST', 'home/editProduct/1',
//                [
//                'productName' => '1',
//                'productCategory' => '1',
//                'productOverview' => '1',
//                'productDetail' => '1',
//                'productCost' => '1',
//                'productDisc' => '1',
//                'productFixCost' => '1',
//                ]);
//           $sebelum2 = $this->obj->getTotProd();
//           $this->assertEquals(0, $sebelum2);
//           $setelah2 = $this->obj->getTotProd();
//           $this->assertEquals(1, $setelah2);
//        }
        
    public function test_editProduct(){
        $output = $this->request('POST', 'home/editProduct/51',
            [
                'productName' => '1',
                'productCategory' => '1',
                'productOverview' => '1',
                'productDetail' => '1',
                'productCost' => '1',
                'productDisc' => '1',
                'productFixCost' => '1',
            ]);
        $updated = $this->CI->MyMod->find(51);
        $actual1 = $update->productName;
        $actual2 = $update->productCategory;
        $this->assertEquals('1', $actual1);
        $this->assertEquals('1', $actual2);
    }
    
    public function test_deleteProduct(){
        $expext = $this->obj->getTotProd()-1;
        $output = $this->request('POST', 'home/deleteProduct/40');
        $actual = $this->obj->getTotProd();
        $this->assertEquals($expext, $actual);
        $this->assertRedirect('home/admin');
    }
}

