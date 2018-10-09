<?php
  class Pages extends Controller {

    public function __construct(){

      $this->postModel = $this->model('Post');

    }

    public function index(){

      $data = [
        'title' => 'Joolzherbal'
      ];

      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];
      $this->view("pages/about",$data);
    }
    public function fullpost(){
      $data = [
        'title' => 'Full post'
      ];
      $this->view("pages/fullpost",$data);
    }
    public function contact(){
      $data = [
        'title' => 'Contact'
      ];
      $this->view("pages/contact",$data);
    }
  }
