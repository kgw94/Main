<?php
  
  namespace Framework\core
  {
    use Framework\core\Loader;
    
    class Controller
    {
        protected $load;
        protected $data;

        public function __construct()
        {
            $this->load = Loader::init();
            $this->data = array();
        }
        public function redirect($controller='Home' ,$action='index' ,$params = array())
        {


        }
    }
  }