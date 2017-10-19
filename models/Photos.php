<?php
class Photos
{

    public static function getPhotosId()
    {
        $db = Db::getConnection();
        $photosId = array();

        $result = $db->query('SELECT preview FROM photos ORDER BY id');

        $i = 0;
        while ($row = $result->fetch()) {    //помещаем данные в массив

            $photosId[$i]['preview'] = $row['preview'];
            $i++;
        }

        return $photosId;

    }
}