<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>flight's Table</h2>

<table>
  <tr>
    <th>name</th>
    <th>date</th>
  </tr>
  @if (@isset($data) && !@empty($data))
  
  @foreach ( $data as $info)
    <tr>
      <th>{{$info->name}}</th>
      <th>{{$info->created_at}}</th>
    </tr>
  @endforeach

  @endif
</table>

</body>
</html>
