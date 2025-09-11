@props(['url' => 'your url','paginator' => null])

<div class="col-3 button-group d-none d-md-block pt-2">
    <p class="fs-2">Всего найдено:
        <span style="color: var(--orange-color) !important;">{{$paginator->total()}}</span>
    </p>
</div>

<div class="col-12 col-md-9 button-group d-flex flex-wrap justify-content-center align-items-center p-0">

    @if($paginator->currentPage() > 1)
        <a href="{{ $paginator->previousPageUrl() }}"
           class="btn btn-info m-2 p-1 pb-1 px-2">
            &lt;
        </a>
    @endif

    @if($paginator->lastPage() <= 3)
        @for($i = 1; $i <= $paginator->lastPage(); $i++)
            <a href="/{{$url}}?page={{$i}}"
               class="btn btn-info m-2 p-1 pb-1 px-2 {{ $i == $paginator->currentPage() ? 'active-btn' : '' }}">
                {{$i}}
            </a>
        @endfor
    @else
        @php
            $maxButtons = 3;
            $start = max(1, $paginator->currentPage() - floor($maxButtons / 2));
            $end = min($start + $maxButtons - 1, $paginator->lastPage());
            $start = max(1, $end - $maxButtons + 1);
        @endphp

        @for ($i = $start; $i <= $end; $i++)
            <a href="/{{$url}}?page={{$i}}"
               class="btn btn-info m-2 p-1 pb-1 px-2 {{ $i == $paginator->currentPage() ? 'active-btn' : '' }}">
                {{$i}}
            </a>

        @endfor

        @if($end < $paginator->lastPage())
            ...
            <a href="/{{$url}}?page={{$paginator->lastPage()}}"
               class="btn btn-info m-2 p-1 pb-1 px-2 {{ $paginator->currentPage() == $paginator->lastPage() ? 'active-btn' : '' }}">
                {{$paginator->lastPage()}}
            </a>
        @endif
    @endif

    @if($paginator->currentPage() != $paginator->lastPage())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="btn btn-info m-2 p-1 pb-1 px-2">
                &gt;
            </a>
    @endif



</div>
