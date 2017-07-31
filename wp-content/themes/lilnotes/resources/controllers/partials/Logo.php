<?php

namespace App;

trait Logo
{
	/**
	 * Get custom logo set up in Customizer
	 * @return string
	 */
	public function customLogo() {
		return get_custom_logo();
	}
}