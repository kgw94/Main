<?php
   
   define('MAIN_PATH',dirname(__FILE__));
   
   
   use Framework\core\Router;

   spl_autoload(function($className){
      var_dump($className);
   });

   $myRouter = new Router();
   $myRouter->run();