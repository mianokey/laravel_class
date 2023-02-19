<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($students as $student)

        <h4>{{ $student->name }}</h4>
        <h5>{{ $student->email }}</h5>
        <h6>{{ $student->contact }}</h6>
        <hr>
        
    @endforeach
</body>
</html>