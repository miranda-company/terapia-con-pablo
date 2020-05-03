"use strict";

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



// -----------------------------
window.onload = function () {

   if(page == "main"){
      QuotePicker.pick();
   }

   if(page == "inner"){
      Form.closeSuccessMessage();
   }
   
   let pageOverlay = document.getElementById("page-overlay");
   TweenMax.to(pageOverlay, 0.4, {delay: 0.2, autoAlpha: 0});
}
// -----------------------------