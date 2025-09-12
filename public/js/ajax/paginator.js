
    function initPagination(containerSelector) {
        $(document).on('click', `${containerSelector} .button-group a`, function (e) {
            e.preventDefault();

            let url = $(this).attr('href');
            if (!url) return;

            $.get(url, function (data) {
                let newContent = $(data).find(containerSelector).html();
                $(containerSelector).html(newContent);
            });
        });
    }


