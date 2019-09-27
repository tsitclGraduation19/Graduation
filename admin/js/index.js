var element = document.getElementById('crud');
element.addEventListener('change', handleChange);

function handleChange(event) {
  var value = element.value;

  crud(value);
  var output = '&#91;データの' + value + '&#93;';
  document.getElementById('title').innerHTML = output;
}

function crud(transaction) {
  switch (transaction) {
    case "追加":
      var dispCompe = "<?php require('dataAdd/compeAdd.php')?>";
      document.getElementById('Compe').innerHTML = dispCompe;

      var dispAthlete = "<?php require('dataAdd/AthleteAdd.php')?>";
      document.getElementById('Athlete').innerHTML = dispAthlete;

      var dispFacilitie = "<?php require('dataAdd/FacilitieAdd.php')?>";
      document.getElementById('Facilitie').innerHTML = dispFacilitie;
      break;

    case "検索":
      var dispCompe = "<?php require('dataSearch/compeSearch.php')?>";
      document.getElementById('Compe').innerHTML = dispCompe;

      var dispAthlete = "<?php require('dataSearch/AthleteSearch.php')?>";
      document.getElementById('Athlete').innerHTML = dispAthlete;

      var dispFacilitie = "<?php require('dataSearch/FacilitieSearch.php')?>";
      document.getElementById('Facilitie').innerHTML = dispFacilitie;
      break;

    case "変更":
      var dispCompe = "<?php require('dataChange/compeChange.php')?>";
      document.getElementById('Compe').innerHTML = dispCompe;

      var dispAthlete = "<?php require('dataChange/AthleteChange.php')?>";
      document.getElementById('Athlete').innerHTML = dispAthlete;

      var dispFacilitie = "<?php require('dataChange/FacilitieChange.php')?>";
      document.getElementById('Facilitie').innerHTML = dispFacilitie;
      break;

    case "削除":
      var dispCompe = "<?php require('dataDelete/compeDelete.php')?>";
      document.getElementById('Compe').innerHTML = dispCompe;

      var dispAthlete = "<?php require('dataDelete/AthleteDelete.php')?>";
      document.getElementById('Athlete').innerHTML = dispAthlete;

      var dispFacilitie = "<?php require('dataDelete/FacilitieDelete.php')?>";
      document.getElementById('Facilitie').innerHTML = dispFacilitie;
      break;

    default:
      var dispCompe = "<?php require('dataAdd/compeAdd.php')?>";
      document.getElementById('Compe').innerHTML = dispCompe;

      var dispAthlete = "<?php require('dataAdd/AthleteAdd.php')?>";
      document.getElementById('Athlete').innerHTML = dispAthlete;

      var dispFacilitie = "<?php require('dataAdd/FacilitieAdd.php')?>";
      document.getElementById('Facilitie').innerHTML = dispFacilitie;
      break;
  }
}
