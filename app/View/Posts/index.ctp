<h1>Blog posts</h1>
<?php
echo $this->Html->link('記事作成', array('controller' => 'posts', 'action' => 'add'));
?>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created</th>
        <th>Delete</th>
    </tr>
    
    <?php foreach($postsData as $oneData): ?>
    <tr>
        <td><?php echo $oneData['Post']['id']; ?></td>
        <td>
        <?php
        echo $this->Html->link($oneData['Post']['title'],
            array('controller' => 'posts', 'action' => 'view', $oneData['Post']['id']),
            array()
        ); 
        ?>
        </td>
        <td><?php echo $oneData['Post']['created']; ?></td>
        <td>
        <?php 
        echo $this->Form->postLink(
            'Delete',
            array('controller' => 'posts', 'action' => 'delete', $oneData['Post']['id']),
            array('confirm' => '削除してもいいですか？')
        ); 
        ?>
        </td>
    </tr>
    <?php endforeach; ?>

        
