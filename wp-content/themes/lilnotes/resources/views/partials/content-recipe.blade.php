<article @php(post_class())>
  <header>
    <h2 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
    <h3>{{$postTitle}}</h3>
    <h3>{{$postPermalink}}</h3>
    <hr/>
    @include('partials/entry-meta')
  </header>
  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>
