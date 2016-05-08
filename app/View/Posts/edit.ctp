<h2>Edit Post</h2>

<?php
echo $this->form->create('Post', array('action' => 'edit'));
echo $this->form->input('title');
echo $this->form->input('body', array('rows' =>3));
echo $this->form->end('Save!');