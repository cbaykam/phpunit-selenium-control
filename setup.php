<?php 
 
  // setups requirements. And selenium package. s
  
  $bin_files = glob('bin/selenium*.jar');

  if(empty($bin_files)){
    shell_exec('wget -O ./bin/selenium-standalone-latest.jar https://goo.gl/LSKE9I'); 
  }
  
  if(!is_dir('./cache')){
    shell_exec('mkdir cache');
    shell_exec('chmod -R 777 cache');
  }