news
====

简易新闻发布系统

安装方法：
1、将压缩包解压出来的news文件夹复制到站点目录
2、新建一个数据库名为“news”的mySQL数据库。
3、导入news文件夹中的.sql文件。
4、使用浏览器访问站点目录的news文件夹，如：http://localhost/news/
5、如果安装不成功，请修改文件夹news/protected/config中的db.conf.php文件中第34行的数据库信息（默认主机名：localhost  数据库名：news  用户名：root   密码为空）

如进到系统，则安装成功

使用方法：
1、主页列出所有新闻标题与目录，无分页功能
2、点击标题进入新闻详细页
3、点击管理进入管理页
4、在管理页点击标题进入新闻修改页
5、在新闻修改页可以更新或者删除新闻
6、点击右边管理菜单中的添加新闻可以添加新闻
7、新发表的文章会在主页的最底部出现

备注：
1、因为说明界面不做要求，我便使用了demos中blog的模板并经过了大幅度的修改，只有模板借鉴了blog，其他任何如控制器、模型均和blog无任何关系。
2、所有控制器均在MainContrlller，因为前期代码编写无规律，并且有点懒，所以未分有其他控制器。
3、无分类功能，无登陆功能
4、做该新闻发布系统前我对php尚未入门，制作新闻发布系统用了整整三天时间
5、学习过程请参照第二篇演示文章《Doophp学习心得》

6、因11月9日我要参加软考网络管理员考试，现在尚未复习完成，我没有多余精力再花在新闻发布系统中。

7、个人网站http://www.eyas.cc
   个人简历网站：http://me.eyas.cc

