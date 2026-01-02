<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>createDrug</title>
</head>
<body>
    <form style="display: flex; flex-direction: column; gap:4px;" action="{{ route("drugs.update", $data['id'])  }}" method="POST">
        @csrf
        @method('PATCH')
        <label>
            drug's name
            <input type="text" name="name" id="name" value="{{ $data->name }}">
        </label>
        <label>
            drug's dosage
            <input type="text" name="dosage" id="dosage" value="{{ $data->dosage }}">
        </label>
        <label>
            drug's company
            <input type="text" name="company" id="company" value="{{ $data->company }}">
        </label>
        <label>
            expire Date
            <input type="date" name="expire" id="expire" value="{{ $data->expire_date }}">
        </label>
        <input type="submit" value="add">
    </form>
@error('name') <span>{{ $message }}</span> @enderror
@error('dosage') <span>{{ $message }}</span> @enderror
@error('company') <span>{{ $message }}</span> @enderror
@error('expire_date') <span>{{ $message }}</span> @enderror

</body>
</html>