<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory extends Nette\Object
{

    public $onCreate = array ();
    public $onDone = array ();

	/**
	 * @return Nette\Application\IRouter
	 */
	public function createRouter()
	{
		$router = new RouteList;

		$this->onCreate($router);

		$router[] = new Route('[home]', 'Homepage:default');

		$this->onDone($router);

		//$router[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
		return $router;
	}

}
