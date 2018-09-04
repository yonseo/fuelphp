<?php
## Name this file the same as the controller class.
## Actions are methods. To access action_add on this file use posts/add.
class Controller_Posts extends Controller_Template
{

	public function action_index()
	{
        $topic = Model_Topic::find('all');
        
        $data = ['topics' => $topic];
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('posts/index', $data);
		//return Response::forge(View::forge('welcome/index'));
	}

    public function action_topic($id,$sub)
    {
        //get topic name from id
        $topic_name = Model_Topic::find($id)->name;
        $topic_sub = $sub;
        //compare to db
        $topic = $topic_name.'>'.$topic_sub;
        
        $posts = Model_Post::find('all', [
            'where' => [
                'category' => $topic                                           
            ]
        ]);
        
        $data = ['posts' => $posts];
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('posts/thread', $data);
    }
	public function action_add()
	{
        if(Input::post('SEND')){
            $post = new Model_Post();
            $post->title = Input::post('title');
            $post->category = Input::post('category');
            $post->author = Input::post('author');
            $post->desc = Input::post('desc');
            $post->tags = Input::post('tags');
            $post->date = date('Y-m-d H:i:s');
            
            $post->save();
            Session::set_flash('success', 'Post Added');
            Response::redirect('/posts');
        }
        $data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('posts/add', $data);
	}
    
    public function action_edit($id)
	{
        if(Input::post('SEND') && $_POST["SEND"]){
            $post = Model_Post::find($id);
            $post->title = Input::post('title');
            $post->category = Input::post('category');
            $post->author = Input::post('author');
            $post->desc = Input::post('desc');
            $post->tags = Input::post('tags');
            $post->date = date('Y-m-d H:i:s');
            
            $post->save();
            Session::set_flash('success', 'Post Updated');
            Response::redirect_back();
        }
        
        $post = Model_Post::find('first', [
            'where' => [
                'id' => $id                                           
            ]
        ]);
        $data = ['post' => $post];
        $this->template->title = 'Edit Post';
        $this->template->content = View::forge('posts/edit', $data);
	}
    
    public function action_delete($id)
	{
        $post = Model_Post::find($id);
        $post->delete();
        Session::set_flash('success', 'Post Deleted');
        Response::redirect_back();
	}
    
    public function action_view($id)
	{
        $post = Model_Post::find('first', [
            'where' => [
                'id' => $id                                           
            ]
        ]);
        $data = ['post' => $post];
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('posts/view', $data);
		//return Response::forge(Presenter::forge('welcome/hello'));
	}


	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
