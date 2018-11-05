// DIRTY Responsive pricing table JS
function swithBootcamp(li) {
  var pos = $(li).index()+2;
  $("tr").find('td:not(:eq(0))').hide();
  $('td:nth-child('+pos+')').css('display','table-cell');
  $("tr").find('th:not(:eq(0))').hide();
  $('li').removeClass('active');
  $(li).addClass('active');
}

$( "ul" ).on( "click", "li", function() {
    swithBootcamp(this);
    window.location.hash = this.id;
  });
  
  // Initialize the media query
    var mediaQuery = window.matchMedia('(min-width: 640px)');
    
    // Add a listen event
    mediaQuery.addListener(doSomething);
    
    // Function to do something with the media query
    function doSomething(mediaQuery) {    
      if (mediaQuery.matches) {
        $('.sep').attr('colspan',5);
      } else {
        $('.sep').attr('colspan',2);
      }
    }
    
    // On load
    doSomething(mediaQuery);


window.onload = function(){
  swithBootcamp(document.querySelector(window.location.hash == '' ? '#li-4geeks' : window.location.hash));

  //Altura div menu tabla
  let heightDefault = document.querySelectorAll("tr td:nth-child(2)");
  let divMenuTable = document.querySelectorAll(".menu-title");
  
  let z;
  for(z = 0; z < divMenuTable.length; z++){
    divMenuTable[z].style.height = heightDefault[z].offsetHeight;
  }
  
  //Medida donde no agregara altura fija
  var x = window.matchMedia("(min-width: 740px)")
  if(x.matches){
    //Agrega altura fija y fondo gris a los div
    let heightTr = document.querySelectorAll("tr");
    let i;
    let f;
    for(i = 3; i < heightTr.length; i++){
      if(i%2 == 0){
        let altura = heightTr[i].offsetHeight;
        let bg_greyRow = heightTr[i].querySelectorAll(".text-bg-grey");

        for(f = 0; f < 3; f++){
          bg_greyRow[f].style.height = altura;
        }
      }
    }
  } 
}


var ids = [];
function bootcampsSelected(id) {
  var foundId = ids.find(function(element) {
    return element == id;
  });

  if (
    //Cuando se desmarca la opcion, se elimina del array
    (document.getElementById(id).classList.contains('bg-blue-home') || document.getElementById(id).classList.contains('bg-white-home'))
      &&
      foundId
    ){
      
      //Se oculta el texto en rojo
      let b = document.getElementById(id);
      let h = b.getElementsByTagName("p");
      h[0].style.visibility = "hidden";
      
      //Se quita la clase para agregar fondo negro
      document.getElementById(id).classList.toggle('bootcamp-selected');

      //Se encontro en el array y se elimina
      var index = ids.indexOf(id);
      if (index > -1) {
        ids.splice(index, 1);
      }

  }else if (
    //Cuando se marca, y no se encuentra en el array
    (document.getElementById(id).classList.contains('bg-blue-home') || document.getElementById(id).classList.contains('bg-white-home'))
      &&
      !foundId)
  {
    //No se encontro en el array
    
    //Se agrega la clase para fondo negro
    document.getElementById(id).classList.toggle('bootcamp-selected');

    //Valida que existan 2 opciones marcadas para hacer la peticion a la nueva pagina
    ids.push(id);
    if(ids.length > 1){
      window.location.href = "?page=compare&school1=4geeks&school2="+ids[0]+"&school3="+ids[1];
    }

    //Se oculta el texto en rojo
      if(ids.length <= 1){
        let b = document.getElementById(id);
        let h = b.getElementsByTagName("p");
        h[0].style.visibility = "visible";
      }
  }
}

function change(){
  let bootcamp1 = document.getElementById("select1").value;
  let bootcamp2 = document.getElementById("select2").value;
  window.location.href = "/bootcamp-comparison/compare/4geeks-vs-"+bootcamp1+"-vs-"+bootcamp2;
}