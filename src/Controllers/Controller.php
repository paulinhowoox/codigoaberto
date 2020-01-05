<?php 

namespace Source\Controllers;

use CoffeeCode\Router\Router;
use CoffeeCode\Optimizer\Optimizer;
use League\Plates\Engine;

abstract class Controller
{
	/**
	 * [$view description]
	 * @var Engine
	 */
	protected $view;

	/**
	 * [$router description]
	 * @var Router
	 */
	protected $router;

	/**
	 * [$seo description]
	 * @var Optmizer
	 */
	protected $seo;


	/**
	 * Constructor class Controller
	 * @param [type] $router [description]
	 */
	public function __construct($router)
	{
		$this->route = $router;
		$this->view = Engine::create(dirname(__DIR__, 2) . "/views", "php");
		$this->view->addData(["router" => $this->router]);

		$this->seo = new Optimizer();
		$this->seo->openGraph(site("name"), site("locale"), "article")
			 ->publisher(SOCIAL["facebook_page"], SOCIAL["facebook_author"])
			 ->twitterCard(SOCIAL["twitter_creator"], SOCIAL["twitter_site"], site("domain"))
			 ->facebook(SOCIAL["facebook_appId"]);
	}

	/**
	 * Return Ajax Response
	 * @param  string $param  [description]
	 * @param  array  $values [description]
	 * @return [type]         [description]
	 */
	public function ajaxResponse(string $param, array $values): string
	{
		return json_encode([$param => $values]);
	}
}