
var images = new Array();
images[0] = "img/woolly-wit.png";
images[1] = "img/woolly-bruin.png";
images[2] = "img/woolly-creme.png";
images[3] = "img/woolly-zwart.png";
var currentpic = 0;
var lastpic = images.length-1;
function nextslide()
{
    if (currentpic == lastpic)
    {
        currentpic = 0;
        document.getElementById('slide').src = images[currentpic];
    }
    else
    {
        currentpic++;
        document.getElementById('slide').src = images[currentpic];
    }
}