@if ($paginator->hasPages())
    <nav>
        <ul class="pagination" style="justify-content: space-between; margin-top: 10px;">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page_prev_img_sp" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true"><img src="{{ asset('img/page_prev.png') }}" class="page_img_sp" alt=""></span>
                </li>
            @else
                <li class="page_prev_img_sp">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <img src="{{ asset('img/page_prev.png') }}" class="page_img_sp" alt="">
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active_page_sp" aria-current="page"><span>{{ $page }}</span></li>
                        @elseif ($page >= $paginator->currentPage() - 2 && $page <= $paginator->currentPage() + 2)
                            <li class="other_page_sp"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page_next_img_sp">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <img src="{{ asset('img/page_next.png') }}" class="page_img_sp" alt="">
                    </a>
                </li>
            @else
                <li class="disabled page_next_img_sp" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true"><img src="{{ asset('img/page_next.png') }}" class="page_img_sp" alt=""></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
