<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="welcome" method="get">
        <label for="input">input</label>
        <input type="text" name="input" id="input">
        <input type="submit" value="submit">
    </form>

    @if(isset($message))
    <p>{{$message}}</p>
    @endif
</body>

</html>