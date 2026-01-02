<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>createDrug</title>
</head>
<body>
    <form style="display: flex; flex-direction: column; gap:4px;" action="{{ route("drugs.store")  }}" method="POST">
        @csrf
        <label>
            drug's name
            <input type="text" name="name" id="name">
        </label>
        <label>
            drug's dosage
            <input type="text" name="dosage" id="dosage">
        </label>
        <label>
            drug's company
            <input type="text" name="company" id="company">
        </label>
        <label>
            expire Date
            <input type="date" name="expire" id="expire">
        </label>
        <input type="submit" value="add">
    </form>
@error('name') <span>{{ $message }}</span> @enderror
@error('dosage') <span>{{ $message }}</span> @enderror
@error('company') <span>{{ $message }}</span> @enderror
@error('expire_date') <span>{{ $message }}</span> @enderror

</body>
</html>