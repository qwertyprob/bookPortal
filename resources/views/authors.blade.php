<x-layout title="Авторы">
<x-navbar/>
<x-search search="Любимого автора" />
<div class="container">
      <div class="row g-3 mb-3 mt-5">
          @foreach($authors as $author)
              <div class="col-6 col-md-6 col-lg-2 ">
                  <div class="book-block bg-light p-3 pb-0 rounded hover d-flex flex-column align-items-center justify-content-around position-relative">
                      <img src="{{ $author->portrait }}" class="book-image pb-2">
                      <p class="text-start m-0">{{ $author->name }}</p>
                      <a href="/author/{{ $author->id }}" class="stretched-link"></a>
                  </div>

              </div>
          @endforeach


      </div>
</div>


</x-layout>
