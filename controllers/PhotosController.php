<?php

include_once ROOT. '/models/Photos.php';

class PhotosController
{
		public function actionCarousel()
		{
            $photosId = array();
            $photosId = Photos::getPhotosId();

            require_once(ROOT . '/views/photos/carousel.php');

			return true;
		}

}