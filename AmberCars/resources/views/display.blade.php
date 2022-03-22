<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1> <a href="store">Store</a>

<table id="customers">
    
    <tr>
        <th>Brand</th>
        <th>Vehicle Type</th>
        <th>Vehicle Model</th>
        <th></th>
    </tr>
    {!!$show!!}
</table>

</body>
</html>


