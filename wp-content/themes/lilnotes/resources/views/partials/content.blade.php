<div class="card">
  <a href="{!! Index::postPermalink() !!}">
    <img class="card-img-top img-fluid" src="{{ Index::postImage() }}" alt="Card image cap">
  </a>
  <div class="card-block">
    <h4 class="card-title">
      <a href="{!! Index::postPermalink() !!}">
        {!! Index::postTitle() !!}
      </a>
    </h4>
    <p class="card-text">{!! Index::postExcerpt() !!}</p>
  </div>
</div>