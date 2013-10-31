<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>添加新闻</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/demo.css" media="screen" />
		

    </head>
    <body>

        <div id="wrap">

            <?php include "top.php"; ?>

            <div id="content">
                <div class="left">
                    <p><strong>添加新闻</strong></p>
                    <form method="POST" action="http://localhost/news/addpost/">
                        <span class="field">
                            <strong>新闻标题: </strong><br/>
                            <input type="text" size="60" name="title"/>
                        </span>

                        <span class="field">
                            <strong>新闻内容：</strong><br/>
                            <textarea rows="20" cols="70" name="content"></textarea>
                        </span>

                        <span class="field">
                            <input type="submit" value="发布新闻" style="width:300px;"/>
                        </span>

                    </form>
                    <hr class="divider"/>

                </div>

                <div class="right">
                    <?php include "admin_sidebar.php"; ?>
                </div>

                <div style="clear: both;"> </div>
            </div>

            <div id="bottom"> </div>

        </div>

    </body>
</html>