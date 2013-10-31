<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>新闻发布系统演示</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/demo.css" media="screen" />


    </head>
    <body>
        <div id="wrap">

            <?php include "top.php"; ?>

            <div id="content">
                <div class="left">

                    <?php
                    if ($data['arr'])
                        { // 是否有数据
                        foreach ($data['arr'] as $v)
                            {
                            // 显示每一行
                            echo '<h1><a href="http://localhost/news/news/' . $v['id'] . '">' . $v['title'] . ' </a></h1><br /> <p>' . $v['content'] . '</p>';
                            echo '<em class="datePosted">发布于 '. $v['createtime'] . '</em>';
                            }
                        } else
                        echo 'data is empty';
                    ?>
                </div>

                <div style="clear: both;"> </div>
            </div>

            <div id="bottom"> </div>
        </div>
    </body>
</html>