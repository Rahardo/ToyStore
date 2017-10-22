<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class View_test extends TestCase
{
	public function test_home_index()
	{
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_session()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_session_salahnama()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_home_index_session_salahstatus()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/index');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        

	public function test_singleProduct()
	{
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_index_session()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_index_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_index_session_salahnama()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}
        
        public function test_singleProduct_session_salahstatus()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/singleProduct');
		$this->assertContains('<title>Toy Store</title>', $output);
	}

        
	public function test_home_admin_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h2> PRODUCT LIST </h2>', $output);
	}
        
        public function test_home_admin_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h2> PRODUCT LIST </h2>', $output);
	}
        
        public function test_home_admin_session_nonadmin()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h2> PRODUCT LIST </h2>', $output);
	}
               
        public function test_home_admin_ession_salahnama()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h2> PRODUCT LIST </h2>', $output);
	}
        
        public function test_home_admin_session_salahstatus()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/admin');
		$this->assertContains('<h2> PRODUCT LIST </h2>', $output);
	}
        
        
        public function test_home_adminadd_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
        
        public function test_home_adminadd_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
        
        public function test_home_adminadd_session_nonadmin()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
               
        public function test_home_adminadd_ession_salahnama()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
        
        public function test_home_adminadd_session_salahstatus()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/adminadd');
		$this->assertContains('<h4>Tambah Data</h4> ', $output);
	}
        
        
        public function test_home_adminedit_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'home/adminedit');
		$this->assertContains('<h4>Edit Produk</h4> ', $output);
	}
        
        public function test_home_adminedit_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/adminedit');
		$this->assertContains('<h4>Edit Produk</h4> ', $output);
	}
        
        public function test_home_adminedit_session_nonadmin()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/adminedit');
		$this->assertContains('<h4>Edit Produk</h4> ', $output);
	}
               
        public function test_home_adminedit_ession_salahnama()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'home/adminedit');
		$this->assertContains('<h4>Edit Produk</h4> ', $output);
	}
        
        public function test_home_adminedit_session_salahstatus()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'home/adminedit');
		$this->assertContains('<h4>Edit Produk</h4> ', $output);
	}
        
        
        public function test_userAuthentic_index_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
        public function test_userAuthentic_index_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
        public function test_userAuthentic_index_session_nonadmin()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
               
        public function test_userAuthentic_index_session_salahnama1()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
        public function test_userAuthentic_index_session_salahsnama2()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'user_authentication/index');
		$this->assertContains('<title>Login Form</title>', $output);
	}
        
        
        public function test_userAuthentic_registration_nosession()
	{
                $_SESSION['username'] = "";
                $_SESSION['status'] = "";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
        public function test_userAuthentic_registration_session_admin()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
        public function test_userAuthentic_registration_session_nonadmin()
	{
                $_SESSION['username'] = "arda";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
               
        public function test_userAuthentic_registration_session_salahnama1()
	{
                $_SESSION['username'] = "rahadhi";
                $_SESSION['status'] = "admin";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
        
        public function test_userAuthentic_registration_session_salahnama2()
	{
                $_SESSION['username'] = "admin";
                $_SESSION['status'] = "logged_in";
		$output = $this->request('GET', 'user_authentication/user_registration_show');
		$this->assertContains('<title>Registration Form</title>', $output);
	}
}
