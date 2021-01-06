$(document).ready(function(){
    $(".header").fadeToggle("1")
$("#about").on("click",  ()=>{
    $(".card").fadeToggle("slow");
    
    $(".header").fadeToggle("3000")
    $(".header").text("This is a project page.")
})
  
  });