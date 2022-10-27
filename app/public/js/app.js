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

// function shownavbar(x){
//     if(x.matches){
//         dropdown.style.display = "block";
//     }else{
//         dropdownbox.style.display = "none";
//     }
// }
// var x = window.matchMedia("(min-width:800px)");
// shownavbar(x);
// x.addEventListener(shownavbar) //Listener function on change
