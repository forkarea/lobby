<?php
namespace Lobby;

class Module {

  /**
   * The full location to contents/modules/module
   */
  public $dir = "";
  
  /**
   * The HTTP URL to contents/modules/module
   */
  public $url = "";
  
  public function __construct($vars){
    $this->init();
    $this->dir = $vars[0];
    $this->url = $vars[1];
  }
  
  public function init(){}

}
