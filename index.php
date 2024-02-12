<?php

require __DIR__ . '/vendor/autoload.php';


/**
 * Strategy Design Pattern
 */
use App\Strategy\Traveler;
use App\Strategy\Car;
use App\Strategy\Bus;
use App\Strategy\Airplane;

$traveler = new Traveler();
echo $traveler->goTrip(new Airplane);

/**
 * Observer Design Pattern
 */
//use App\Observer\Publisher;
//use App\Observer\Service;
//
//$notify = new Publisher();
//
//$mail = new Service('MailObserver', 30);
//$clock = new Service('ClockObserver', 60);
//$desktop = new Service('DesktopObserver', 50);
//$icons = new Service('IconsObserver', 20);
//
//$notify->register($mail);
//$notify->register($clock);
//$notify->register($desktop);
//$notify->register($icons);
//
//$notify->setEvent('do something ...');
//
//$notify->unregister($mail);
//
//$notify->setEvent('something else ...');

/**
 * Decorator Design Pattern
 *
 * Tree Example
 */
//use App\Decorator\Tree\ChristmasTree;
//use App\Decorator\Tree\TreeLights;
//use App\Decorator\Tree\TreeCandyCanes;
//use App\Decorator\Tree\TreeGarland;
//
//$tree = new ChristmasTree();
//$tree = new TreeCandyCanes($tree);
//$tree = new TreeGarland($tree);
//$tree = new TreeLights($tree);
//echo $tree->leafing();


