var d = document;

      // notification icon effect
      var $no = 1;
      var unread = d.querySelector('.no__msgs');
      var note = d.querySelector('.messaging__icon').addEventListener('mouseover', function(){
          $no = 1;
          unread.style.animationName = `no__msg${$no}`;
      });
      var note = d.querySelector('.messaging__icon').addEventListener('mouseout', function(){
          $no--;
          unread.style.animationName = `no__msg${$no}`;
      });


      var pane = d.querySelector('.img__pane');
      var prev = d.querySelector('.previous__img');
      var next = d.querySelector('.next__img');
      var body = d.querySelector('.body');


      //loader
      var loader = d.querySelector('.loader');
      
       
      var counter = 5;
      var eff = 1;
      var IMAGES = 21;
     
     window.addEventListener('load', function(){
          body.style.display = 'block';
      });
      
      window.addEventListener('load', function(){
          loader.style.display = 'none';
      });

      pane.style.background = "url('imgs/slide--"+ Math.random()*IMAGES +".jpg') center/cover no-repeat";

      prev.addEventListener("click", function(){
         eff--;
         counter--;
         if(counter < IMAGES) counter = IMAGES;
         if(eff < 1){
          eff = 5;
         }
         paneShader();
         pane.style.background = "url('imgs/slide--"+ Math.random()*IMAGES +".jpg') center/cover no-repeat";
      });
      next.addEventListener("click", nextF);

     function nextF(){
        eff++;
        if(eff > 5) eff = 1;
        paneShader();
         counter++;
         if(counter > IMAGES) counter = 1;
         pane.style.background = "url('imgs/slide--"+ counter +".jpg') center/cover no-repeat";
     }
     function paneShader(){
          pane.style.animationName = `effect${eff}`;
      }
      nextF();
      setInterval(nextF, 10000);