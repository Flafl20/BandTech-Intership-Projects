<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
{{-- @if ($errors->any())
    <div>
        <ul>
            @foreach ( $errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
<form action="{{ route("storeFlights") }}" method="POST" >
    @csrf
    <label for="name">flight name:</label><br>
    <input type="text" id="name" name="name" value="mexico"><br>
    @error('name')
        <span>this field is required</span>
    @enderror
    <input type="submit" name="add" value="add">
</form> 


</body>
</html>

