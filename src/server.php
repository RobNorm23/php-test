<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$http = new Swoole\Http\Server("0.0.0.0", 9501);
$http->on(
    "request",
    function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
		
		$log = new Logger('name');
		$log->pushHandler(new StreamHandler('./the.log', Logger::WARNING));

		// add records to the log
		$log->error('Bar');
		
		
        $response->end(
            <<<EOT
                <pre>
                In this example we have built-in script "/var/www/server.php" in the Docker image overwritten with this
                one.
                </pre>
            EOT
        );
    }
);
$http->start();