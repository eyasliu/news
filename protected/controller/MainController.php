<?php

/**
 * 这是新闻发布系统的控制器
 * 所有的控制都在这里
 */
class MainController extends DooController
    {
	

    public function index()     //新闻主页
        {
        Doo::loadModel('Post');
        $p = new Post();
        $data['arr'] = $p->find(array('asArray' => true));
        $this->renderc('index', $data);
        }

    public function admin()     //后台管理主页
        {
        Doo::loadModel('Post');
        $p = new Post();
        $data['posts'] = $p->find(array('asArray' => true));
        $this->renderc('admin', $data);
        }

    public function add()       //跳转至添加新闻页面
        {
        $this->renderc('admin_new_news');
        }

    public function add_post()      //添加新闻
        {
        $title = $_POST['title'];
        $content = $_POST['content'];
		date_default_timezone_set("Asia/Shanghai");
		$time = date('Y-m-d h:i:s');

        Doo::loadModel('Post');
		Doo::autoload('DooDbExpression');
        $p = new Post;
        $p->title = $title;
        $p->createtime = $time;
        $p->content = $content;
        $result = $this->db()->insert($p);
        echo "successfully!";
        echo '<meta http-equiv="refresh" content="1;url=/news/index"> ';
        exit;
        }

    public function news_id()       //根据url提供的id转至相应新闻详细页面
        {

        $id = $this->params['id'];

        Doo::loadModel('Post');
        $p = new Post();
        $p->id = $id;
        $data['posts'] = $p->getOne();
        $this->renderc('single', $data);
        }

    public function edit()      //编辑新闻页面
        {
        $id = $this->params['id'];
        Doo::loadModel('Post');
        $p = new Post();
        $p->id = $id;
        $data['posts'] = $p->getOne();
        $this->renderc('admin_edit_post', $data);
        }

    public function update_post()       //提交编辑内容
        {
        $id = $this->params['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        Doo::loadModel('Post');
        $p = new Post();
        $p->id = $id;
        $options['limit'] = 1;
        $p = $this->db()->find($p, $options);
        $p->title = $title;
        $p->content = $content;
        $this->db()->update($p);
        echo "update successfully!";
        echo '<meta http-equiv="refresh" content="1;url=/news/admin"> ';
        }

    public function delete_post()       //删除新闻
        {
        $id = $this->params['id'];
        Doo::loadModel('Post');
        $p = new Post();
        $p->id = $id;
        $this->db()->delete($p);
        echo "delete successfully!";
        echo '<meta http-equiv="refresh" content="1;url=/news/admin"> ';
        }

    }

?>