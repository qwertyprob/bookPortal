@props([
    'id',
    'title' => 'Подтверждение',
    'body' => 'Вы уверены, что хотите выполнить это действие?',
    'route' => '#',
])

<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>

            <div class="modal-body">
                Вы уверены, что хотите удалить
                <span class="fs-3"
                    style="font-family: Caveat !important;
                           color:var(--orange-color)">
                    {{ $body }}
                </span>



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                    <img class="icon-btn" src="{{ asset('img/icons/back.png') }}" alt="Cancel">
                </button>


                <button type="submit" class="btn btn-danger">
                    <img class="icon-btn" src="{{ asset('img/icons/delete.png') }}" alt="Delete">
                </button>

            </div>

        </div>
    </div>
</div>
