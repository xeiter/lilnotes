<?php

namespace App;

trait Navigation
{

	public function __construct()
	{
		$this->addFilters();
	}

	/**
	 * Add filters related to menus
	 */
	protected function addFilters()
	{
		// Attach the search form to the menu
		add_filter('wp_nav_menu_items', function($items) {
			return $this->attachSearchForm($items);
		});

		// Make the menu items bold
		add_filter('nav_menu_css_class', function($classes) {
			array_push($classes, 'font-weight-bold');
			return $classes;
		});
	}

	/**
	 * Attach the search form to the menu
	 *
	 * @param $items
	 * @return string
	 * @access protected
	 */
	protected function attachSearchForm($items)
	{
		return $items . '<li class="menu-item menu-item-type-form nav-item ml-3 pt-1">' . get_search_form(false) . '</li>';

		$content = <<<MULTILINE
<li class="menu-item menu-item-type-form nav-item">
	<form role="search" method="get" class="search-form ml-3 mt-2" action="/">
		<label for="search" class="flex items-center">
			<!--
			<svg class="h1 w1" id="icon-search" viewBox="0 0 26 28">
				<title>search</title>
				<path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
			</svg>
			-->
			<input class="keyword ph2 pv1 w-100 bw0 br0" type="search" id="search" placeholder="Search the site" name="s" />
		</label>
		<input class="ph3 pv0 bg-black hover-bg-teal bw0 white ttl tracked search-submit" type="submit" value="Search">
	</form>
</li>
MULTILINE;

		return $items . $content;

	}

	public function menuName()
	{

	}

}