<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Create</title>
</head>
<body>
<h2>Employee Create</h2>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <div style="margin: 10px 0">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </div>

    <div style="margin: 10px 0">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
    </div>

    <div style="margin: 10px 0">
        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>
</html>