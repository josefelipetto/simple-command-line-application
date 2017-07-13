#! /usr/bin/env php

<?php

use App\SayHelloCommand;
use Symfony\Component\Console\Application;


require 'vendor/autoload.php';

$app = new Application('Command line app demo', '1.0');

$app->add(new SayHelloCommand);

$app->run();

