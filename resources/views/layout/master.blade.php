<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/cTheme.css")}}">
    <title>Názov webu</title>
</head>
<body>
@include("partials.header")
@include("partials.slider")

@include("partials.service")


<script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>

<script>
    /* SCROLL FIXED NAV */
    $(document).ready(function(){

        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('#nav').addClass("fixed-top");
                } else {
                    $('#nav').removeClass("fixed-top");
                }
            });
        });

    });

</script>
</body>
</html>