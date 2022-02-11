'use strict'
const url = "principal.php";


fetch(url)
  .then(
    response => response.json() // .json(), .blob(), etc.
  )
  .then(resultado => {

    console.log(resultado);
    var lista = document.querySelector('#res');
    lista.innerHTML=''; //aqui viene la duda
    resultado.forEach(elemento =>{
      lista.innerHTML += ` 
       <li> ${elemento.name} </li>
      `
    });


    
    
    
    /*resultado.forEach(elemento => {
      
      lista.innerHTML += ` 
       <li> ${elemento.name} </li>
      `
    });
    
 */ });




  /*function traerdatos(){
    console.log('dentro de la funcion');
    const text = {
     
    }
    let obj = JSON.parse(text.responseText);
    
  }

 traerdatos();*/






