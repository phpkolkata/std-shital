<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="{{asset('css/mystyle.css')}}" rel="stylesheet"/>
</head>
<body>
    <h1>Title: {{$data['title']}}</h1>
    <?php
    // if($data['age'] <=18){
    //     echo "you are not eligible";
    // }
    // else{
    //     echo "you are eligible";
    // }
    ?>

    @if($data['age']<=18)
    <div>you are not eligible</div>
    @else
    <div>eligible</div>
    @endif

</body>
</html>
