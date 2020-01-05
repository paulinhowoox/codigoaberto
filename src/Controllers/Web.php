<?php

namespace Source\Controllers;


class Web extends Controller
{
	
	public function __construct($router)
	{
		parent::__construct($router);

		if (!empty($_SESSION["user"])) {
			$this->router->redirect("app.home");
		}
	}


	public function login(): void
	{
		$head = $this->seo->optimize(
			"Crie sua conta no " . site("name"),
			site("desc"),
			$this->router->route("web.login"),
			routeImage("Login")
		)->render();

		echo $this->view->render("theme/login", [
			"head" => $head
		]);
	}
}