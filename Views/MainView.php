<?php 

namespace Views;


class MainView
{
    private $filename;
 
    
    public function __construct($filename)
    {
        $this->filename = $filename;
      
    }

    public function render($arr = []){
    
        include('pages/'.$this->filename.'.php');
      


    }
};