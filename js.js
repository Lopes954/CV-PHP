let fleche =document.getElementById("fleche");
let info =document.getElementById("info");

fleche.addEventListener("click", () => {
    if(getComputedStyle(info).display != "none"){
        info.style.display = "none";
    } else {
        info.style.display = "block";
    }
  })