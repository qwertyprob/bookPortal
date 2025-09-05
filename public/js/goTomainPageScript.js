function gotoMainPage(buttonId){
    const mainButton = document.getElementById(buttonId);
    mainButton.addEventListener('click',function(e){
        e.preventDefault();
        window.location.href = '/';
    });
}

document.addEventListener("DOMContentLoaded",gotoMainPage("mainPageButton"));


