<?php
require_once('vendor/autoload.php');
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverExpectedCondition;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;


$desiredCapabilities = DesiredCapabilities::chrome();
$options = new ChromeOptions();
$options->addArguments(['--headless','--no-sandbox']);
$desiredCapabilities->setCapability(ChromeOptions::CAPABILITY, $options);

$web_driver = RemoteWebDriver::create("http://localhost:9515", $desiredCapabilities);
try{
  $web_driver->get($_GET["q"]);
  echo $web_driver->getPageSource();
}
catch(Exception $e){
  echo 'Error: ' .$e->getMessage();
}
$web_driver->quit();
?>