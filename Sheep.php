<?php

/*
__PocketMine Plugin__
name=Sheep
version=1.0
description=Sheep
author=KnownUnown
class=Sheep
apiversion=10
*/

class Sheep implements Plugin{
  
  private $api;
  
  public function __construct(ServerAPI $api, $server = false){
    $api = $this->api;
  }
  
  public function init(){
    $this->api->console->register("sheep","Sheep",array($this, "Sheep"));
    $this->api->ban->cmdWhitelist("sheep");
  }
  
  public function Sheep($cmd, $issuer){
    $issuer->sendChat("Bahhhhhh");
  }
  
  public function __destruct(){
    
  }
  
}

?>
