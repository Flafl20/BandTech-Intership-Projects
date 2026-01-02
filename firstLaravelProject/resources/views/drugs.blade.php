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
  <h2>Drugs Table</h2>
  <a href="{{ route("drugs.create") }}" class="btn" style="padding: 10px; align-self: center; font-size: 25px;color: #ffffff; background-color:#20479c; border-radius: 10px">add new</a>
</div>
<table>
  <tr>
    <th>name</th>
    <th>dosage</th>
    <th>company</th>
    <th>expire Date</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
@if (@isset($data) && !@empty($data))
  
    @foreach ( $data as $drug)
    <tr>
        <td>{{$drug->name}}</th>
        <td>{{$drug->dosage}}</th>
        <td>{{$drug->company}}</td>
        <td>{{$drug->expire_date}}</td>
        <td><a href="{{ route("drugs.edit", $drug->id) }}">EDIT</a></td>
        @if ($drug->deleted_at == null)
        <td style="background-color: yellow"><a href="{{ route("drugs.softDeletes", $drug->id)  }}">delete partially</a></td>
        @else
        <td style="background-color: red">
          <form method="POST" action="{{ route("drugs.destroy", $drug->id) }}">
            @csrf
            @method("DELETE")
            <button style="background: none; font-size: 16px; color: blue; border: none" type="submit">delete permanently</button>
          </form>
        </td>
        @endif
        @if ($drug->deleted_at != null)
          <td><a href="{{route("drugs.restore",$drug->id)}}">restore</a></td>
        @endif
    </tr>
    @endforeach

@endif
</table>
</body>
</html>

