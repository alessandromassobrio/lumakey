<?php
  class Pages {
    public function __construct(){
      echo 'Pages loaded';
    }

    public function index(){
      $data = [
        'title' => 'Home Page'
      ];

      $this->view('pages/index', $data);
    }
  }