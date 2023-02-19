<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Farm index page</h4>
    <h5><u>tools list</u> </h5>
    <table>
        <thead>
            <th>s/no</th>
            <th>name</th>
            <th>quantity</th>
        </thead>
    @foreach ($tools as $tool)
    
        <tbody>
            <tr>
                <td>{{$tool['id']}}</td>
                <td>{{$tool['name']}}</td>
                <td>{{$tool['quantity']}}</td>
            </tr>
        </tbody>
   @endforeach
</table>
</body>
</html>