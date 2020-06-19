<?php
   
   define('MAIN_PATH',dirname(__FILE__));
   define('APPLICATION',MAIN_PATH.DIRECTORY_SEPARATOR.'Application'.DIRECTORY_SEPARATOR);
   define('CONTROLLERS',APPLICATION.'Controllers'.DIRECTORY_SEPARATOR);
   define('Models',APPLICATION.'Models'.DIRECTORY_SEPARATOR);
   define('Helpers',APPLICATION.'Helpers'.DIRECTORY_SEPARATOR);
   define('CONFIG_FILE',APPLICATION.'Config'.DIRECTORY_SEPARATOR.'config.php');
   define('VIEWS',APPLICATION.'Views'.DIRECTORY_SEPARATOR);



   use Framework\core\Router;

   spl_autoload_register(function($class){
          $file = MAIN_PATH.DIRECTORY_SEPARATOR.$class.".php";
          if(file_exists($file))
            require_once $file;
          else
            die('<h3> failed to load'.$file.'</h3>');
   });

   $myRouter = new Router();
   $myRouter->run();