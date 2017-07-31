<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{

	protected $post;

	public function __construct()
	{
		global $post;
		$this->post = $post;
	}

	public function postImage()
	{
		return get_the_post_thumbnail_url($this->post);
	}

	public function postTitle()
	{
		return $this->post->post_title;
	}

	public function postContent()
	{
		return $this->post->post_content;
	}

	public function postExcerpt()
	{
		return get_the_excerpt($this->post);
	}

	public function linkText()
	{
		return 'Read more';
	}

	public function postPermalink()
	{
		return get_permalink($this->post);
	}

}