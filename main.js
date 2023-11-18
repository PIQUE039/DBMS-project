function popup(){
   let pop=document.getElementById('loginpop')
   let blur=document.getElementById('ontop')
   let b=document.body
   if(pop.style.display =='none'){
      pop.style.display ='block'
      blur.style.display='block'
   }
   else{
      pop.style.display='none'
      blur.style.display='none'
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