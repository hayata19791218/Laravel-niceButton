const link = document.querySelectorAll("a");

for(let i = 0;i < link.length; i ++){
    link[i].addEventListener("click", function(e){
        e.preventDefault();
    }, false);
}
