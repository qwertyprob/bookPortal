@props(['url' => 'your url','paginator' => null])
<div class="col-3 button-group d-none d-md-block pt-2">
    <p class="fs-2">Всего найдено: <span style="color: var(--orange-color) !important;"> {{$paginator->total()}}</span></p>

</div>
<div class="col-12 col-md-9 button-group d-flex flex-wrap justify-content-center align-items-center p-0">

    @if ($paginator->currentPage() > 1)
        <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-info m-2 p-1 pb-1 px-2">
            <
        </a>
    @endif

    @if($paginator->lastPage() < 5)

            @for($i=1;$i<=$paginator->lastPage();$i++)
                @if ($i == $paginator->currentPage())
                    <a class="btn btn-info m-2 p-1 pb-1 px-2"
                       style="background-color: var(--pink-color) !important; border-color: var(--pink-color) !important;"
                       href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @else
                    <a class="btn btn-info m-2 p-1 pb-1 px-2" href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @endif
            @endfor

    @elseif($paginator->lastPage() == 5)
            @for($i=1;$i<=5;$i++)
                @if ($i == $paginator->currentPage())
                    <a class="btn btn-info m-2 p-1 pb-1 px-2"
                       style="background-color: var(--pink-color) !important; border-color: var(--pink-color) !important;"
                       href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @else
                    <a class="btn btn-info m-2 p-1 pb-1 px-2" href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @endif
            @endfor

    @else
            @php
                $maxButtons = 4; // максимум кнопок
                $start = max(1, $paginator->currentPage() - floor($maxButtons / 2));
                $end = min($start + $maxButtons - 1, $paginator->lastPage());
                $start = max(1, $end - $maxButtons + 1);
            @endphp

            @for ($i = $start; $i <= $end - 1; $i++)

                @if ($i == $paginator->currentPage())
                    <a class="btn btn-info m-2 p-1 pb-1 px-2"
                       style="background-color: var(--pink-color) !important; border-color: var(--pink-color) !important;"
                       href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @else
                    <a class="btn btn-info m-2 p-1 pb-1 px-2" href="/{{$url}}?page={{$i}}">
                        {{$i}}
                    </a>
                @endif
            @endfor

            ...
            @php
                $isCurrent = $paginator->currentPage() == $paginator->lastPage();
            @endphp

            <a class="btn btn-info m-2 p-1 pb-1 px-2"
               @if($isCurrent)
                   style="background-color: var(--pink-color) !important; border-color: var(--pink-color) !important;"
               @endif
               href="/{{$url}}?page={{$paginator->lastPage()}}">
                {{$paginator->lastPage()}}
            </a>
        @endif





        <a class="btn btn-info m-2 p-1 pb-1 px-2" href="{{$paginator->nextPageUrl()}}">
            >
        </a>

</div>

