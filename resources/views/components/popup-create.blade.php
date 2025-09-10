@props([
    'id' =>'createBook',
    'title' => 'Подтверждение',
    'route' => '#',
])
<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-xl d-flex justify-content-center">
        <div class="modal-content bg-light "  >
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>

            <div class="modal-body">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                       <div class="form-group">
                           <label class="form-label">Название</label>

                       </div>
                    </div>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                    <img class="icon-btn" src="{{ asset('img/icons/back.png') }}" alt="Cancel">
                </button>


                <button type="submit" class="btn btn-success">
                    <img class="icon-btn" src="{{ asset('img/icons/save.png') }}" alt="save">
                </button>

            </div>

        </div>
    </div>
</div>
