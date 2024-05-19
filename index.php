<?php

require __DIR__ . '/vendor/autoload.php';


/**
 * Strategy Design Pattern
 */

/**
 * DirectionService Example
 */
//use App\Strategy\Traveler;
//use App\Strategy\Car;
//use App\Strategy\Bus;
//use App\Strategy\Airplane;
//
//$traveler = new Traveler();
//echo $traveler->goTrip(new Airplane);

/**
 * Strategy Pattern
 */

/**
 * Image Example
 */

//use App\Strategy\Image\ImageStorage;
//use App\Strategy\Image\JpegCompressor;
//use App\Strategy\Image\PngCompressor;
//use App\Strategy\Image\BWFilter;
//use App\Strategy\Image\HighContrastFilter;

//$imageStorage = new ImageStorage;
//$imageStorage->store('a', new JpegCompressor(), new BWFilter());
//$imageStorage->store('a', new PngCompressor(), new HighContrastFilter());

/**
 * Encryption Example
 */

//use App\Strategy\Encryption\{
//    ChatClient,
//    AESEncryptionAlgorithm,
//};
//$message = "Hello World this is Babak";
//$chatClient = new ChatClient(new AESEncryptionAlgorithm());
//$chatClient->send($message);

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
 * Data Source Example
 */
//use App\Observer\DataSource\{
//    Spreadsheet,
//    Chart,
//    DataSource,
//};
//$dataSource = new DataSource();
//$spreadsheet1 = new Spreadsheet($dataSource);
//$spreadsheet2 = new Spreadsheet($dataSource);
//$chart = new Chart($dataSource);
//$dataSource->addObserver($spreadsheet1);
//$dataSource->addObserver($spreadsheet2);
//$dataSource->addObserver($chart);
//
//$dataSource->setValue(1);

/**
 * Stock Example
 */

//use App\Observer\Stock\{
//    StatusBar,
//    StockPrice,
//    StockList,
//};
//
//$stockPrice = new StockPrice();
//$stockList = new StockList($stockPrice);
//$statusBar = new StatusBar($stockPrice);
//
//$stockPrice->addObserver($stockList);
//$stockPrice->addObserver($statusBar);
//$stockPrice->setPrice(1000);

/**
 * Decorator Design Pattern
 */

/**
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

//use App\AbstractFactory\Job\JobFactory;
//use App\AbstractFactory\Transport\TransportFactory;
//use App\Bridge\Shape\BlueColor;
//use App\Bridge\Shape\CircleShape;
//use App\Bridge\Shape\RedColor;
//use App\FactoryMethod\Job\ArtJobFactory;
//use App\FactoryMethod\Job\ProductJobFactory;
//use App\FactoryMethod\Job\TechnicalJobFactory;
//use App\FactoryMethod\Transport\TransportRoadFactory;
//use App\FactoryMethod\Transport\TransportSeaFactory;
//
//$road = new TransportRoadFactory;
//$sea = new TransportSeaFactory;
//
//$truck1 = $road->planDelivery('Tehran');
//
//$truck2 = $road->planDelivery('Ardebil');
//
//$truck3 = $road->planDelivery('Isfahan');
//
//$truck4 = $road->planDelivery('Tabriz');
//
//$ship1 = $sea->planDelivery('America');
//
//$ship2 = $sea->planDelivery('China');

/**
 * Job Example
 */

//$technical = new TechnicalJobFactory();
//$art = new ArtJobFactory();
//$product = new ProductJobFactory();
//
//$colleague1 = $technical->createJobIns('backend');
//
//$colleague2 = $technical->createJobIns('frontend');
//
//$colleague3 = $product->createJobIns('designer');
//
//$colleague4 = $art->createJobIns('designer');
//
//$colleague5 = $technical->createJobIns('frontend');
//
//$colleague6 = $product->createJobIns('designer');

/**
 * Abstract Factory Design Pattern
 */

/**
 * Transport Example
 */

//$transport = new TransportFactory;
//
//$truck1 = $transport->createRoadTransport();
//
//$truck2 = $transport->createRoadTransport();
//
//$truck3 = $transport->createRoadTransport();
//
//$truck4 = $transport->createRoadTransport();
//
//$ship1 = $transport->createSeaTransport();
//
//$ship2 = $transport->createSeaTransport();

/**
 * Job Example
 */

//$jobFactory = new JobFactory();
//
//$colleague1 = $jobFactory->createTechnicalJobIns('bd');
//
//$colleague2 = $jobFactory->createTechnicalJobIns('fd');
//
//$colleague3 = $jobFactory->createArtJobIns('gd');
//
//$colleague4 = $jobFactory->createProductJobIns('pd');
//
//$colleague5 = $jobFactory->createTechnicalJobIns('fd');
//
//$colleague6 = $jobFactory->createProductJobIns('pd');

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
 * ICommand Design Pattern
 */

/**
 * TV Example
 */

