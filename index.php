<?php

require __DIR__ . '/vendor/autoload.php';

use SpinDash\Application;

final class Spinkit extends Application
{
	public function setupRoutes() {
		$this->get('/', [$this, 'homePage']);
	}

	public function setupDynamicRoutes($request) {

	}

	public function homePage($request, $response) {
		$response->setBody('Hello, world!');
	}
}

$app = new Spinkit("config.php");
$app->run();
