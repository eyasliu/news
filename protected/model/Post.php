<?php 
Doo::loadCore('db/DooModel');

class Post extends DooModel{
    public $id;
    public $title;
    public $author;
    public $time;
    public $content;
    public $topicid;
    public $_table = 'post';
    public $_primarykey = 'id';
    public $_fields = array('id','title','author','time','content','topicid');
}
?>