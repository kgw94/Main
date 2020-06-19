<?php

  namespace  Framework\core
  {
      use Framework\core\Loader as App;
      
      class Router
      {
          private $controller = null;
          private $action = null;
          private $params = [];
          private $url;

          public function __construct()
          {
              $this->url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
              $this->url = array_slice($this->url,1,count($this->url));
              $this->controller = array_shift($this->url);
              $this->action = array_shift($this->url);

              if(empty($this->controller))
                  $this->controller = App::init()->get('defaults')['controller'];
              if(empty($this->action))
                  $this->action = App::init()->get('defaults')['action'];
              $this->params = array_merge($this->params,$this->url);

          }
          public function run()
          {
        
              $this->controller = ucfirst($this->controller);
              $this->controller = "\Application\Controllers\\".$this->controller."";
              call_user_func_array([new $this->controller,$this->action],isset($this->params) ? $this->params : []);
                  
          }
      }
  }