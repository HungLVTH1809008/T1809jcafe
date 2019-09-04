<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>


    <title>

        @if(isset($title))

            {{$title}}

        @else

            quan ly Category

        @endif

    </title>



</head>

<body>

<div class="col-xs-6 col-xs-offset-3">

    @yield("main_content")

</div>

@yield("popup")

</body>

</html>