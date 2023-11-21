
let blurr=document.getElementById('ontop')
let pop=document.getElementById('loginpop')
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
   // let blurr=document.getElementById('ontop')
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

// let close=document.getElementById('close-x')
function lrclose(){
   pop.style.display ='none'
   blurr.style.display ='none'
}