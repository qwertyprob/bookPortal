<x-layout title="Авторы">
<x-navbar/>
<x-search search="Любимого автора" />
<div class="content-wrapper">
      <div class="row">
          <div class="col-12 ">
            <h1 class="text-center display-1">Авторы:</h1>
          </div>
          @foreach($authors as $author)
              <h1>Автор: {{$author->name}}</h1>
              <p><strong>Биография:</strong>{{$author->bio}}</p>
              <h3>Книги:</h3>
              <ul>
                  @foreach($author->books as $book)
                      <li class="mx-5"><p>{{ $book->title }}</p></li>
                  @endforeach
              </ul>
          @endforeach
      </div>
</div>


</x-layout>
