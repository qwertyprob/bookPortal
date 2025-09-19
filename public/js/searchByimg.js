function searchByImageUrl(imgId, imgPreview) {
    const input = document.getElementById(imgId);
    const preview = document.getElementById(imgPreview);
    const notFoundImg = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp5hvw6LxzrtFDIiaj9ETqX7dW38OcbMaHCA&s';

    input.addEventListener('change', () => {
        const url = input.value.trim();
        if (url) {
            preview.src = url;
        }
        else {
            preview.src = notFoundImg;
        }

    });

    preview.onerror = () => {
        preview.src = notFoundImg;
    };


}

