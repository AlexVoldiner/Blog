<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Site</title>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href="/template/css/style1.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="/news/">Homepage</a></li>
				<li><a href="/blog/">Blog</a></li>
				<li class="current_page_item"><a href="/photos/">Photos</a></li>
                <li><a href="/info/">Information</a></li>
				<li><a href="/contact/">Contact</a></li>
			</ul>
		</div>
		<!-- end #menu -->
	</div>
</div>
<?php foreach ($photosId as $newsItem):?>
    <input type="checkbox" id="<?php echo $newsItem['preview'];?>"/>
        <label for="<?php echo $newsItem['preview'];?>" class="lightbox"><img src="/template/images/<?php echo $newsItem['preview'];?>"/></label>
<?php endforeach;?>
<div class="grid">
    <?php foreach ($photosId as $newsItem):?>
        <label for="<?php echo $newsItem['preview'];?>" class="grid-item"><img src="/template/images/<?php echo $newsItem['preview'];?>"/></label>
    <?php endforeach;?>
    <div id="footer">
        <p>Copyright (c) 2017 Alex Voldiner</p>
    </div>
</div>
</body>
</html>
