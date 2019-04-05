@if ($paginator->hasPages())
    <ul class="pager">
      
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled pull-left"><span>&larr; Latest Posts</span></li>
        @else
            <li class="pull-left"><a href="{{ $paginator->previousPageUrl() }}" rel="prev">&larr; Latest Posts</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="next"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Older Posts &rarr;</a></li>

        @else
            <li class="disabled"><a href="{{ $paginator->nextPageUrl() }}" rel="next">Older Posts &rarr;</a></li>
        @endif
    </ul>
@endif
