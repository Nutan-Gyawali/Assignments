function hide()
{
   var button = document.getElementById("hide");
   console.log(button);


    console.log(button.innerHTML);
    var inn = button.innerHTML;

    if(inn == "Hide It")
    button.innerHTML = 'Show it';
   
    
    else
    button.innerHTML = 'Hide It';
   

   console.log(button);

   
}