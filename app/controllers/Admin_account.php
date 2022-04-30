<?php
class Admin_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
    }

    public function client_dashbord(){
        $this->view('admin_account/admin_dashbord');
    }
        
}