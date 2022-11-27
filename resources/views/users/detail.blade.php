<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>User Detail: {{ $user-> user_full}}</h1>
    <ul class="list-group">
        <li class="list-group-item">ID: {{ $user->users_id }} </li>
        <li class="list-group-item">Full Name: {{ $user->user_full }} </li>
        <li class="list-group-item">Email: {{ $user->user_mail }} </li>
        <li class="list-group-item">
            @if($user -> user_level == 1)  
            <span> Admin </span>
            @else
            <span > Member </span>
            @endif
        </li>
        <li class="list-group-item">Sua / xoa </li>


    </ul>

</body>
</html>