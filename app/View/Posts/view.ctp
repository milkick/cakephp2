
<h1><?php echo h($getPostData['Post']['title']); ?></h1>
<p><small>Created: <?php echo $getPostData['Post']['created']; ?></small></p>
<p><?php echo h($getPostData['Post']['body']); ?></p>
<?php 
echo $this->Html->link('この記事を編集', array('controller' => 'posts', 'action' => 'edit', $getPostData['Post']['id'])); 
?>
<!--
array (size=1)
  'Post' => 
    array (size=5)
      'id' => string '1' (length=1)
      'title' => string 'タイトル1' (length=13)
      'body' => string 'これは本文です' (length=21)
      'created' => string '2016-11-02 20:14:25' (length=19)
      'modified' => null
-->