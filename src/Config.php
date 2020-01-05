<?php

/**
 * SITE CONFIG
 */
define("SITE", [
	"name" => "Auth em MVC com PHP",
	"desc" => "Construindo uma app web para controle de acesso utilizando redes sociais e/ou email",
	"domain" => "localauth.com",
	"locale" => "pt_BR",
	"root" => "http://localhost:8888"
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
	require __DIR__ . "/Minify.php";
}

/**
 * DATABASE CONNECT
 */
define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "auth",
    "username" => "admin",
    "passwd" => "12345",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * SOCIAL CONFIG
 */
define ("SOCIAL", [
	"facebook_page" => "",
	"facebook_author" => "paulinhojunior",
	"facebook_appId" => "9283729732123",
	"twitter_creator" => "@paulinhowoox",
	"twitter_site" => "@paulinhowoox"
]);

/**
 * MAIL CONNECT
 */
define("MAIL", []);

/**
 * SOCIAL LOGIN FACEBOOK
 */
define("FACEBOOK_LOGIN", []);

/**
 * SOCIAL LOGIN GOOGLE
 */
define("GOOGLE_LOGIN", []);