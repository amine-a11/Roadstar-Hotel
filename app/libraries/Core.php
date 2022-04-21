<?php
class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'main';
    protected $params = [];

    public function __construct(){
        // print_r($this->getUrl());
        $url = $this->getUrl();
        // If exists, set as controller
        if(file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            // Unset 0 Index
            unset($url[0]);
        }
        require_once '../app/controllers/'. $this->currentController . '.php';

        $this->currentController = new $this->currentController;
        if(isset($url[1])){
            // Check to see if method exists in controller
            if(method_exists($this->currentController, $url[1])){
              $this->currentMethod = $url[1];
              // Unset 1 index
              unset($url[1]);
            }
        }
        //get parameters
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    public function getUrl(){
        if(isset($_GET['url'])){
          $url = rtrim($_GET['url'], '/');
          $url = filter_var($url, FILTER_SANITIZE_URL);
          $url = explode('/', $url);
          return $url;
        }
      }
}