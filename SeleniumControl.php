<?php 
  namespace CBaykam\SeleniumControl; 

  require('setup.php'); 

  /**
  * Starts and stops the selenium server 
  */
  class SeleniumControl
  { 
    public static function start(){
      $pid = shell_exec("/bin/bash -c 'java -jar ./bin/selenium-standalone-latest.jar >> /dev/null 2>&1 & echo $!'"); 
      Self::record_pid(); 
    }

    public function stop(){
      shell_exec('kill -9 ' . $this->get_pid());
    }

    
  }

  SeleniumControl::start();
  sleep(10); 
  SeleniumControl::stop(); 