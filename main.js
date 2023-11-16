function popup(){
   let pop=document.getElementById('loginpop')
   let blur=document.getElementById('ontop')
   if(pop.style.display =='none'){
      pop.style.display ='block'
      blur.style.display='block'
   }
   else{
      pop.style.display='none'
      blur.style.display='none'
   }
}