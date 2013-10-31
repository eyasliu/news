<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>新闻后台管理</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/demo.css" media="screen" />


    </head>
    <body>

        <div id="wrap">

            <?php include "top.php"; ?>

            <div id="content">
                <div class="left">

                    <h1>管理新闻</h1><br/>
                    <h6>点击标题编辑文章</h6>
                    <div class="articles">
                        <table>
                            <tbody>

                                <tr class="trecord">
                                    <?php if ($data['posts'])
                                        {
                                        foreach ($data['posts'] as $v1)
                                            {
                                            echo '<ul><ui><a href="http://localhost/news/admin/edit/' . $v1['id'] . '\">' . $v1['title'] . '</a></ui></ul>';
                                        }
                                        }
                                    ?>
                                </tr>

                            </tbody></table>
                    </div>

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