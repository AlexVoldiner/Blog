<?php


class News
{


	public static function getNewsItemByID($id)  //возвращает одну новость по идентификатору
	{
		$id = intval($id);

		if ($id) {

		    $db = Db::getConnection();
			$result = $db->query('SELECT * FROM news WHERE id=' . $id);

			/*$result->setFetchMode(PDO::FETCH_NUM);*/   //[0]=>'id'
			$result->setFetchMode(PDO::FETCH_ASSOC);     //оставляем элементы данного типа: [id]=>'id'

			$newsItem = $result->fetch();  //помещаем одну запись в массив

			return $newsItem;
		}

	}


	public static function getNewsList()     //возвращает список новостей
    {
		$db = Db::getConnection();  //получаем данные для подключения к БД
		$newsList = array();

		$result = $db->query('SELECT id, title, date, author_name, short_content, preview FROM news ORDER BY id ASC LIMIT 10');
        //получаем из таблицы все 10 записей, для отображения
		$i = 0;
		while($row = $result->fetch()) {    //помещаем данные в массив
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['author_name'] = $row['author_name'];
			$newsList[$i]['short_content'] = $row['short_content'];
            $newsList[$i]['preview'] = $row['preview'];
			$i++;
		}

		return $newsList;

    }

}