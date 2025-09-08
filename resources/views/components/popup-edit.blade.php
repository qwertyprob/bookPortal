@props([
    'id',
    'title' => 'Подтверждение',
    'item' => null,
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
                   <div class="col-12 col-md-6 p-1">
                       @if($item instanceof App\Models\Book)
                           <form>
                               <div class="form-group mb-2">
                                   <label class="form-label">Название</label>
                                   <input class="form-control" name="title" value="{{ $item->title }}">
                               </div>
                               <div class="form-group mb-2">
                                   <label class="form-label">Авторы</label>
                                   <input class="form-control" name="authors" value="{{$item->authors()->pluck('name')->implode(',') }}">
                               </div>
                               <div class="form-group mb-3">
                                   <label class="form-label">Жанры:</label>
                                   <ul class="list-group">
                                       @foreach($item->genres as $genre)
                                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                               <span>{{ $genre->name }}</span>
                                               <a class="btn btn-sm btn-danger">
                                                   -
                                               </a>
                                           </li>
                                       @endforeach
                                       <li class="list-group-item d-flex py-2-0 pe-3">
                                           <button class="btn btn-success w-100">
                                               +
                                           </button>
                                       </li>
                                   </ul>
                               </div>

                               <div class="form-group mb-2">
                                   <label class="form-label">Ссылка на картинку</label>
                                   <input class="form-control" name="img" value="{{ $item->cover_image }}">
                               </div>

                               <div class="form-group mb-2 w-100">
                                   <label class="form-label">Описание</label>
                                   <textarea class="form-control" rows="6" name="description">{{ $item->description }} </textarea>
                               </div>

                           </form>
                       @else
                           <form>
                               <div class="form-group mb-2">
                                   <label class="form-label">Имя автора</label>
                                   <input class="form-control" name="name" value="{{ $item->name }}">
                               </div>

                               <div class="form-group mb-3">
                                   <label class="form-label">Книги:</label>
                                   <ul class="list-group">
                                       @foreach($item->books as $book)
                                           <li class="list-group-item d-flex justify-content-between align-items-center">
                                               <span>{{ $book->title }}</span>
                                               <button class="btn btn-sm btn-danger">
                                                   -
                                               </button>
                                           </li>
                                       @endforeach
                                       <li class="list-group-item d-flex py-2-0 pe-3">
                                           <button class="btn btn-success w-100">
                                                +
                                           </button>
                                       </li>
                                   </ul>
                               </div>


                               <div class="form-group mb-2">
                                   <label class="form-label">Биография автора</label>
                                   <textarea class="form-control" rows="6" name="bio">{{ $item->bio }} </textarea>
                               </div>

                           </form>
                       @endif
                   </div>

                   <div class="col-12 col-md-6 py-2 d-flex flex-column align-items-center" >
                       <img class="img-fluid rounded" style="height: auto; max-height: 600px;"
                            src="{{$item->cover_image ?? $item->portrait}}">
                       @if($item->title)
                           <h3 class="pt-3">Рейтинг: 4.3</h3>
                       @endif
                   </div>
               </div>



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                    <img class="icon-btn" src="{{ asset('img/icons/back.png') }}" alt="Cancel">
                </button>


                <button type="submit" class="btn btn-success">
                    <img class="icon-btn" src="{{ asset('img/icons/delete.png') }}" alt="Edit">
                </button>

            </div>

        </div>
    </div>
</div>
