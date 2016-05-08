<?php 

class Post extends AppModel {
	public $hasMany = "Comment"; //Commentと紐づく
	public $validate = array (
		'title' => array (
			'rule' => 'notEmpty',
			'message' => '記入してください。' // 表示するメッセージを指定
		),
		'body' => array (
			'rule' => 'notEmpty'
		)
	);
}
?>