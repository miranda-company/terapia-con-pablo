'use strict';

let Navigation = {
   scrollMagic: function(event){
      var controller = new ScrollMagic.Controller();
      var quickNavUp = document.getElementById("quick-nav-up");
      var quickNavDown = document.getElementById("quick-nav-down");

      function quickNav1(event){
         console.log("event target", event.target.triggerElement);
         quickNavUp.setAttribute('href', "#inicio");
         quickNavDown.setAttribute('href', "#sobre-pablo");
      }

      function quickNav2(){
         quickNavUp.setAttribute('href', "#inicio");
         quickNavDown.setAttribute('href', "#terapias");
      }

      function quickNav3(){
         quickNavUp.setAttribute('href', "#sobre-pablo");
         quickNavDown.setAttribute('href', "#formacion");
      }

      function quickNav4(){
         quickNavUp.setAttribute('href', "#terapias");
         quickNavDown.setAttribute('href', "#contacto");
      }

      function quickNav5(){
         quickNavUp.setAttribute('href', "#formacion");
         quickNavDown.setAttribute('href', "#contacto");
      }

      // Scene 1 - inicio
      var inicio = document.getElementById("inicio");
      var inicioAttr = inicio.getAttribute("id");
      console.log("INICIO ATTR", inicioAttr);

      var scene1 = new ScrollMagic.Scene({
         triggerElement: inicioAttr,
         duration: "90%", 
         triggerHook: 0
      })
      .setClassToggle("#nav-btn-inicio", "button-selected")
      .on("enter", quickNav1)
      .addTo(controller); // assign the scene to the controller

      // Scene 1 arrow inactive - inicio
      new ScrollMagic.Scene({
         triggerElement: "#inicio",
         duration: "90%", 
         triggerHook: 0
      })
      .setClassToggle("#quick-nav-up", "quick-nav-inactive")
      .addTo(controller); // assign the scene to the controller

      // Scene 2 - sobre
      var scene2 = new ScrollMagic.Scene({
         triggerElement: "#sobre-pablo",
         duration: "100%", 
         triggerHook: 0
      })
      .setClassToggle("#nav-btn-sobre", "button-selected")
      .on("enter", quickNav2)
      .addTo(controller); // assign the scene to the controller

      // Scene 3 - terapias
      var scene3 = new ScrollMagic.Scene({
         triggerElement: "#terapias",
         duration: "100%",
         triggerHook: "10%"
      })
      .setClassToggle("#nav-btn-terapias", "button-selected")
      .on("enter", quickNav3)
      .addTo(controller); // assign the scene to the controller

      // Scene 4 - formacion
      var scene4 = new ScrollMagic.Scene({
         triggerElement: "#formacion",
         duration: "100%", 
         triggerHook: "10%"
      })
      .setClassToggle("#nav-btn-formacion", "button-selected")
      .on("enter", quickNav4)
      .addTo(controller); // assign the scene to the controller

      // Scene 5 - contacto
      var scene5 = new ScrollMagic.Scene({
         triggerElement: "#contacto",
         duration: "30%"
      })
      .setClassToggle("#nav-btn-contacto", "button-selected")
      .on("enter", quickNav5)
      .addTo(controller); // assign the scene to the controller

      // Scene 5 arrow inactive - contacto
      var scene5Inactive = new ScrollMagic.Scene({
         triggerElement: "#contacto",
         duration: "30%"
      })
      .setClassToggle("#quick-nav-down", "quick-nav-inactive")
      .addTo(controller); // assign the scene to the controller
   }

}

let QuotePicker = {
   quote: null,
   defaultText: "La buena vida es un proceso, no un estado del ser. Se trata de una dirección, no un destino.", 
   defaultAuthor: "Carl Rogers",

   pick: function (){
      this.quote = Quotes[ Math.floor( Math.random() * Quotes.length ) ];
      
      if(this.quote) {
         document.getElementById("quote-text").innerHTML = '"' + this.quote.quote + '"';
         document.getElementById("quote-author").innerHTML = '⁠— ' + this.quote.author + ' ⁠—';
      } else {
         document.getElementById("quote-text").innerHTML = '"' + this.defaultText + '"';
         document.getElementById("quote-author").innerHTML = '⁠— ' + this.defaultAuthor + ' ⁠—';
      }
   }
}

let Form = {
   successMessage: null,
   closeSuccessMessage: function (){
      this.successMessage = document.getElementById("success-message");
      if(this.successMessage){
         document.getElementById("body").classList.add("overflow-hidden");
         TweenMax.to(this.successMessage, 0.5, {delay: 2.5, autoAlpha: 0, onComplete: function(){
               document.getElementById("body").classList.remove("overflow-hidden");
            }
         });
      }
   }
}

let Footer = {
   animate: function(){
      let barco = document.getElementById("barco");
      let faro = document.getElementById("faro");
      let luz1 = document.getElementById("luz-1");
      let luz2 = document.getElementById("luz-2");
      TweenMax.set([luz1, luz2], {opacity: 0});
      TweenMax.fromTo(barco, 4, {rotation: -6, x:-6}, {rotation: 6, x: 2, yoyo: true, repeat: -1,  transformOrigin: "50% 100%", ease:Power1.easeInOut});
      TweenMax.fromTo(luz1, 4.5, {scaleX: 0.6, scaleY: 2, opacity: 0}, {delay: 0, scaleX:1.5, scaleY: 0.8, opacity: 1, yoyo:true, repeat: -1, transformOrigin:"100% 50%", ease:Power0.easeNone});
      TweenMax.fromTo(luz2, 5, {scaleX: 0, scaleY: 1.8, opacity: 0}, {delay: 7.5, scaleX:1.5, scaleY: 0.8, opacity: 1, yoyo:true, repeat: -1, transformOrigin:"0% 50%", ease:Power0.easeNone});
   }
}



// -----------------------------
window.onload = function () {
   if(pageType == "main"){
      Navigation.scrollMagic();
      QuotePicker.pick();
   }

   if(pageType == "inner"){
      Form.closeSuccessMessage();
   }

   Footer.animate();
   
   let pageOverlay = document.getElementById("page-overlay");
   TweenMax.to(pageOverlay, 0.4, {delay: 0.2, autoAlpha: 0});
}
// -----------------------------