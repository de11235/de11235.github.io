<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd$
<html>
<head>
<style>

table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
}

th, td {
  padding: 0.5em;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

</style>
</head>

<body>

 <?php
     echo "Hostname:  ";
     echo gethostname();
     echo "<br>Date/Time:  ";
     echo date("l Y-M-j g:i a T");
     echo "<br>IP Address:  ";
     echo $_SERVER['SERVER_ADDR'];
    echo "<br><br>"
  ?>

<table>
  <tr>
    <th rowspan="2"></th>
    <th rowspan="2"><p style="font-size:3em">Current</p></th>
    <th colspan="2"><p style="font-size:2em">Last 24 hrs</p></th>
  </tr>
  <tr>
    <th style="text-align:center"><p style="font-size:2em">Min</p></th>
    <th style="text-align:center"><p style="font-size:2em">Max</p></th>
  </tr>

<?php include '../tph_stats.html'; ?>

</table>

<p style="text-align:center; font-size:3em"> 24 hour Temperature</p>
        <img src="../24hrtemperature.png" alt="24hrTemp" />
<br>

<p style="text-align:center; font-size:3em"> 24 hour Pressure</p>
        <img src="../24hrpressure.png" alt="24hrPressure" />
<br>

<p style="text-align:center; font-size:3em"> 24 hour Humidity</p>
        <img src="../24hrhumidity.png" alt="24hrHumidity" />
<br>

</body>
</html>

