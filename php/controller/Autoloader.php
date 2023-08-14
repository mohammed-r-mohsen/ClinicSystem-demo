<?php 
spl_autoload_register("AutoLoader");

 function AutoLoader($classname)
{
   $exe = ".php"; 
   $fullpath = $classname . $exe ;
   if (file_exists($fullpath)) {
      require_once $fullpath;
   }
   else if(file_exists("/php/model/$fullpath"))
   {
        require_once "../model/$fullpath";
      // throw new Exception("class $fullpath does not exist ");
   }
}