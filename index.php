<?php

require __DIR__ . '/vendor/autoload.php';

use App\Observer\Publisher;
use App\Observer\Service;

$notify = new Publisher();

$mail = new Service('MailObserver', 30);
$clock = new Service('ClockObserver', 60);
$desktop = new Service('DesktopObserver', 50);
$icons = new Service('IconsObserver', 20);

$notify->register($mail);
$notify->register($clock);
$notify->register($desktop);
$notify->register($icons);

$notify->setEvent('do something ...');

$notify->unregister($mail);

$notify->setEvent('something else ...');