# Php unit selenium control package 

Launches the selenium server on test start and stops when tests end s

# Installation 

  - `composer require cbaykam/phpunit-selenium-control`
  - include the Phpunit Test listener in your phpunit.xml file 
    ``` 
    <listeners>
      <listener class="PhpUnitTestListener" file="./vendor/cbaykam/php-selenium-control/PhpUnitTestListeners.php">
    </listener>
    ```

# Requirements 
  - jre is required to start and stop the senium server