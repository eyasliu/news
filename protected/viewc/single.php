<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $data['posts']->title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/demo.css" media="screen" />


    </head>
    <body>

        <div id="wrap">

            <?php include "top.php"; ?>

            <div id="content">
                <div class="left">


                    <h2><a href="http://localhost/news/news/<?php echo $data['posts']->id; ?>"> <?php echo $data['posts']->title; ?></a></h2>
                    <div class="articles">
                        <?php echo $data['posts']->content; ?>
                        <em class="datePosted">发布于<?php echo $data['posts']->createtime; ?></em>
                    </div>
                    <hr class="divider"/>
                </div>
                <div style="clear: both;"> </div>
            </div>
            <div id="bottom"> </div>
        </div>
    </body>
</html>