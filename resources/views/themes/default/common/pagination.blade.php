@if ($paginator->hasPages())
    <div class="bg-white uk-box-shadow-large uk-padding-small">
       <ul class="uk-pagination uk-flex-center uk-margin-remove">
           @if ($paginator->onFirstPage())
                <li class="uk-disabled"><a href="#"><span uk-pagination-previous></span></a></li>
           @else
                <li><a href="{{ $paginator->previousPageUrl() }}"><span uk-pagination-previous></span></a></li>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="uk-disabled"><span class="pagination-ellipsis"><span>{{ $element }}</span></span></li>
                @endif
    
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="uk-active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
          
            @if ($paginator->hasMorePages())
               <li><a href="{{ $paginator->nextPageUrl() }}"><span uk-pagination-next></span></a></li>
            @else
               <li class="uk-disabled"><a href="#"><span uk-pagination-next></span></a></li>
            @endif 
       </ul>
    </div>
@endif