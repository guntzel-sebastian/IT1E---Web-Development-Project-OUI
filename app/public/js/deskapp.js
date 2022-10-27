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

function closeNav(){
   document.getElementById('nav-mobile').style.display='none';
}
document.querySelector('#main-container').addEventListener('click',closeNav)
