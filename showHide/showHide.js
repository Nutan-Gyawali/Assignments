function hide()
{
   var box =document.getElementById("box");
   var button = document.getElementById("hide");
   
    

    if(box.style.display==="none")
      {
         document.getElementById("box").style.display="block";
         button.innerText="hide it"
      }
   
   
    
    else
    {
      document.getElementById("box").style.display="none";
      button.innerText="show it"
    }
    
   

   console.log(button);

   
}