//use App\ICommand\TV\RemoteControlSender;
//use App\ICommand\TV\TurnOnCommand;
//use App\ICommand\TV\TurnOffCommand;
//use App\ICommand\TV\VolumeUpCommand;
//use App\ICommand\TV\VolumeDownCommand;
//use App\ICommand\TV\TVReceiver;
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
 * UI Framework Example
 */
//use App\Command\UIFramework\{
//    CustomerService,
//    AddCustomerCommand,
//    Button,
//};
//$customerService = new CustomerService();
//$addCommand = new AddCustomerCommand($customerService);
//$button = new Button($addCommand);
//echo $button->click();

/**
 * Composite Command
 */

//use App\Command\PhotoApp\{
//    CompositeCommand,
//    ResizePhotoCommand,
//    BlackAndWhiteCommand,
//};
//
//$compositeCommand = new CompositeCommand();
//$compositeCommand->add(new ResizePhotoCommand());
//$compositeCommand->add(new BlackAndWhiteCommand());
//$compositeCommand->execute();

/**
 * Undoable Commands
 */

//use App\Command\HtmlDocument\{
//    HtmlDocument,
//    History,
//    BoldCommand,
//    UndoCommand
//};
//
//$htmlDoc = new HtmlDocument();
//$history = new History();
//$htmlDoc->setContent('Hello World');
//
//$boldCommand = new BoldCommand($htmlDoc, $history);
//$boldCommand->execute();
//echo $htmlDoc->getContent();
//$undoCommand = new UndoCommand($history);
//$undoCommand->execute();
//echo $htmlDoc->getContent();

/**
 * Adapter Design Pattern
 */

/**
 * Printer Example - Roocket course
 */
//use App\Adapter\Printer\LegacyPrinter;
//use App\Adapter\Printer\PrintAdapter;
//$printAdapter = new PrintAdapter(new LegacyPrinter);
//echo $printAdapter->printDocument();

/**
 * Vehicle Example - Mastering In Design Patterns(udemy)
 */

//use App\Adapter\Vehicle\Maserati;
//use App\Adapter\Vehicle\Bugatti;
//use App\Adapter\Vehicle\Porsche;
//
//$maserati = new Maserati('Maserati');
//$bugatti = new Bugatti('Bugatti');
//$porsche = new Porsche('Porsche');
//echo $maserati;
//echo '<br />';
//echo $bugatti;
//echo '<br />';
//echo $porsche;
//echo '<br />';

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
 * Template Method Design Pattern
 */

/**
 * Banking Example
 */

//use App\TemplateMethod\Banking\TransferMoneyTask;
//
//$auditTrail = new TransferMoneyTask();
//$auditTrail->execute();

/**
 * Bridge Design Pattern
 *
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

//use App\Bridge\RemoteControl\RemoteControl;
//use App\Bridge\RemoteControl\AdvancedRemote;
//use App\Bridge\RemoteControl\TV;
//use App\Bridge\RemoteControl\Radio;
//
//$tv = new TV();
//$radio = new Radio();
//
//$remoteControl = new RemoteControl($tv);
//$remoteControl->volumeDown();
//$remoteControl->channelUp();
//
//$advancedRemote = new AdvancedRemote($radio);
//$advancedRemote->mute();

/**
 * Null Object Design Pattern
 */

/**
 * Request Example
 */
//use App\NullObject\Request\Client;
//
//$client = new Client();
//$request = $client->getRequest('d');
//echo $request->execute();

/**
 * Composite Design Pattern
 */

/**
 * Product Example
 */

//use App\Composite\Product\CompositeProducts;
//use App\Composite\Product\HammerProduct;
//use App\Composite\Product\HeadPhoneProduct;
//use App\Composite\Product\PhoneProduct;
//
//$hammer = new HammerProduct();
//$phone = new PhoneProduct();
//$headphone = new HeadPhoneProduct();
//
//$compositeProduct = new CompositeProducts();
//$compositeProduct->add($hammer);
//$compositeProduct->add($phone);
//$compositeProduct->add($headphone);
//$compositeProduct->remove($hammer);
//
//$results = $compositeProduct->generatePrice();
//echo $results;

/**
 * Shape Example
 */
//use App\Composite\Shape\{
//    Group,
//    Shape,
//};
//$group1 = new Group();
//$group1->add(new Shape());
//$group1->add(new Shape());
//
//$group2 = new Group();
//$group2->add(new Shape());
//$group2->add(new Shape());
//
//$group = new Group();
//$group->add($group1);
//$group->add($group2);
//$group->render();
//$group->move();

/**
 * Incident Example
 */
use App\Composite\Incident\{
    Team,
    Truck,
    HumanResource,
};
$team1 = new Team();
$team1->add(new Truck());
$team1->add(new HumanResource());
$team1->add(new HumanResource());

$team2 = new Team();
$team2->add(new Truck());
$team2->add(new HumanResource());
$team2->add(new HumanResource());

$team = new Team();
$team->add($team1);
$team->add($team2);
$team->deploy();

/**
 * Memento Design Pattern
 */

/**
 * Editor Example
 */
