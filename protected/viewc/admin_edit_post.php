<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>修改文章-<?php echo $data['posts']->title; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="http://localhost/news/global/css/demo.css" media="screen" />

        <script>
            function delPost() {
                window.location = "http://localhost/news/admin/delete/<?php echo $data['posts']->id; ?>";
            }
        </script>

    </head>
    <body>

        <div id="wrap">

            <?php include "top.php"; ?>

            <div id="content">
                <div class="left">
                    <p><strong>正在编辑</strong></p>
                    <form method="POST" action="http://localhost/news/admin/update/<?php echo $data['posts']->id; ?>">
                        <span class="field">
                            <strong>标题: </strong><br/>
                            <input type="text" value="<?php echo $data['posts']->title; ?>" size="60" name="title"/>
                        </span>


                        <span class="field">
                            <strong>新闻内容</strong><br/>
                            <textarea rows="20" cols="70" name="content"><?php echo $data['posts']->content; ?></textarea>
                        </span>
                        <em class="datePosted">发布于<?php echo $data['posts']->createtime; ?></em>
                        <span class="field">
                            <strong>&nbsp;</strong>
                            <input type="submit" value="更新新闻" style="width:240px;"/>
                            <input type="button" value="删除新闻" onclick="javascript:delPost();" style="width:240px;"/>
                        </span>

                        <input type="hidden" value="<?php echo $data['posts']->id; ?>" name="id"/>

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