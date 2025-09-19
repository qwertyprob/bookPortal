@props(
    ['id'=>'item','title'=>'Создание предмета','authors'=>null, 'genres'=>null]
)

<div class="modal fade" id="create{{$id}}Modal" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-light">

                <div class="modal-header">
                    <h5 class="modal-title">{{$title}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                </div>

                <div class="modal-body">
                    <div class="row">
                        @if($id === 'Book')
                            <div class="col-12 col-md-6 p-1">

                                <div class="form-group mb-2">
                                    <label class="form-label">Название</label>
                                    <input class="form-control" name="title">
                                </div>

                                <!--Select2 -->
                                <div class="mb-3">
                                    <label class="form-label">Авторы</label>
                                    <div class="w-100"> <!-- контейнер для Select2 -->
                                        <x-selector id="authors" :items="$authors">
                                        </x-selector>
                                    </div>
                                </div>

                                <!--Select2 -->
                                <div class="mb-3">
                                    <label class="form-label">Жанры</label>
                                    <div class="w-100"> <!-- контейнер для Select2 -->
                                        <x-selector id="genres" :items="$genres">
                                        </x-selector>
                                    </div>
                                </div>


                                <div class="form-group mb-2">
                                    <label class="form-label">Описание</label>
                                    <textarea class="form-control" name="description" rows="6"> </textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-label">Ссылка на картинку:</label>
                                    <input class="form-control" name="image-url" id="image-url">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 py-2 d-flex flex-column align-items-center justify-content-center" >
                                <img class="img-fluid rounded w-75"
                                     style="height: auto; max-height: 700px;" name="image" id="preview">
                            </div>

                        @else
                            <div class="col-12 col-md-6 p-1">

                                <div class="form-group mb-2">
                                    <label class="form-label">Имя автора</label>
                                    <input class="form-control" name="name">
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-label">Биография:</label>
                                    <textarea class="form-control" name="bio" rows="6"> </textarea>
                                </div>

                                <div class="form-group mb-2">
                                    <label class="form-label">Ссылка на портрет:</label>
                                    <input class="form-control" name="image-url" id="image-url">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 py-2 d-flex flex-column align-items-center justify-content-center" >
                                <img class="img-fluid rounded w-75"
                                     style="height: auto; max-height: 700px;" name="image" id="preview">
                            </div>
                        @endif
                    </div>


                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                        <img class="icon-btn" src="{{ asset('img/icons/back.png') }}" alt="Cancel">
                    </button>

                    <button type="submit" class="btn btn-success">
                        <img class="icon-btn" src="{{ asset('img/icons/add.png') }}" alt="Save">
                    </button>
                </div>

        </div>
    </div>
</div>
<script src="{{asset('js/searchByimg.js')}}"></script>
<script>

    searchByImageUrl('image-url','preview');

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2({
            tags: true,
            tokenSeparators: [','],
            placeholder: "Выберите или добавьте книгу",
            width: '100%',
        });
    });



</script>
