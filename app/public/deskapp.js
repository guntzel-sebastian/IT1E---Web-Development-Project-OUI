let dropdown = document.getElementById('check');


let dropdownbox = document.getElementById('nav-list');
console.log(dropdownbox);

dropdown.addEventListener('click', function(){
    if( dropdownbox.style.display == "none"){
        
    dropdownbox.style.display = "block";
    }
    else{
        dropdownbox.style.display = "none";
    }

});
