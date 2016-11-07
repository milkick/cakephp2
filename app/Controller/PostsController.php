<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index($name = "") {
        $this->set('postsData', $this->Post->find('all'));
        $this->set('name', $name);
        $this->set('get',$this->Post->getText());
    }
    
    public function view($id = null) {
        if(!($id)){
            throw new NotFoundException(__('Invaled post'));
        }
        
        $getPostData = $this->Post->findById($id);
        if(!($getPostData)){
            throw new NotFoundException(__('Invaled post'));
        }
        $this->set('getPostData' , $getPostData);
        
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if ($this->Post->save($this->request->data)){
                $this->Flash->success(__('Your post has been saved'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to add your post'));
        }
    }
    public function edit($id = null) {
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if ($this->Post->save($data)) {
                $this->Flash->success('編集しました');
                return $this->redirect(
                        array('controller' => 'posts', 'action' => 'index')
                );       
            } else{
                $this->Flash->error('編集に失敗しました');
            }
        }
        $contentsData = $this->Post->findById($id);
        if (!$contentsData){
            throw new NotFoundException('指定されたデータがありません');
        }
        $this->set('contentsData',$contentsData);
    }
    public function delete($id){
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException('リクエストエラー');
        }
        if ($this->request->is('post')) {
            if ($this->Post->delete($id)) {
                $this->Flash->success('正常に削除できました');
            }else{
                $this->Flash->error('削除できませんでした');
            }
        }
        $this->redirect(array('controller' => 'posts', 'action' => 'index'));
    }
}