<nav class="navbar navbar-toggleable-md">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	{{--<a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>--}}
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		@if (has_nav_menu($menu . '_navigation'))
			{!! wp_nav_menu([
				'theme_location' => $menu . '_navigation',
				'walker' => new wp_bootstrap_navwalker(),
				'menu_class' => 'navbar-nav nav pull-right float-right',
				'container_class' => 'menu-primary-menu-container w-100'
			]) !!}
		@endif
	</div>
</nav>