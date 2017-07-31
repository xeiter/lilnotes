<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    <h1 class="entry-title">1{{$post_title}}2</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php(comments_template('/partials/comments.blade.php'))
</article>

<div class="card" @php(post_class())>
  <img class="card-img-top" src="{{$image}}" alt="Card image cap">
  <div class="card-block">
    @include('partials/entry-meta')
    <h4 class="card-title">{{$post_title}}</h4>
    <p class="card-text">{{$post_content}}</p>
    <a href="#" class="btn btn-primary">{$link_text}}</a>
    @php(comments_template('/partials/comments.blade.php'))
  </div>
</div>