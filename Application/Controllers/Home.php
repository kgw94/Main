<?php

  /* default home controller */
  namespace Application\Controllers
  {
      use Framework\core\Controller;

      class Home extends Controller
      {
            public function __construct()
            {
                parent::__construct();
            }
            public function index()
            {
                $this->data['title'] = 'Home';
                $this->data['app'] = $this->load->get('defaults')['App'];
                $this->load->view('Home' ,$this->data);
            }
      }
  }