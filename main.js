let pop=document.getElementById('loginpop')
let blurr=document.getElementById('ontop')
function popup(){
   if(pop.style.display =='none'){
      pop.style.display ='block'
      blurr.style.display='block'
   }
   else{
      pop.style.display='none'
      blurr.style.display='none'
   }
}
function r_popup(){
   let rpop=document.getElementById('registerpop')
   let blurr=document.getElementById('ontop')
   let b=document.body
   if(rpop.style.display =='none'){
      rpop.style.display ='block'
      blurr.style.display='block'
   }
   else{
      rpop.style.display='none'
      blurr.style.display='none'
   }
}
function a_popup(){
   let apop=document.getElementById('adminpop')
   let blurr=document.getElementById('ontop')
   let b=document.body
   if(apop.style.display =='none'){
      apop.style.display ='block'
      blurr.style.display='block'
   }
   else{
      apop.style.display='none'
      blurr.style.display='none'
   }
}

let mybutton=document.getElementById('up')
window.onscroll = function(){scroll()}
function scroll(){
   if(document.documentElement.scrollTop > 80){
      mybutton.style.display = 'block'
   }
   else{
      mybutton.style.display='none'
   }
}

function downdown() {
   // Scroll down to the bottom of the page
   window.scrollTo(0, document.body.scrollHeight);
}

function close(){
   pop.style.display ='block'
   blurr.style.display='block'
}