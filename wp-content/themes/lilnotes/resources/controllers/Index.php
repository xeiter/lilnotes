<?php

namespace App;

use Sober\Controller\Controller;

class Index extends Controller
{
	use Logo;
	use Navigation;

	protected $post;

	public static function postImage()
	{
		return get_the_post_thumbnail_url(get_post(), 'small');
	}

	public function postTitle()
	{
		return get_post()->post_title;
	}

	public function postContent()
	{
		return get_post()->post_content;
	}

	public function postExcerpt()
	{
		return get_the_excerpt(get_post());
	}

	public function linkText()
	{
		return 'Read more';
	}

	public function postPermalink()
	{
		return get_permalink(get_post());
	}

}