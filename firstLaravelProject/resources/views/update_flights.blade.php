<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{ route("storeUpdatedFlight", $data['id']) }}" method="POST" >
    @csrf
    <label for="name">flight name:</label><br>
    <input type="text" id="name" name="name" value="{{ $data['name'] }}"><br>
    <input type="submit" name="add" value="update">
</form> 


</body>
</html>


