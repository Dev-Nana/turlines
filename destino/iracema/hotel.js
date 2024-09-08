// var slideIndex = 1;
//           showDivs(slideIndex);
          
//           function plusDivs(n) {
//             showDivs(slideIndex += n);
//           }
          
//           function showDivs(n) {
//             var i;
//             var x = document.getElementsByClassName("mySlides");
//             if (n > x.length) {slideIndex = 1}
//             if (n < 1) {slideIndex = x.length}
//             for (i = 0; i < x.length; i++) {
//               x[i].style.display = "none";  
//             }
//             x[slideIndex-1].style.display = "block";  
//           }

var slideIndex = 1;
    showDivs(slideIndex);
    
function plusDivs(n) {
      showDivs(slideIndex += n);
}
    
function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
}

    var el = document.querySelector("#text");
    var text = "Prazer, me chamo Geovana Evyla. Sou a criadora dessa página, espero que gostem."
    var interval = 100;
function showtext(el, text, interval) {
    var char = text.split("").reverse();


    var typer = setInterval(function() {
  
      if (!char.length) {
          return clearInterval(typer)
}
      
      var next = char.pop();
      
      el.innerHTML += next;
      
    }, interval);
  
}
    showtext(el, text, interval);


    // para o input
// function mais(){
//         var atual = document.getElementById("total").value;
//         var novo = atual - (-1); //Evitando Concatenacoes
//         document.getElementById("total").value = novo;
// }
      
// function menos(){
//         var atual = document.getElementById("total").value;
//         if(atual > 0) { //evita números negativos
//         var novo = atual - 1;
//         document.getElementById("total").value = novo;
//         }
// }