<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Site</title>
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
    <div id="menu">
        <ul>
            <li><a href="/news/">Homepage</a></li>
            <li class="current_page_item"><a href="/blog/">Blog</a></li>
            <li><a href="/photos/">Photos</a></li>
            <li><a href="/info/">Information</a></li>
            <li><a href="/contact/">Contact</a></li>
        </ul>
    </div>
    <!-- end #menu -->
</div>

<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1 id="hl"><a href="/news/">News about foods</a></h1>

            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <div class="post">
                        <h2 class="title"><a href='/blog/<?php echo $newsItem['id'] ;?>'><?php echo $newsItem['title'].' # '.$newsItem['id'];?></a></h2>
                        <p class="meta">Posted by <a href="#"><?php echo $newsItem['author_name'];?></a> on <?php echo $newsItem['date'];?>
                            &nbsp;&bull;&nbsp; <a href='/blog/' class="permalink"> Back</a></p>
                    </div>
                    <div style="clear: both;">&nbsp;</div>
                    <?php foreach ($List as $Item):?>
                        <?php if ($Item['page_id'] == $newsItem['id']): ?>
                        <div class="post">
                          <p id="user"> <?php echo htmlspecialchars($Item['name']) ;?></p>
                          <p id="comment"> <?php echo htmlspecialchars($Item['text_comment']) ;?></p>
                        </div>
                        <?php endif; ?>
                    <?php endforeach;?>
                    <div style="clear: both;">&nbsp;</div>
                    <?php if ($result): ?>
                        <p id="user"> <?php echo htmlspecialchars($name) ;?></p>
                        <p id="comment"> <?php echo htmlspecialchars($text_comment);?></p>
                    <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                <form action="#" method="post">
                    <p>
                        <label>Имя:</label>
                        <input type="text" name="name" required  value="<?php echo $name; ?>"/>
                    </p>
                    <p>
                        <label>Комментарий:</label>
                        <br />
                        <textarea name="text_comment" cols="110" rows="10" required wrap="hard" value="<?php echo $text_comment; ?>"></textarea>
                    </p>
                    <p>
                        <input type="hidden" name="page_id" value="<?php echo $newsItem['id'] ;?>" />
                        <input type="submit" name="submit" value="Добавить" />
                    </p>
                </form>
                    <?php endif;?>
                </div>
                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <h2>Aliquam tempus</h2>
                            <p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
                        </li>
                        <li>
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Blogroll</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">Aliquam libero</a></li>
                                <li><a href="#">Consectetuer adipiscing elit</a></li>
                                <li><a href="#">Metus aliquam pellentesque</a></li>
                                <li><a href="#">Suspendisse iaculis mauris</a></li>
                                <li><a href="#">Urnanet non molestie semper</a></li>
                                <li><a href="#">Proin gravida orci porttitor</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Copyright (c) 2017 Alex Voldiner</p>
</div>
<!-- end #footer -->
</body>
</html>
<?php if ($result) { echo '<meta http-equiv="Refresh" content="0; URL=/blog/'."{$newsItem['id']}".'">' ;
exit(); } ?>
