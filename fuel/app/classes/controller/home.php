<?php

class Controller_Home extends Controller_Template
{

	public function action_index()
	{
		$data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('home/index', $data);
	}


	public function action_hello()
	{
		return Response::forge(Presenter::forge('welcome/hello'));
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
