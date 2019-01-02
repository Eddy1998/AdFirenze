// Este ejemplo muestra un formulario de dirección, utilizando la función de autocompletar
// de Google places API para ayudar a los usuarios rellenar la información.

var placeSearch, autocomplete, autocomplete_textarea;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initialize() {

  // Cree el objeto de autocompletado, restringiendo la búsqueda
  autocomplete = new google.maps.places.Autocomplete(
   (document.getElementById('indirizzo')),
    { types: ['geocode'] });
  // Cuando el usuario selecciona una dirección en el menú desplegable,
  // rellena los campos de dirección en el formulario.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
  fillInAddress();

  });


  autocomplete_input = new google.maps.places.Autocomplete((document.getElementById('indirizzo')),
    { types: ['geocode'] }
  );
  google.maps.event.addListener(autocomplete_input, 'place_changed', function() {
  fillInAddress_textarea();
  });
}

function fillInAddress_textarea(){
  var place = autocomplete_input.getPlace();
  console.log( place.address_components );
  console.log( place.name);
  //console.log(place.)
  console.log( JSON.stringify(place) );

  //$("#indirizzo").val("");

  var via = place.address_components[1].long_name;
  var numero = place.address_components[0].long_name;
  var cap = place.address_components[7].long_name;
  var citta = place.address_components[2].long_name;
  var completo = via+" "+numero;
   $("#indirizzo").val(completo);
  $("#cap").val(cap);
  $("#citta").val(citta);
     // place.address_components[i][componentForm[addressType]]
}


function fillInAddress() {
  // Obtener los detalles de lugar el objeto de autocompletado.
  var place = autocomplete.getPlace();
  console.log( JSON.stringify(place) );
  for (var component in componentForm) {
  //document.getElementById(component).value = null;
  document.getElementById(component).disabled = false;

  }

  // Recibe cada componente de la dirección de los lugares más detalles
  // y llena el campo correspondiente en el formulario.
  for (var i = 0; i < place.address_components.length; i++) {
  var addressType = place.address_components[i].types[0];
  if (componentForm[addressType]) {

    //console.log(componentForm.stree_number);
    document.getElementById(addressType).value = val;
  }
   var val = place.address_components[i][componentForm[addressType]];

   //console.log(val);
  }
  document.getElementById(indirizzo).value = null;
}



//ubicación geográfica del usuario,

function geolocate() {
 /* if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    var geolocation = new google.maps.LatLng(
      position.coords.latitude, position.coords.longitude);
    var circle = new google.maps.Circle({
    center: geolocation,
    radius: position.coords.accuracy
    });
    autocomplete.setBounds(circle.getBounds());
    autocomplete_textarea.setBounds(circle.getBounds());
  });
  }*/
  //alert("ciao");
}
