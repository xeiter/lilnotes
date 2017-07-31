<?php

namespace App;

trait Tile
{
	public function images()
	{
		return get_field('images');
	}
}