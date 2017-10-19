<?php

include_once ROOT. '/models/News.php';

class NewsController {

	public function actionIndex()  //список новостей
	{
		
		$newsList = array();
		$newsList = News::getNewsList();                //обращаемся к методу спискса новостей через (он статический)
                                                       //и получаем данные из модели (из таблицы БД)
		require_once(ROOT . '/views/news/index.php'); //файл-views, страница со списком новостей

		return true;
	}

	public function actionView($id)    //одна новость
	{
		if ($id) {
			$newsItem = News::getNewsItemByID($id); //обращаемся к методу одной новости

	        require_once(ROOT . '/views/news/view.php');


		}

		return true;

	}

}

