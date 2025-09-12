<!-- Comments -->
<div class="row mt-5 mb-5 bg-light rounded">
    <div class="col-12 p-3 g-2 mb-2">
        <h1>Комментарии:</h1>
        <div>
            <div class="d-flex flex-column mx-0 mx-md-3 mt-2 m-0 m-md-4 p-2 p-md-3 bg-white rounded">
                <h4 class="m-0 mt-2" style="color: var(--orange-color) !important;">
                    Арсений Игоревич (qwertyprob)
                </h4>
                <small style="font-style: italic">Суббота 21 июня 10:43</small>
                <hr style="color: #f8f9fa !important; border: #f8f9fa solid 0.1px">
                <p class="text-start mb-0 fs-4 fs-md-5 fs-lg-4 "
                   style="font-family: 'Calibri Light' !important;
                                  font-size: 2em;
                                  line-height: 1.1;
                                  color: var(--pink-color)">
                    Я был приятно удивлён этой книгой. С самого начала автор затягивает в атмосферу и постепенно раскрывает персонажей так, что к каждому из них начинаешь относиться как к знакомым людям. Особенно понравилось, что сюжет развивается динамично, но при этом не теряется глубина смыслов. Некоторые главы заставили задуматься о действительно важных вещах — о ценности семьи, дружбы и собственных решений. Единственный момент, который можно отметить как слабый — это слегка затянутое описание в середине, но в целом оно не портит впечатления. После прочтения остаётся ощущение тепла и желание вернуться к книге ещё раз.
                </p>
                <hr style="color: #f8f9fa !important; border: #f8f9fa solid 0.1px">
            </div>

            <div class="button-group d-flex justify-content-end align-items-center p-2 " >
                <a class="btn btn-info m-2 p-0 pb-1">
                    <img class="icon-btn" src="{{asset("img/icons/edit.png")}}" alt="Edit">
                </a>
                <a class="btn btn-danger m-2 p-0 pb-1">
                    <img class="icon-btn" src="{{asset("img/icons/delete.png")}}" alt="Delete">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Add comment -->
<div class="row mt-5 bg-light rounded">
    <div class="col-12 p-4 mb-0">
        <form>
            <div class="form-group p-2">
                <h3 for="name" class="form-label">Имя:</h3>
                <input type="text" class="form-control" id="name" placeholder="Введите имя">
            </div>

            <div class="form-group p-2">
                <h3 for="comment" class="form-label">Добавьте комментарий:</h3>
                <textarea class="form-control" id="comment" rows="3" placeholder="Ваш комментарий"></textarea>
            </div>

            <div class="d-flex justify-content-end p-2">
                <button type="submit" class="btn btn-info">Отправить</button>
            </div>
        </form>
    </div>
</div>
