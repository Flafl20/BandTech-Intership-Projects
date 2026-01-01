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
<div style="display: flex; justify-content: space-around">
  <h2>flight's Table</h2>
  <a href="{{ route("create_flights") }}" class="btn" style="padding: 10px; align-self: center; font-size: 25px;color: #ffffff; background-color:#20479c; border-radius: 10px">add new</a>
</div>
<table>
  <tr>
    <th>name</th>
    <th>date</th>
    <th></th>
    <th></th>
  </tr>
  @if (@isset($data) && !@empty($data))
  
  @foreach ( $data as $info)
    <tr>
      <td>{{$info->name}}</th>
      <td>{{$info->created_at}}</th>
      <td><a href="{{ route("update_flights", $info->id) }}">EDIT</a></td>
      <td><a href="{{ route("delete_flight", $info->id)  }}">delete</a></td>
    </tr>
  @endforeach

  @endif
</table>
{{ $data->links() }}
</body>
</html>
