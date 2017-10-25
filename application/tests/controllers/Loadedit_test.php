<?php

class Loadedit_test extends TestCase
{
  public function setUp()
  {
    $this->resetInstance();
  }

  public function test_loadedit_benar(){
    $_SESSION['admin'] = 'admin';
    $output = $this->request('GET', 'home/editProduct/51');
    $this->assertContains('admin', $output);
  }

  public function test_loadedit_belumlogin(){
    $output = $this->request('GET', 'home/editProduct/51');
    $this->assertRedirect('home/index')
  }
}

?>