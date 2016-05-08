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
	public function add() {
		if ($this->request->is('post')) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Success!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('failed');
			}
		}
	}
	public function edit($id = null) {
		$this->Post->id = $id;
		if ($this->request->is('get')) {
			$this->request->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash('success!');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setSFlash('failed');
			}
		}
	}
}
?>