//use App\Memento\Editor\Editor;
//use App\Memento\Editor\EditorHistory;
//$editor = new Editor();
//$editorHistory = new EditorHistory();
//
//$editor->setContent('babak');
//$editorHistory->push($editor->createState());
//
//$editor->setContent('bashir');
//$editorHistory->push($editor->createState());
//
//$editor->setContent('bahareh');
//$editorHistory->push($editor->createState());
//
//$editor->setContent('hadi');
//$editor->restore($editorHistory->pop());
//$editor->restore($editorHistory->pop());
//$editor->restore($editorHistory->pop());
//
//echo $editor->getContent();

/**
 * Document Example
 */

//use App\Memento\Document\{
//    Document,
//    DocumentHistory,
//};
//
//$document = new Document();
//$documentHistory = new DocumentHistory();
//
//$document->setContent('this is the first content');
//$document->setFontName('Arial');
//$document->setFontSize(20);
//$documentHistory->push($document->createState());
//
//$document->setContent('this is the second contnt');
//$document->setFontName('Times New Roman');
//$document->setFontSize(25);
//$documentHistory->push($document->createState());
//
//$document->setContent('Hello World');
//$document->setFontName('B Nazanin');
//$document->setFontSize(18);
//$documentHistory->push($document->createState());
//
//$document->restore($documentHistory->pop());
//$document->restore($documentHistory->pop());
//$document->restore($documentHistory->pop());
//echo $document->getContent() .' <br />';
//echo $document->getFontName() .' <br />';
//echo $document->getFontSize() .' <br />';

/**
 * State Design Pattern
 */

/**
 * Draw Example
 */
//use App\State\Draw\Canvas;
//use App\State\Draw\SelectionTool;
//use App\State\Draw\BrushTool;
//
//$canvas = new Canvas();
//$canvas->setCurrentTool(new BrushTool());
//$canvas->getCurrentTool()->mouseDown();
//$canvas->getCurrentTool()->mouseUp();

/**
 * Direction Service Example
 */

//use App\State\DirectionService\{
//    DirectionService,
//    Driving,
//    Bicycling,
//    Transit,
//    Walking,
//};
//$directionService = new DirectionService();
//$directionService->setTravelMode(new Driving());
//echo $directionService->getDirection();
//echo $directionService->getETA();

/**
 * Iterator Pattern
 */

/**
 * Browser Example
 */

//use App\Iterator\Browser\BrowseHistory;
//
//$browseHistory = new BrowseHistory();
//$browseHistory->push("google.com");
//$browseHistory->push("bing.com");
//$browseHistory->push("yahoo.com");

// without iterator pattern
//for ($i = 0; $i < count($browseHistory->getUrls()); $i++) {
//    print_r($browseHistory->pop());
//}

//$iterator = $browseHistory->createIterator();
//
//while ($iterator->hasNext()) {
//    print($iterator->current() . '<br/>');
//    $iterator->next();
//}

/**
 * Product Example
 */

//use App\Iterator\Product\{
//    ProductIterator,
//    ProductCollection,
//    Product,
//};
//
//$productCollection = new ProductCollection();
//$product1 = new Product(1, 'test1');
//$product2 = new Product(2, 'test2');
//$product3 = new Product(3, 'test3');
//$productCollection->add($product1);
//$productCollection->add($product2);
//$productCollection->add($product3);
//$productIterator = $productCollection->createIterator();
//while($productIterator->hasNext()){
//    echo $productIterator->current();
//    $productIterator->next();
//}

/**
 * Mediator Pattern
 */

/**
 * DialogBox Example
 */
//use App\Mediator\DialogBox\{
//    ArticleDialogBox
//};
//
//$dialogBox = new ArticleDialogBox();
//$dialogBox->simulateUserInteraction();

/**
 * Chain of responsibility
 */

/**
 * Http Request
 */

//use App\ChainOfResponsibility\HttpRequest\{
//    Authenticator,
//    Logger,
//    Compressor,
//    WebServer,
//    HttpRequest,
//};
//
//$httpRequest = new HttpRequest("admin", "1234");
//$compressor = new Compressor(null);
//$logger = new Logger($compressor);
//$authenticator = new Authenticator($logger);
//$server = new WebServer($authenticator);
//$server->handle($httpRequest);

/**
 * Data Reader
 */
//use App\ChainOfResponsibility\DataReader\{
//    QBWReader,
//    NumberReader,
//    ExcelReader,
//    FileDataReader,
//    File,
//};
//
//$file = new File('text.xls');
//$qbwReader = new QBWReader();
//$numberReader = new NumberReader();
//$excelReader = new ExcelReader();
//$qbwReader->setNext($numberReader);
//$numberReader->setNext($excelReader);
//$qbwReader->doRead($file);

/**
 * Visitor Pattern
 */

/**
 * Html Document Example
 */
//use App\Visitor\{
//    HtmlDocument,
//    AnchorNode,
//    HeadingNode,
//};
//$document = new HtmlDocument();
//$document->add(new AnchorNode());
//$document->add(new HeadingNode());
//$document->highlight();