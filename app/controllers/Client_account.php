<?php
class Client_account extends Controller{
    public function __construct(){
        $this->userModel=$this->model('User');
    }
    public function main(){
        $this->view('pages/main');
    }
    public function client_dashbord(){
        $this->view('client_account/client_dashbord');
    }
    public function claim(){
        $this->view('client_account/claim');
    }


}
/////7abit naamel controlleur esmo client dashbord
//ki nwali fi claim twali http://localhost/Roadstar-Hotel/client_account/claim.php
//ena n7ebha http://localhost/Roadstar-Hotel/client_account/client_dashbord/claim.php