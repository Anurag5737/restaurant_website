/* the "window object is the property of BOM in JS which is used to load the window in browser only when complete files that is JS file CSS file and html doc. is loaded*/
/*by addeventlistener method of JS we load the page when load event occurs then the function is called and
when function() is called the page-loading event is selected by the query selector method in JS and then fades-out*/
/*then we use a time function to exit the page-loading */

window.addEventListener("load",function(){
    /*----------------page loader-------------------------*/
    document.querySelector(".page-loader").classList.add("fade-out");
    setTimeout(function(){
        document.querySelector(".page-loader").style.display="none";
    },600)
   /*---------------animation on scroll------------------*/
   AOS.init();
});

/*----------------------------------toggle navbar-------------------------------------------- */

const navToggler = document.querySelector(".nav-toggler");
navToggler.addEventListener("click", toggleNav);

function toggleNav(){
    navToggler.classList.toggle("active");
    document.querySelector(".nav").classList.toggle("open");
}
/*close nav when clicking on a nav item*/
document.addEventListener("click",function(e){
    if(e.target.closest(".nav-item")){
        toggleNav();
    }
});

/*---------------------------------sticky header----------------------------------------------*/
/*we make our header stick on scrolling up and down in Y direction via If else block in If part if we scrolling the webpage greater than 60px
in Y direction then it will sticks the header with the page else not */
window.addEventListener("scroll",function(){
    if(this.pageYOffset > 60){
        document.querySelector(".header").classList.add("sticky");
    }
    else{
        document.querySelector(".header").classList.remove("sticky");
    }
});

/*----------menu tabs----------------*/
const menuTabs=document.querySelector(".menu-tabs");
menuTabs.addEventListener("click", function(e){
    if(e.target.classList.contains("menu-tab-item") && !e.target.classList.contains("active")){
      const target = e.target.getAttribute("data-target");
      menuTabs.querySelector(".active").classList.remove("active");

      e.target.classList.add("active");
      
      const menuSection=document.querySelector(".menu-section");
      menuSection.querySelector(".menu-tab-content.active").classList.remove("active"); 
      menuSection.querySelector (target).classList.add("active");
      
      /*----animation on scroll----*/
      AOS.init();
    }
});