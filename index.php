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

use App\AbstractFactory\Job\JobFactory;
use App\AbstractFactory\Transport\TransportFactory;
use App\Bridge\Shape\BlueColor;
use App\Bridge\Shape\CircleShape;
use App\Bridge\Shape\RedColor;
use App\FactoryMethod\Job\ArtJobFactory;
use App\FactoryMethod\Job\ProductJobFactory;
use App\FactoryMethod\Job\TechnicalJobFactory;
use App\FactoryMethod\Transport\TransportRoadFactory;
use App\FactoryMethod\Transport\TransportSeaFactory;

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

//use App\Facade\Auth\AuthFacade;
//
//$data = [
//    'name' => 'babak shokouhi pour',
//    'email' => 'babak@gmail.com',
//    'password' => '123456'
//];
//
//$authFacade = new AuthFacade();
//$authFacade->signUp($data);
//$authFacade->login($data['email'], $data['password']);

/**
 * Proxy Design Pattern
 */

/**
 * File Example
 */
//use App\Proxy\File\ReadFile;
//use App\Proxy\File\ReadFileProxy;
//
//$test1 = new ReadFileProxy('test1.txt');
//$test2 = new ReadFileProxy('test2.txt');
//
//echo $test1->getContents();
//echo '<br/>';
//echo '<br/>';
//echo '<br/>';
//echo $test2->getContents();

/**
 * Template Method Design Pattern
 */

/**
 * Book Example
 */
//use App\TemplateMethod\PaperBook;
//use App\TemplateMethod\EBook;
//$paperBook = new PaperBook();
//$ebook = new EBook();
//$paperBook->setTitle('Quran');
//$ebook->setTitle('Test');
//echo $paperBook->print();
//echo '<br/>';
//echo $ebook->print();

/**
 * Bridge Design Pattern
 */

/**
 * Shape & Color Example
 */

//$redColor = new RedColor();
//$blueColor = new BlueColor();
//
//$circle = new CircleShape($redColor);
//print_r($circle->draw());
//
//$circle->changeColor($blueColor);
//print_r($circle->draw());

/**
 * Remote Control Example
 */

use App\Bridge\RemoteControl\RemoteControl;
use App\Bridge\RemoteControl\AdvancedRemote;
use App\Bridge\RemoteControl\TV;
use App\Bridge\RemoteControl\Radio;

$tv = new TV();
$radio = new Radio();

$remoteControl = new RemoteControl($tv);
$remoteControl->volumeDown();
$remoteControl->channelUp();

$advancedRemote = new AdvancedRemote($radio);
$advancedRemote->mute();