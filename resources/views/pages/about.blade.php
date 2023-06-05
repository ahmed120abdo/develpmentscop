<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
</head>
<body>
    <hr>


<p style="text-align: center;">About {{$name = $data["name"] ." " . $last = $data["last"]}}</p>


    <hr>
    <p>You can contact me at {{$data['email']}}</p>
</body>
</html>