<?php

  namespace Framework\core
  {
      class Loader
      {

        
          private static $instance = null;


          private function __construct(){ }

          public static function init()
          { 
              if(is_null(self::$instance))
              { 
                 self::$instance = new self();
              }
              return self::$instance;
          }

          public  function helper($helper)
         {
             $helper_file = HELPERS.DIRECTORY_SEPARATOR.$helper.".php";
     
             if(file_exists($helper_file))
             {
                  require_once $helper_file;
             }
             else
             {
                 throw new \Exception("failed to load {$helper}!");
             }
            
          }
          public function  model($model='test')
          {
              $model_path = MODELS.DIRECTORY_SEPARATOR.$model.'.php';
              if(file_exists($model_path))
              {
                  require_once  $model_path;
                  if(class_exists($model))
                  {
                    return new $model();
                  }
                  else
                  {
                    throw new \Exception("<h3> model: {$model} not found!</h3>");
                  }
              }
              else
              {
                    throw new \Exception("<h3> model: {$model} not found!</h3>");  
              }
          }
          // load the view file
          public function  view($view,$data = array())
          {
              if(isset($view) && is_array($data))
              {
                  $view_file = VIEWS.DIRECTORY_SEPARATOR.$view.'.php';
                  if(file_exists($view_file))
                  {
                    ob_start();
                    extract($data);
                    require_once $view_file;
                    ob_end_flush();
                  }
                  else
                  {
                     die("file {$view} was not found!");
                  }
              }
              else
              {
                throw new \Exception("<h3> unknown view or  file doesnt exists!");
              }
          }
          public function get($key)
          { 
              if(file_exists(CONFIG_FILE))
              {
                  $settings = include(CONFIG_FILE);
                  if(isset($settings[$key]))
                      return $settings[$key];
                  else
                     throw Exception("<h3>invalid settings!</h3>");   
              }
              else
              { 
                  die("<h3> Invalid Configuration or file doesnt exists!</h3>");
              }
          }
      }
  }
 