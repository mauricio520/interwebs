<?php

namespace Views;

class MainViewHome{

private $filename;
private $header;
private $footer;

public function __construct($filename,$header ='header',$footer='footer')
{
    $this->filename = $filename;
    $this->header = $header;
    $this->footer = $footer;
    
}

public function render(){
    include('pages/templates/'.$this->header.'.php');
    include('pages/'.$this->filename.'.php');
    include('pages/templates/'.$this->footer.'.php');


}

}