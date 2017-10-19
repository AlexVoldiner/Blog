<?php

class InfoController
{
    public function actionAbout()
    {
        require_once(ROOT . '/views/info/about.php');

        return true;
    }
}