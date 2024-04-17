var page1 = document.querySelector(".page1");
var page2 = document.querySelector(".page2");
var page3 = document.querySelector(".page3");
var back1 = document.querySelector("#back_form1");//✅
var back2 = document.querySelector("#back_form2");//✅

var next1 = document.querySelector("#next_form1");//✅
var next2 = document.querySelector("#next_form2");
console.log(next2);
next1.addEventListener('click',function(){
    page1.style.left="-1100px";
    page2.style.left="0px";
    page3.style.left="1050px";

})
back1.addEventListener('click',function(){
   console.log("hola hola")
page1.style.left="0px";
page2.style.left="1050px";
page3.style.left="2050px";

})

next2.addEventListener('click',function(){
    page1.style.left="-1100px";
    page2.style.left="-1100px";
    page3.style.left="0px";

})

back2.addEventListener('click',function(){
    console.log("hola hola")
 page1.style.left="-1100px";
 page2.style.left="0px";
 page3.style.left="1050px";
 
 })


