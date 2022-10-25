let dropdown = document.getElementById('hamburger-btn');


let dropdownbox = document.getElementById('nav-mobile');
console.log(dropdownbox);

dropdown.addEventListener('click', function(){
    if( dropdownbox.style.display == "none"){
        
    dropdownbox.style.display = "block";
    }
    else{
        dropdownbox.style.display = "none";
    }

});
