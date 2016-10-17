<?php 
namespace CBaykam\SeleniumControl; 

use \PHPUnit\Framework\TestCase;
use SeleniumControl as SC;  
/**
* Implements the test listeners to the php unit 
*/
class PhpUnitTestListener implements PhpUnit_Framework_TestListener
{

  public function startTestSuite(PHPUnit_Framework_TestSuite $suite){
    SC::start();  
  }

  public function endTestSuite(PHPUnit_Framework_TestSuite $suite){
    SC::stop(); 
  }
}