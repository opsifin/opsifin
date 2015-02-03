<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 if ( ! function_exists('twig_extend'))
 {
   function twig_extend() 
   {
     $CI = & get_instance();
     if (  $CI->twig instanceof Twig) {
       log_message('error', "Twig library not initialized");
       return;
   }

   $base_url = new Twig_SimpleFunction('base_url', 'base_url');

   // Now you’ll be able to use {{ base_url(‘something’) }} in your
   // template files, after you call this twig_extend() helper function
   // in your controllers.
   //$CI->twig->addFunction($base_url);
   $this->twig->addFunction('base_url');
  }
}