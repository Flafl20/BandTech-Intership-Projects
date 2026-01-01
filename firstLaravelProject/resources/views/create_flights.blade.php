<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route("storeFlights") }}" method="POST" >
    @csrf
    <label for="name">flight name:</label><br>
    <input type="text" id="name" name="name" value="mexico"><br>
    <input type="submit" name="add" value="add">
</form> 


</body>
</html>

