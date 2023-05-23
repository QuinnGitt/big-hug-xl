
const images = new Array();
images[0] = "img/woolly-wit.png";
images[1] = "img/woolly-bruin.png";
images[2] = "img/woolly-creme.png";
images[3] = "img/woolly-zwart.png";
const names = new Array();
names[0] = "Woolly Wit";
names[1] = "Woolly Bruin";
names[2] = "Woolly Creme";
names[3] = "Woolly Zwart";
let currentpic = 0;
let currentname = 0;
let lastpic = images.length-1;
let lastname = names.length-1;
function nextslide()
{
    if (currentpic == lastpic && currentname == lastname)
    {
        currentname = 0;
        currentpic = 0;
        document.getElementById('slide').src = images[currentpic];
        document.getElementById('nameSlide').innerHTML = names[currentname];
    }
    else
    {
        currentpic++;
        currentname++;
        document.getElementById('slide').src = images[currentpic];
        document.getElementById('nameSlide').innerHTML = names[currentname];
    }
}