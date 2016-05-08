<?php 

class Post extends AppModel {
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