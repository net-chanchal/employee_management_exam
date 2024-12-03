<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Detail</title>
</head>
<body>
<h2>Employee Detail</h2>

<p><b>ID: </b>{{ $employee->id }}</p>
<p><b>Name: </b>{{ $employee->name }}</p>
<p><b>Email: </b>{{ $employee->email }}</p>
<p><b>Age: </b>{{ $employee->age }}</p>
</body>
</html>