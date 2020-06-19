<?php
  
 namespace Framework\core
 {
    class Model
    {
       public function __construct()
       {
           echo "<h3> This is the Model:".__CLASS__.PHP_EOL;
       }
    }
    $model = new Model();
 }