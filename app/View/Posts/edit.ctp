
<?php
if (isset($contentsData)){
    echo $this->Form->create('Post',
        array('type' => 'post', 'url' => 
            array(
                'controller' => 'posts', 'action' => 'edit'
            )
        )
    );
    echo $this->Form->input('title', array('label' => '題名', 'value' => $contentsData['Post']['title']));
    echo $this->Form->input('body', array('label' => '本文' , 'value' => $contentsData['Post']['body']));
    echo $this->Form->hidden('id', array('value' => $contentsData['Post']['id']));
    echo $this->Form->end('変更する');
}