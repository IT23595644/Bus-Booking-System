function openTab(evt, tabName){
    var i,tabcontent,tabs;

    tabcontent=document.getElementsByClassName("tabcontent");
    for(i=0;i<tabcontent.length;i++){
        tabcontent[i].style.display="none";
    }

    tabs=document.getElementsByClassName("tab");
    for(i=0;i<tabs.length;i++){
        tabs[i].classList.remove("active");
    }

    document.getElementById(tabName).style.display="block";
    evt.currentTarget.classList.add("active");

}

document.addEventListener("DOMContentLoaded", function() {
    document.querySelector(".tab.active").click();
});