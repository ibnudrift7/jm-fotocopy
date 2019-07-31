<?php
// error_reporting(E_ALL & ~E_NOTICE);
error_reporting(0);

session_start();
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

/* Global constants */
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('APP_PATH', dirname(ROOT_PATH).DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR);
define('ASSETS_PATH', ROOT_PATH.DIRECTORY_SEPARATOR);

// Register Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Register Swiftmailer
$app->register(new Silex\Provider\SwiftmailerServiceProvider());

// Register URL Generator
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Register Validator
$app->register(new Silex\Provider\ValidatorServiceProvider());

include 'setting.php';

$datas_productz = array();

$app['productData'] = $datas_productz;
$app["twig"]->addGlobal("productData", $datas_productz);

$app['set_random'] = $set_random;
$app["twig"]->addGlobal("set_random", $set_random);

$hero_image = false;
$app["twig"]->addGlobal("hero_image", $hero_image);

// ------------------ Homepage ------------------------
$app->get('/', function () use ($app) {
	return $app['twig']->render('page/home.twig', array(
        'layout' => 'layouts/column1.twig',
    ));
})
->bind('homepage');

// ------------------ about ------------------
$app->get('/about', function () use ($app) {
    $hero_image = true;
    $app["twig"]->addGlobal("hero_image", $hero_image);

    return $app['twig']->render('page/about.twig', array(
        'layout' => 'layouts/inside.twig',
    ));
})
->bind('about');


$dir_custom_kitchen=  __DIR__."/images/custom-kitchen2/";
$custom_kitchen2 =array();
$mydir_gl = opendir($dir_custom_kitchen);
while($fn4 = readdir($mydir_gl)){
    if (substr($fn4,-3) == 'jpg' || substr($fn4,-4) == 'jpeg' || substr($fn4,-3) == 'gif' || substr($fn4,-3) == 'png'){
            // $galleryDimage .=  $fn4."\n";
        $replc = str_replace('-', ' ', $fn4);
        $replc2 = str_replace(',', ', ', $replc);
        $titles = ucwords(substr($replc2, 0, -5));
        $custom_kitchen2[] = array(
            'title'=>$titles,
            'image'=>$fn4,
            );
    }
}
closedir($mydir_gl);
$custom_kitchen2 = array_filter($custom_kitchen2);

$m_products = array(
        1 => array(
            'name'=> strtoupper('Modern Furniture'),
            // 'desc'=>'<p>Come and see our hand selected items at Gianni Furniture&rsquo;s showroom, our bespoke collections ranges from sofa, chairs, dining tables, cupboards, etc.</p>',
            'desc'=>'',
            'folder' => 'modern-furniture',
            'thumb'=>'prd-ts1.jpg',
            'images'=>array( 
                '02.jpg', '03.jpg', '10.jpg', '18.jpg', 'fcs-5.jpg', 'DSC-1028.jpg', 
                ),
            ),
        array(
            'name'=> strtoupper('Classic Furniture'),
            // 'desc'=>'<p>Gianni Furniture provide custom  furniture making for kitchens, cabinets, walk-in-closets, wardrobe cupboards.</p>',
            'desc'=>'',
            'folder' => 'classic-furniture',
            'thumb'=>'prd-ts2.jpg',
            'images'=>array(
                '19.jpg',
                'classic-furniture-2.jpg',
                '12.jpg',
                'DSC-1021.jpg',
                'DSC-1025.jpg',
                ),
            ),
        // array(
        //     'name'=> strtoupper('Custom Kitchen Set & Cabinetry'),
        //     // 'desc'=>'<p>Gianni Furniture provide custom  furniture making for kitchens, cabinets, walk-in-closets, wardrobe cupboards.</p>',
        //     'desc'=>'',
        //     'folder' => 'custom-kitchen2',
        //     'thumb'=>'prd-ts3.jpg',
        //     'images'=>$custom_kitchen2,
        //     ),
    );

$m_products = array_chunk($m_products, 2);

$app['DataProducts'] = $m_products;
$app["twig"]->addGlobal("DataProducts", $m_products);

$m_portfolio = array(
        1 => array(
            'name'=> strtoupper('Citraland, Residential'),
            'folder' => 'Citraland-Residential',
            'thumb'=>'Citraland-Residential.jpg',
            'images'=>array(
                '05-.jpg', '11-.jpg', 'c-.jpg', 'd.jpg', 'f-.jpg', 'j-.jpg', '05-.jpg', 'k.jpg', 'l.jpg', 'm2.jpg'
                ),
            ),
        array(
            'name'=> strtoupper('Hotel Lobby & Ballroom, Commercial'),
            'folder' => 'Hotel-Lobby-Ballroom-Commercial',
            'thumb'=>'Hotel-lobby-ballroom.jpg',
            'images'=>array(
                'g-.jpg', 'h-.jpg', 'i-.jpg'
                ),
            ),
        array(
            'name'=> strtoupper('Kediri, Residential'),
            'folder' => 'Kediri-Residential',
            'thumb'=>'Kediri-Residential.jpg',
            'images'=>array(
                'b-.jpg', 'e-.jpg'
                ),
            ),
        array(
            'name'=> strtoupper('Office & Meeting Room, Commercial'),
            'folder' => 'Office-Meeting-Room-Commercial',
            'thumb'=>'Office-Meeting-Room.jpg',
            'images'=>array(
                'alt-(2)-.jpg', 'attch-.jpg', 'Design-IDEA2.jpg', 'Meeting2-.jpg'
                ),
            ),
        array(
            'name'=> strtoupper('Pakuwon, Residential'),
            'folder' => 'Pakuwon-Residential',
            'thumb'=>'Pakuwon-Residential.jpg',
            'images'=>array(
                'a-.jpg'
                ),
            ),
        array(
            'name'=> strtoupper('Puri Galaxy Residential'),
            'folder' => 'Puri-Galaxy-Residential',
            'thumb'=>'Puri-Galaxy-Residential.jpg',
            'images'=>array(
                'design-kamar-sheryl-3a.jpg',
                'living.jpg',
                'master-bedroom-1.jpg',
                'master-bedroom-2.jpg',
                'master-bedroom-3.jpg',
                'master-bedroom-4.jpg'
                ),
            ),

    );

