<?php
class Pages extends Controller{
    public function __construct(){
        // $this->userModel=$this->model('User');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function about_us(){
        $this->view('pages/about_us');
    }
    public function book(){
        $this->view('pages/book');
    }
    public function services(){
        $this->view('pages/services');
    }
    // public function sign_in(){
    //     $this->view('pages/sign_in'); 
    // }
    // public function sign_up(){
    //     $this->view('pages/sign_up');
    // }
    public function sustainability(){
        $this->view('pages/sustainability');
    }




}