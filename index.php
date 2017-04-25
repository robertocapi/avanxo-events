<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eventos la empresa ABC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Listado de eventos</h2>
  <p>Aqui podra visualizar el listado de eventos por categoria de la empresa ABC.</p>
  <table class="table" id="myTable">
    <thead>
      <tr>
        <th onclick="sortTable(1)">Lugar</th>
        <th >Dirección</th>
        <th onclick="sortTable(0)">fecha de inicio</th>
         <th onclick="sortTable(1)">fecha de fin</th>
              <th onclick="sortTable(1)">tipo</th>
              <th onclick="sortTable(1)">Categoria</th>
              <th onclick="sortTable(1)">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Default</td>
        <td>Defaultson</td>
        <td>13/12/2017</td>
          <td>07/12/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
       <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>      
      <tr class="success">
        <td>Success</td>
        <td>Doe</td>
      <td>13/12/2017</td>
          <td>07/12/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
           <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>
      <tr class="danger">
        <td>Danger</td>
        <td>Moe</td>
       <td>13/09/2017</td>
          <td>07/09/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
           <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>
      <tr class="info">
        <td>Info</td>
        <td>Dooley</td>
        <td>13/11/2017</td>
          <td>07/11/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
           <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>
      <tr class="warning">
        <td>Warning</td>
        <td>Refs</td>
      <td>13/10/2017</td>
          <td>07/10/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
           <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>
      <tr class="active">
        <td>Active</td>
        <td>Activeson</td>
      <td>13/06/2017</td>
          <td>07/06/2017</td>
        <td>Defaultson</td>
        <td>def@somemail.com</td>
           <td> <button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<button type="button" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
</button>
</td>
      </tr>
    </tbody>
  </table>
</div>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>


</body>
</html>
