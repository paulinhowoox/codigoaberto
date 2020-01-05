<?php

/**
 * Return site params
 * @param  string|null $param [description]
 * @return [type]             [description]
 */
function site(string $param = null): string
{
	if($param && !empty(SITE[$param])) {
		return SITE[$param];
	}

	return SITE["root"];
}

/**
 * Function to list path of the site assets
 * @param  string $path [description]
 * @return [type]       [description]
 */
function asset(string $path): string
{
	return SITE["root"] . "/views/assets/{$path}";
}

/**
 * Route image default
 * @param  string $imageUrl [description]
 * @return [type]           [description]
 */
function routeImage(string $imageUrl): string
{
	return "https://via.placeholder.com/1200x628/0984e3/FFFFFF?text={$imageUrl}";
}

/**
 * Flash Message
 * @param  string|null $type    [description]
 * @param  string|null $message [description]
 * @return [type]               [description]
 */
function flash(string $type = null, string $message = null): ?string
{
	if ($type && $message) {
		$_SESSION["flash"] = [
			"type" => $type,
			"message" => $message
		];
		return null;
	}

	if (!empty($_SESSION["flash"]) && $flash = $_SESSION["flash"]) {
		unset($_SESSION["flash"]);
		return "<div class=\"message {$flash["type"]}\">{$flash["message"]}</div>";
	}

	return null;
}