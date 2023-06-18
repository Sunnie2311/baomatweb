<?php
  class Pages extends Controller {
    public function __construct(){ //Constructor
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('posts'); //Phân quyền cho người chưa đăng nhập và người đã đăng nhập
      }
    }
  }