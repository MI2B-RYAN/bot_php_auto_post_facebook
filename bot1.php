<?php

	require_once "vendor/autoload.php";

	use duzun\hQuery;
	use Facebook\WebDriver\Chrome\ChromeDriver;
	use Facebook\WebDriver\Remote\DesiredCapabilities;
	use Facebook\WebDriver\Remote\RemoteWebDriver;
	use Facebook\WebDriver\WebDriverBy;
	use Facebook\WebDriver\WebDriverKeyboard;
	use Facebook\WebDriver\WebDriverKeys;
	use Facebook\WebDriver\WebDriverExpectedCondition;
	use Facebook\WebDriver\Chrome\ChromeOptions;

	$host = 'http://localhost:4444';

	$prefs['profile']['default_content_setting_values']['notifications'] =2;

	$options = new ChromeOptions();

	$options->addArguments(['--start-in-incognito']);

	$options->addArguments(['-start-maximized']);

	$options->setExperimentalOption('prefs', $prefs);

	$caps = DesiredCapabilities::chrome();

	$caps->setCapability(ChromeOptions::CAPABILITY, $options);

	$driver = RemoteWebDriver::create($host, $caps);

	$driver->get('https://m.facebook.com/');

	$email = $driver->findElement(WebDriverBy::id('m_login_email'));

	if ($email) {
		
	$email->sendKeys('ryanzein47@yahoo.com');
	
	}

	sleep(rand(3,5));

	$password = $driver->findElement(WebDriverBy::id('m_login_password'));

	if ($password) {
	  	
	  $password->sendKeys('Ojokdihackyorek!');
	}

	sleep(rand(3,5));

	$login = $driver->findElement(WebDriverBy::name('login'));

	if ($login) {
	 	
	 	$login->click();
	}

	sleep(5);

	$masuk = $driver->findElement(WebDriverBy::cssSelector('#root > div._7om2 > div > div > div._7om2._2pip > div:nth-child(2) > form > div > button'));

	if ($masuk) {
		
		$masuk->click();
	}

	sleep(rand(4,5));

	$postClick = $driver->findElement(WebDriverBy::className('_6ber'));

	if ($postClick) {
		
		$postClick->click();
	}

	sleep(rand(4,5));

	$textArea = $driver->findElement(WebDriverBy::className('mentions'));

	if ($textArea) {
		
		$textArea->click();
	}

	sleep(rand(10,20));

	$textArea2 = $driver->findElement(WebDriverBy::cssSelector('#uniqid_1'));

	if ($textArea2) {
		
		$textArea2->sendKeys('Test');
	}

	sleep(rand(5,7));

	$btnPost = $driver->findElement(WebDriverBy::cssSelector('#composer-main-view-id > div.acw > div > div > button'));

	if ($btnPost) {
		
		$btnPost->click();
	}


