<?php

include_once ROOT. '/models/News.php';
include_once ROOT. '/models/Blog.php';

class BlogController
{
		public function actionList()
		{
            $newsList = array();
            $newsList = News::getNewsList();

            require_once(ROOT . '/views/blog/list.php');

            return true;
		}
        public function actionComment($id)
        {   $List = array();
            $List = Blog::getCommentList();

            if ($id) {
                $newsItem = News::getNewsItemByID($id);
            }
            // Переменные для формы
            $name = false;
            $text_comment = false;
            $page_id = false;
            $result = false;

            // Обработка формы
            if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Получаем данные из формы
                $name = $_POST['name'];
                $text_comment = $_POST['text_comment'];
                $page_id = $_POST['page_id'];

                // Флаг ошибок
                $errors = false;

                // Валидация полей
                if (!Blog::checkName($name)) {
                    $errors[] = 'Имя не должно быть короче 2-х символов';
                }
                if (!Blog::checkComment($text_comment)) {
                    $errors[] = 'Комментарий не должен быть короче 6-и символов';
                }

                if ($errors == false) {
                    // Если ошибок нет
                    // Добавляем в БД
                    $result = Blog::add($name, $text_comment, $page_id);
                }
            }

            // Подключаем вид
            require_once(ROOT . '/views/blog/comment.php');
            return true;
        }
}
