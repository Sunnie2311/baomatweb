<?php
  class Pages extends Controller {
    public function __construct(){ //Constructor
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts'); //Phân quyền cho người chưa đăng nhập và người đã đăng nhập
      }
      $data = [ //Truyền data và hiển thị ra site
        'title' => 'DuongB\'s Website share posts',
        'description' => 'Mời bạn đăng nhập vào site này nhé',
        'info' => 'Test',
        'name' => 'DuongB',
        'location' => 'VietNam',
        'contact' => '+840967591412',
        'mail' => 'duongb@gmail.com'
      ];
     
      $this->view('pages/index', $data); //Gọi làm view và truyền biến data chứa dữ liệu ở trang web mặc định
    }

    public function about(){ //Hiển thị cho trang about us
      $data = [
        'title' => 'About Us',
        'description' => 'App to share posts with other users'
      ];

      $this->view('pages/about', $data);
    }

    public function contact(){ //Hiển thị cho trang contact
      $data = [
          'title' => 'DuongB',
          'description' => 'Contact site',
          'info' => 'This is site',
          'name' => 'DuongB\'s site',
          'location' => 'Vietnam',
          'contact' => '0967591412',
          'mail' => 'Test@gmail.com'
      ];

      $this->view('pages/contact', $data);
    }
  }