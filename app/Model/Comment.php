<?php 

class Comment extends AppModel {
	public $belongsTo = 'Post'; //全てのコメントはPostに帰属している。PostIdがあれば自動で紐づく
}
?>