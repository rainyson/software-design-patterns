<?php

require __DIR__ . '/vendor/autoload.php';


/**
 * Strategy Design Pattern
 */
//use App\Strategy\Traveler;
//use App\Strategy\Car;
//use App\Strategy\Bus;
//use App\Strategy\Airplane;
//
//$traveler = new Traveler();
//echo $traveler->goTrip(new Airplane);

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

/**
 * Factory Method Design Pattern
 */

/**
 * Transport Example
 */
use App\FactoryMethod\Transport\RoadLogistic;
use App\FactoryMethod\Transport\SeaLogistic;
use App\FactoryMethod\Transport\Ship;
use App\FactoryMethod\Transport\Truck;

$road = new RoadLogistic;
$sea = new SeaLogistic;

$truck1 = $road->planDelivery('Tehran');

$truck2 = $road->planDelivery('Ardebil');

$truck3 = $road->planDelivery('Isfahan');

$truck4 = $road->planDelivery('Tabriz');

$ship1 = $sea->planDelivery('America');

$ship2 = $sea->planDelivery('China');

/**
 * Job Example
 */
use App\FactoryMethod\Job\TechnicalJob;
use App\FactoryMethod\Job\ArtJob;
use App\FactoryMethod\Job\ProductJob;

$technical = new TechnicalJob();
$art = new ArtJob();
$product = new ProductJob();

$colleague1 = $technical->createJobIns('backend');

$colleague2 =$technical->createJobIns('frontend');

$colleague3 =  $product->createJobIns('designer');

$colleague4 = $art->createJobIns('designer');

$colleague5 = $technical->createJobIns('frontend');

$colleague6 = $product->createJobIns('designer');

