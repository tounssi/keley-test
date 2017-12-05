filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Montrer les éléments filtrés
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Cacher les éléments non sélectionnés
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1); 
    }
  }
  element.className = arr1.join(" ");
}


// Barre de Recherche
$('#searchterm').keyup(function(e){
  const query = $('#searchterm').val();
  $.ajax({
    dataType: 'json',
    url: 'http://en.wikipedia.org/w/api.php?callback=?',
    data: {srsearch: query, action: 'query', list: 'search', format: 'json'},
    success: (data) => {
      $('#results').empty();
      $.each(data.query.search, (i, item) => {
        $('#results').append(`<div><a href='http://en.wikipedia.org/wiki/${encodeURIComponent(item.title)}'>${item.title}</a>${item.snippet}</div>`);
      });
    }
  });
});