$m_portfolio = array_chunk($m_portfolio, 2);

$app['DataPortfolio'] = $m_portfolio;
$app["twig"]->addGlobal("DataPortfolio", $m_portfolio);

$view_js_light = false;
$app["twig"]->addGlobal("view_js_light", $view_js_light);

$carousel_hide = false;
$app["twig"]->addGlobal("carousel_hide", $carousel_hide);

// ------------------ product ------------------
$app->get('/product', function () use ($app) {
    $hero_image = true;
    $app["twig"]->addGlobal("hero_image", $hero_image);

    $view_js_light = true;
    $app["twig"]->addGlobal("view_js_light", $view_js_light);

    $carousel_hide = true;
    $app["twig"]->addGlobal("carousel_hide", $carousel_hide);
    // print_r($app['DataProducts']);  exit;

    return $app['twig']->render('page/product.twig', array(
        'layout' => 'layouts/inside.twig',
    ));
})
->bind('product');

// ------------------ service ------------------
$app->get('/service', function () use ($app) {
    $hero_image = true;
    $app["twig"]->addGlobal("hero_image", $hero_image);

    return $app['twig']->render('page/service.twig', array(
        'layout' => 'layouts/inside.twig',
    ));
})
->bind('service');

// ------------------ portfolio ------------------
$app->get('/portfolio', function () use ($app) {
    $hero_image = false;
    $app["twig"]->addGlobal("hero_image", $hero_image);
    
    $view_js_light = true;
    $app["twig"]->addGlobal("view_js_light", $view_js_light);

    return $app['twig']->render('page/portfolio.twig', array(
        'layout' => 'layouts/inside.twig',
    ));
})
->bind('portfolio');

// ------------------ Contact Us ------------------
$app->match('/contact-us', function (Request $request) use ($app) {
    
    $hero_image = false;
    $app["twig"]->addGlobal("hero_image", $hero_image);

    $data = $request->get('Contact');
    if ($data == null) {
        $data = array(
            'name'=>'',
            'email'=>'',
            'phone'=>'',
            'company'=>'',
            'address'=>'',
            'country'=>'',
            'message'=>'',
        );
    }

    if ($_POST) {

         if (!isset($_POST['g-recaptcha-response'])) {
            return $app->redirect($app['url_generator']->generate('contactus').'?msg=error_message');
        }
        $secret_key = "6Le95xsTAAAAAEVUrCFOa5YR4kJ4PFJEi25eu7oI";
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret_key."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
        
        $response = json_decode($response);
        if($response->success==false)
        {
          return $app->redirect($app['url_generator']->generate('contactus').'?msg=error_message');
        }else{

        $constraint = new Assert\Collection( array(
            'name' => new Assert\NotBlank(),
            'email' => array(new Assert\Email(), new Assert\NotBlank()),
            'phone' => new Assert\Length(array('max'=>2000)),
            'company' => new Assert\Length(array('max'=>2000)),
            'address' => new Assert\Length(array('max'=>2000)),
            'country' => new Assert\Length(array('max'=>2000)),
            'message' => new Assert\Length(array('max'=>2000)),
        ) );

        $errors = $app['validator']->validateValue($data, $constraint);

        $errorMessage = array();
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                $errorMessage[] = $error->getPropertyPath().' '.$error->getMessage();
            }
        } else {
            $app['swiftmailer.options'] = array(
                'host' => 'mail.giannifurniture.com',
                'port' => '25',
                'username' => 'no-reply@giannifurniture.com',
                'password' => '1q2w3e4r5t6y',
                'encryption' => null,
                'auth_mode' => login
            );

            $pesan = \Swift_Message::newInstance()
                ->setSubject('Hi, Contact Website Gianni Furniture')
                ->setFrom(array('no-reply@giannifurniture.com'))
                ->setTo( array('info@giannifurniture.com', $data['email']) )
                ->setBcc( array('deoryzpandu@gmail.com', 'ibnu@markdesign.net') )
                ->setReplyTo(array('info@giannifurniture.com '))
                ->setBody($app['twig']->render('page/mail.twig', array(
                    'data' => $data,
                )), 'text/html');

            $app['mailer']->send($pesan);
            return $app->redirect($app['url_generator']->generate('contactus').'?msg=success');
            }
        }
        // else captcha
    }

    return $app['twig']->render('page/contactus.twig', array(
        'layout' => 'layouts/inside.twig',
        'error' => $errorMessage,
        'data' => $data,
        'msg' =>$_GET['msg'],
    ));
})
->bind('contactus');

$app['debug'] = true;

$app->run();