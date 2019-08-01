var d = document;

// notification icon effect



var pane = d.querySelector('.img__pane');
var prev = d.querySelector('.previous__img');
var next = d.querySelector('.next__img');






var counter = 5;
var eff = 1;
var IMAGES = 19;





pane.style.background = "url('imgs/slide--"+ Math.random()*IMAGES +".jpg') center/cover no-repeat transparent";

prev.addEventListener("click", function(){
   eff--;
   counter--;
   if(counter < IMAGES) counter = IMAGES;
   if(eff < 1){
    eff = 5;
   }
   paneShader();
});
next.addEventListener("click", nextF);

function nextF(){
  eff++;
  if(eff > 5) eff = 1;
  paneShader();
   counter++;
   if(counter > IMAGES) counter = 1;
   pane.style.background = "url('imgs/slide--"+ counter +".jpg') center/cover no-repeat transparent";
}
function paneShader(){
    pane.style.animationName = `effect${eff}`;
}
nextF();
setInterval(nextF, 10000);
