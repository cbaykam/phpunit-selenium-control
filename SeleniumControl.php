<?php 
  namespace Cbaykam\SeleniumControl; 

  require('setup.php'); 

  /**
  * Starts and stops the selenium server 
  */
  class SeleniumControl
  { 

    const pid_file = './cache/selenium.pid'; 
    /**
     * Starts the selenium server as background task
     *  
     * @access public
     * 
     * @return void
     */
    public static function start(){
      // start the selenium server if it is not already running. 
      if(!file_exists(Self::pid_file)){
        $pid = shell_exec("/bin/bash -c 'java -jar ./bin/selenium-standalone-latest.jar >> /dev/null 2>&1 & echo $!'"); 
        Self::record_pid($pid);
      }
    }

    /**
     * Stops the selenium server
     *
     * @access public 
     *
     * @return Void 
     */
    public static function stop(){
      shell_exec('kill -9 ' . Self::get_pid());
    }

    /**
     * Records the process id of the selenium server process to a pid file 
     * 
     * @access private
     * 
     * @param Int - the pid of the selenium process
     * @return Void
     */
    private static function record_pid($pid){
      // create the file
      $file = fopen(Self::pid_file, 'w');
      fwrite($file, $pid); 
      fclose($file); 
    }

    /**
     * Get the pid id and remove the pid file. 
     * 
     * @access private 
     * 
     * @return Integer -  the id of the selenium process
     */
    private static function get_pid(){
      $file = fopen(Self::pid_file, 'r');
      $pid = fread($file, filesize(Self::pid_file));  
      fclose($file);
      unlink(Self::pid_file); 
      return $pid; 
    }   
  }