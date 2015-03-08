<?php
	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/cd.php";

	session_start();
	if (empty($_SESSION['cd_list'])){
		$_SESSION['cd_list'] = array();
	}

	$app = new Silex\Application();
	$app['debug'] = true;

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' =>__DIR__.'/../views'));

	$app->get('/', function() use ($app) {

	 	return $app['twig']->render('cds.twig', array('cds'=>CD::getAll()));
	});

 	$app->post('/cds', function() use ($app) {
 		$cd = new CD($_POST['title'], $_POST['artist'], $_POST['image'], $_POST['price']);
 		$cd->save();
 		return $app['twig']->render('new_cd.twig', array('new_cd'=> $cd));
 	});

 	$app->post('/delete', function() use ($app){
 		CD::deleteAll();
 	return $app['twig']->render('delete.twig');

 	});

	return $app;
?>