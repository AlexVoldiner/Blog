<?php

class Blog
{

    public static function add($name, $text_comment, $page_id)
    {
         // Соединение с БД
        $db = Db::getConnection();

         // запрос к БД
        $sql = 'INSERT INTO comments (name, text_comment, page_id) '
             . 'VALUES (:name, :text_comment, :page_id)';

          // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':text_comment', $text_comment, PDO::PARAM_STR);
        $result->bindParam(':page_id', $page_id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkComment($text_comment)
    {
        if (strlen($text_comment) >= 6) {
            return true;
        }
        return false;
    }


    public static function getCommentList()
    {

        $db = Db::getConnection();
        $List = array();

        $result = $db->query('SELECT name, text_comment, page_id FROM comments');

        $i = 0;
        while ($row = $result->fetch()) {
            $List[$i]['name'] = $row['name'];
            $List[$i]['text_comment'] = $row['text_comment'];
            $List[$i]['page_id'] = $row['page_id'];
            $i++;
        }

        return $List;

    }
}