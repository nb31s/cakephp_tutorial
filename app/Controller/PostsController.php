<?php 

class PostsController extends AppController{
	//public $scaffold;
	public $helper = array('HTML', 'Form');
	
	public function index() {
		$this->set('posts', $this->Post->find('all')); //$this->setでPosts変数へ代入。 $this->Post->fin('all')で記事を全て持ってくる。
		$this->set('title_for_layout', '記事一覧'); //タイトルをセット
	}
	public function view($id = null) {
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
	}
}
?>