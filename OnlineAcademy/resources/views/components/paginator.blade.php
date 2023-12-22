@if ($posts->hasPages())
    <div class="pagination-wrapper">
        <div class="pagination">
      @if ($posts->onFirstPage())
        <span class="disabled page-numbers">prev</span>
      @else
        <a class="prev page-numbers" href="{{ $posts->previousPageUrl() }}">prev</a>
      @endif

      @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
        @if ($page == $posts->currentPage())
          <span aria-current="page" class="page-numbers current">{{ $page }}</span>
        @else
          <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
        @endif
      @endforeach

      @if ($posts->hasMorePages())
        <a class="next page-numbers" href="{{ $posts->nextPageUrl() }}">next</a>
      @else
        <span class="disabled page-numbers">next</span>
      @endif
    </div>
  </div>
@endif





