<?php

class Router
{

	private $routes;   //массив, в котором хранятся маршруты

	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);       //получаем массив маршрутов из файла routes.php
	}

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
		return trim($_SERVER['REQUEST_URI'], '/');  //получаем строку запроса
		}
	}

	public function run()     //принимает управление от FrontController
	{
		$uri = $this->getURI();
		if ($uri == '') {
		   $uri = 'news';
        }

		foreach ($this->routes as $uriPattern => $path) {   //проверяем наличие такого запроса в routes.php

			if(preg_match("~$uriPattern~", $uri)) {

				// Получаем внутренний путь из внешнего согласно правилу.

				$internalRoute = preg_replace("~$uriPattern~", $path, $uri); //ищем в строке $uri строку $uriPattern и заменяем её на $path


				$segments = explode('/', $internalRoute);  //разделяем строку по обе стороны знака /, и получаем контроллер и action


				$controllerName = array_shift($segments).'Controller'; //извлекает и удаляет первый элемент в массиве и добавляем слово Controller
				$controllerName = ucfirst($controllerName);  //делаем первую букву стороки Заглавной

				$actionName = 'action'.ucfirst(array_shift($segments)); //добавляем в начало слово action

				$parameters = $segments;

				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';  //подключаем файл контроллера
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}

				$controllerObject = new $controllerName;                          //создаем объект нужного класса

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);   //обращаемся к контроллеру, его action и передаем ему параметры
				
				if ($result != null) {
					break;             //обрываем цикл поиска совпадений
				}
			}

		}
	}
}