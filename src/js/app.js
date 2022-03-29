

/*
window.addEventListener('scroll', function() {
    let element = document.querySelector('#about');
    let position = element.getBoundingClientRect();

    let home = document.querySelector('#home');
    let positionHome = home.getBoundingClientRect();

    let bts = document.querySelector('#bts-sio');
    let positionBts = bts.getBoundingClientRect();

    console.log(positionBts)

    // checking whether fully visible
    if(position.top >= 0 && position.bottom <= window.innerHeight) {
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("presentationBts").classList.add("selected-page");
    }else if(positionHome.top >= 0 && positionHome.bottom <= window.innerHeight){
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("home").classList.add("selected-page");
    }else if(positionBts.top >= 0 && positionBts.bottom <= window.innerHeight){
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("bts-sio").classList.add("selected-page");
    }

    // checking for partial visibility
    if(position.top < window.innerHeight && position.bottom >= 0) {
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("presentationBts").classList.add("selected-page");
    }else if(positionHome.top < window.innerHeight && positionHome.bottom >= 0){
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("home").classList.add("selected-page");
    }else if(positionBts.top < window.innerHeight && positionBts.bottom >= 0){
        document.querySelector(".selected-page").classList.remove("selected-page");
        document.getElementById("bts-sio").classList.add("selected-page");
    }
});
*/
