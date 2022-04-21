<?php
class Client_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
    }

    public function client_dashbord(){
        $this->view('client_account/client_dashbord');
    }
}