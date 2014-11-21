<?php

    date_default_timezone_set('Europe/Rome');

    error_reporting(E_ALL);

    //VARIABILI AMBIENTE
    $settings["nome"] = "AppName";
    $settings['baseurl'] = "";
    $settings['fisical_path'] = $_SERVER['DOCUMENT_ROOT'];
    $settings['baseurl_sito'] = "";
    $settings['domain'] = $_SERVER['HTTP_HOST'];
    $settings['cookie_domain'] = ".".$_SERVER['HTTP_HOST'];

	//Carichiamo le librerie necessarie a tutte le nostre url
	require_once $settings['fisical_path'] .'/vendor/autoload.php';
	require_once $settings['fisical_path'] .'/config/db_config.php';
	require_once $settings['fisical_path'] .'/libs/Helper.php';