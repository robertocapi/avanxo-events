
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ejemplo de estilos CSS en un archivo externo</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="/css/estilos.css" media="screen" />
</head>
 
<body>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="table-responsive">
        <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover">
          <caption class="text-center">An example of a responsive table based on <a href="http://getbootstrap.com/css/#tables-responsive" target="_blank">Bootstrap</a>:</caption>
          <thead>
            <tr>
              <th>Country</th>
              <th>Languages</th>
              <th>Population</th>
              <th>Median Age</th>
              <th>Area (Km²)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Argentina</td>
              <td>Spanish (official), English, Italian, German, French</td>
              <td>41,803,125</td>
              <td>31.3</td>
              <td>2,780,387</td>
            </tr>
            <tr>
              <td>Australia</td>
              <td>English 79%, native and other languages</td>
              <td>23,630,169</td>
              <td>37.3</td>
              <td>7,739,983</td>
            </tr>
            <tr>
              <td>Greece</td>
              <td>Greek 99% (official), English, French</td>
              <td>11,128,404</td>
              <td>43.2</td>
              <td>131,956</td>
            </tr>
            <tr>
              <td>Luxembourg</td>
              <td>Luxermbourgish (national) French, German (both administrative)</td>
              <td>536,761</td>
              <td>39.1</td>
              <td>2,586</td>
            </tr>
            <tr>
              <td>Russia</td>
              <td>Russian, others</td>
              <td>142,467,651</td>
              <td>38.4</td>
              <td>17,076,310</td>
            </tr>
            <tr>
              <td>Sweden</td>
              <td>Swedish, small Sami- and Finnish-speaking minorities</td>
              <td>9,631,261</td>
              <td>41.1</td>
              <td>449,954</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="5" class="text-center">Data retrieved from <a href="http://www.infoplease.com/ipa/A0855611.html" target="_blank">infoplease</a> and <a href="http://www.worldometers.info/world-population/population-by-country/" target="_blank">worldometers</a>.</td>
            </tr>
          </tfoot>
        </table>
      </div><!--end of .table-responsive-->
    </div>
  </div>
</div>

<p class="p">Demo by George Martsoukos. <a href="http://www.sitepoint.com/responsive-data-tables-comprehensive-list-solutions" target="_blank">See article</a>.</p>
</body>
</html>
