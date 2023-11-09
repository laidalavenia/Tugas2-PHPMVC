<?php
require_once 'controller/controllers.php';

    function view($page, $data=[]) {
        include 'view/'.$page.'.php';
    }

    // static function adminDashboard(){
    //     view('admin/adminDashboard');
    // }


// class Admin extends Functions{
//     static function adminDashboard(){
//         view('admin/adminDashboard');
//     }

//     public function adminLogin(){
//         $this->view('admin/adminLogin');
//     }
// }

// class Customer extends Functions{
//     public function customerLogin(){
//         $this->view('forms/customerLogin');
//     }

//     public function customerProfile(){
//         $this->view('forms/customerProfile');
//     }
    
// }

// class Shop extends Functions{
//     public function cart(){
//         $this->view('shop/cart');
//     }
//     public function contact(){
//         $this->view('shop/contact');
//     }
//     public function home(){
//         $this->view('shop/home');
//     }
//     public function item(){
//         $this->view('shop/item');
//     }
//     public function order(){
//         $this->view('shop/order');
//     }
// }


// class About extends Functions{
//     public function index($nama = 'Laida', $buah = 'Apel')
//     {
//        $data['nama'] = $nama;
//        $data['buah'] = $buah;
//        $data['judul'] = 'About Me';
//        $this->view('templates/header', $data);
//        $this->view('about/index', $data); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
//     public function page()
//     {
//        $data['judul'] = 'Pages';
//        $this->view('templates/header', $data);
//        $this->view('about/page'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
//  }
 
//  class Admin extends Functions{
//     public function index()
//     {
//        $data['judul'] = 'Customer Login';
//        $this->view('templates/header', $data);
//        $this->view('admin/index'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
//     public function adminDashboard()
//     {
//        $data['judul'] = 'Admin Dashboard';
//        $this->view('templates/header', $data);
//        $this->view('admin/adminDashboard'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
 
//     public function adminLogin()
//     {
//        $data['judul'] = 'Admin Login';
//        $this->view('templates/header', $data);
//        $this->view('admin/adminLogin'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
//  }
 
//  class Forms extends Functions{
//     public function customerLogin()
//     {
//        $data['judul'] = 'Customer Login';
//        $this->view('templates/header', $data);
//        $this->view('forms/customerLogin'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
 
//     public function customerProfile()
//     {
//        $data['judul'] = 'Customer Profile';
//        $this->view('templates/header', $data);
//        $this->view('forms/customerProfile'); //menampilkan "views" berdasarkan directory & file 
//        $this->view('templates/footer');
//     }
//  }
?>