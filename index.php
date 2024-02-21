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

use App\FactoryMethod\Transport\TransportRoadFactory;
use App\FactoryMethod\Transport\TransportSeaFactory;
use App\FactoryMethod\Transport\Ship;
use App\FactoryMethod\Transport\Truck;

$road = new TransportRoadFactory;
$sea = new TransportSeaFactory;

$truck1 = $road->planDelivery('Tehran');

$truck2 = $road->planDelivery('Ardebil');

$truck3 = $road->planDelivery('Isfahan');

$truck4 = $road->planDelivery('Tabriz');

$ship1 = $sea->planDelivery('America');

$ship2 = $sea->planDelivery('China');

/**
 * Job Example
 */

use App\FactoryMethod\Job\TechnicalJobFactory;
use App\FactoryMethod\Job\ArtJobFactory;
use App\FactoryMethod\Job\ProductJobFactory;

$technical = new TechnicalJobFactory();
$art = new ArtJobFactory();
$product = new ProductJobFactory();

$colleague1 = $technical->createJobIns('backend');

$colleague2 = $technical->createJobIns('frontend');

$colleague3 = $product->createJobIns('designer');

$colleague4 = $art->createJobIns('designer');

$colleague5 = $technical->createJobIns('frontend');

$colleague6 = $product->createJobIns('designer');

/**
 * Abstract Factory Design Pattern
 */

/**
 * Transport Example
 */

use App\AbstractFactory\Transport\TransportFactory;

$transport = new TransportFactory;

$truck1 = $transport->createRoadTransport();

$truck2 = $transport->createRoadTransport();

$truck3 = $transport->createRoadTransport();

$truck4 = $transport->createRoadTransport();

$ship1 = $transport->createSeaTransport();

$ship2 = $transport->createSeaTransport();

/**
 * Job Example
 */

use App\AbstractFactory\Job\JobFactory;

$jobFactory = new JobFactory();

$colleague1 = $jobFactory->createTechnicalJobIns('bd');

$colleague2 = $jobFactory->createTechnicalJobIns('fd');

$colleague3 = $jobFactory->createArtJobIns('gd');

$colleague4 = $jobFactory->createProductJobIns('pd');

$colleague5 = $jobFactory->createTechnicalJobIns('fd');

$colleague6 = $jobFactory->createProductJobIns('pd');

/**
 * Singleton Design Pattern
 */

/**
 * DB Example
 */

//use App\Singleton\DB\Connection;
//use App\Singleton\Singleton;
//
//$ins = Connection::getInstance();
//var_dump($ins->getConnection());
//
//$ins1 = Connection::getInstance();
//var_dump($ins1->getConnection());
//
//$ins2 = Connection::getInstance();
//var_dump($ins2->getConnection());
//
//$ins3 = Connection::getInstance();
//var_dump($ins3->getConnection());

//$instance = Singleton::getInstance();


/**
 * Command Design Pattern
 */

/**
 * TV Example
 */

//use App\Command\TV\RemoteControlSender;
//use App\Command\TV\TurnOnCommand;
//use App\Command\TV\TurnOffCommand;
//use App\Command\TV\VolumeUpCommand;
//use App\Command\TV\VolumeDownCommand;
//use App\Command\TV\TVReceiver;
//
//$remoteControl = new RemoteControlSender();
//$remoteControl->setCommands([
//    new TurnOnCommand(new TVReceiver),
//    new TurnOffCommand(new TVReceiver),
//    new VolumeUpCommand(new TVReceiver),
//    new VolumeDownCommand(new TVReceiver),
//]);
//
//$remoteControl->run();

/**
 * Adapter Design Pattern
 */

/**
 * Printer Example
 */
//use App\Adapter\Printer\LegacyPrinter;
//use App\Adapter\Printer\PrintAdapter;
//$printAdapter = new PrintAdapter(new LegacyPrinter);
//echo $printAdapter->printDocument();

/**
 * Facade Design Pattern
 */

/**
 * Auth Facade Example
 */

use App\Facade\Auth\AuthFacade;

$data = [
    'name' => 'babak shokouhi pour',
    'email' => 'babak@gmail.com',
    'password' => '123456'
];

$authFacade = new AuthFacade();
$authFacade->signUp($data);
$authFacade->login($data['email'], $data['password']);