<!DOCTYPE html>
<html>
<head>
    <style class="cp-pen-styles">
        @import url(https://fonts.googleapis.com/css?family=Raleway:400,700);

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            font-family: 'Raleway', sans-serif;
            background: #E9F8DF;
            -webkit-font-smoothing: antialiased;
        }

        :focus {
            outline: 0;
        }

        #wrapper {
            -webkit-perspective: 500px;
            perspective: 500px;
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        h1 {
            color: #416171;
            font-size: 43px;
            margin: 0;
        }

        h2 {
            color: #349E97;
            margin: 0;
        }

        form {
            margin: 35px 0;
        }

        #inputs {
            height: 127px;
            -webkit-transition: height .5s ease-in-out;
            transition: height .5s ease-in-out;
        }

        #inputs div {
            height: 41px;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-transition: -webkit-transform .5s ease-in-out;
            transition: -webkit-transform .5s ease-in-out;
            transition: transform .5s ease-in-out;
            transition: transform .5s ease-in-out, -webkit-transform .5s ease-in-out;
        }

        #inputs > div > div > div {
            -webkit-transform: rotateX(0deg);
            transform: rotateX(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        #inputs > div > div > div input:nth-child(2),
        #inputs > div > div > div > div input:nth-child(2) {
            -webkit-transform: translateZ(-1px) rotateX(180deg);
            transform: translateZ(-1px) rotateX(180deg);
        }

        #inputs > div > div > div > div {
            -webkit-transform: translateY(-41px) rotateX(0deg);
            transform: translateY(-41px) rotateX(0deg);
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        input {
            background: #FFFEFC;
            border: 0;
            box-sizing: border-box;
            display: block;
            font-family: Raleway, sans-serif;
            font-weight: 600;
            font-size: 12px;
            margin: 0 auto;
            padding: 13px;
            text-transform: uppercase;
            -webkit-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            width: 300px;
            -webkit-transform-origin: 0 0;
            transform-origin: 0 0;
            -webkit-font-smoothing: antialiased;
        }

        input:hover {
            background: #f3f3f3;
        }

        input:focus {
            background: #EAEAEA;
        }

        input[type=submit] {
            background: #43434C;
            color: #FFFEFC;
            cursor: pointer;
        }

        input[type=radio] {
            display: none;
        }

        input:checked[value=reset] ~ #inputs {
            height: 84px;
        }

        input:checked[value=reset] ~ #labels {
            margin-top: -10px;
        }

        input:checked[value=reset] ~ #inputs div > div > div {
            -webkit-transform: rotateX(180deg);
            transform: rotateX(180deg);
        }

        input:checked[value=reset] ~ #inputs div > div > div > div {
            -webkit-transform: translateY(-41px) rotateX(180deg);
            transform: translateY(-41px) rotateX(180deg);
        }

        input:checked[value=reset] ~ #labels label[for=reset],
        input:checked[value=reset] ~ #labels label[for=register],
        input:checked[value=reset] ~ #labels label[for=login]:first-child {
            -webkit-transition: opacity .5s;
            transition: opacity .5s;
            opacity: 0;
        }

        input:checked[value=register] ~ #inputs {
            height: 170px;
        }

        input:checked[value=register] ~ #labels {
            margin-top: 30px;
        }

        input:checked[value=register] ~ #labels label[for=reset],
        input:checked[value=register] ~ #labels label[for=register],
        input:checked[value=register] ~ #labels label[for=login]:nth-child(3) {
            -webkit-transition: opacity .5s;
            transition: opacity .5s;
            opacity: 0;
        }

        input:checked[value=login] ~ #labels {
            margin-top: 11px;
        }

        input:checked[value=login] ~ #inputs div > div > div > div {
            -webkit-transform: translateY(-41px) rotateX(180deg);
            transform: translateY(-41px) rotateX(180deg);
        }

        input:checked[value=login] ~ #labels label[for=login] {
            -webkit-transition: opacity .5s;
            transition: opacity .5s;
            opacity: 0;
        }

        #labels {
            -webkit-transition: margin .5s ease-in-out;
            transition: margin .5s ease-in-out;
        }

        label {
            display: block;
            font-size: 14px;
            color: #43434C;
            margin-bottom: 5px;
            font-weight: 600;
            height: 16px;
            -webkit-transition: opacity 1s .3s;
            transition: opacity 1s .3s;
            overflow: hidden;
        }

        label span {
            cursor: pointer;
            color: #349E97;
        }

        #hint {
            position: absolute;
            bottom: 20px;
            opacity: .2;
            left: 50%;
            margin: 0 -62px;
            font-weight: 600;
        }
    </style>
</head>
<body>
<div id="wrapper">

    @forelse($errors as $error)
        <b>{{$error}}</b>
        <br>
    @empty
    @endforelse

    <h1>Nazov webu @auth <span class="fa fa-edit"></span>  @endauth</h1>
    <h2>Admin panel</h2>
    <form method="post" action="{{route("acp.login")}}">
        {{ csrf_field() }}

            <input type="email" placeholder="Email">
            <input type="password" placeholder="heslo">
            <input type="submit">

    </form>
</div>
</body>
</html>