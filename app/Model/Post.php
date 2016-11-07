<?php

class Post extends AppModel{
    public function getText(){
        return "げっちゅ！";
    }
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );
}
