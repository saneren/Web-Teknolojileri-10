function ClickButton()
{
    var control = document.getElementById('list-visit-paragraph');

    if (control.style.visibility === 'hidden')
    {
        control.style.visibility = 'visible';
        control.style.opacity="1";
        control.style.transitionDuration="1s";
    } 

    else 
    {
      control.style.visibility = 'hidden';
      control.style.opacity="0";
      control.style.transitionDuration="1s";

    }
}

