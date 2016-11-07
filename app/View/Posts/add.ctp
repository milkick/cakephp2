<h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title', array('label' => 'タイトル'));
echo $this->Form->input('body', array('rows' => '3', 'label' => '本文'));
echo $this->Form->end('Save Post');
?>