
const categorysMenu = document.getElementById('popmenu');


    categorysMenu.addEventListener("mousemove", menuappear)
    document.addEventListener("click",menuappearclose );


    
    
       
    function menuappear(){
    var menu = document.getElementById('menu');
    menu.style.display="block"
    menu.style.display='flex';
    menu.style.justifyContent=' space-between';
    menu.style.alignItems='center';
    menu.style.flexDirection='column';

    }


    function menuappearclose(){
        var menu = document.getElementById('menu');
        menu.style.display="none"

    }





//red ligth if not register
const redclick1 = document.getElementById('red_click1');
const redclick2 = document.getElementById('red_click2');
const redclick3 = document.getElementById('red_click3');
const redclick4 = document.getElementById('red_click4');
var redcolor = document.getElementById('redcolor');
redclick1.addEventListener("click",()=>{ 
redcolor.style.color='red';
} );

redclick2.addEventListener("click",()=>{
    redcolor.style.color='red';
} );
redclick3.addEventListener("click",()=>{
    redcolor.style.color='red';
} );
redclick4.addEventListener("click",()=>{
    redcolor.style.color='red';
} );
