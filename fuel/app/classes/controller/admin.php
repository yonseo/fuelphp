<?php

class Controller_Admin extends Controller_Template
{
    public function action_index()
    {
        $posts = Model_Post::find('all');
        
        $data = ['posts' => $posts];
        $this->template->title = 'Forum Posts';
        $this->template->content = View::forge('admin/index', $data);
    }
    
    public function action_posts()
    {
        $posts = Model_Post::find('all');
        
        $data = ['posts' => $posts];
        $this->template->title = 'Forum Posts';
        $this->template->content = View::forge('admin/posts/index', $data);
    }
}