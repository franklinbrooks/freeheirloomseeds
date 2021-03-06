<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="description" CONTENT="FreeHeirloomSeeds.org is a community resource connecting people with the means to produce our own food.
        We offer Free Heirloom Seeds to individuals, organic gardening & sustainability resources, as well as a community hub for people trying to preserve
        natural eco diversity & life on earth.">
        <META NAME="keywords" CONTENT="free heirloom seeds, free seed, free vegetable seeds, seeds, organic gardening, organic seed, free seed distribution">
        <META NAME="robot" CONTENT="index,follow">
        <META NAME="author" CONTENT="Michael King">
        <title>FreeHeirloomSeeds.org - 500 Error </title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                margin: 0;
            }
            .flashMessage {
                display: block;
                width: 100%;
                color: white;
                background-color: green;
                border-radius: 5px;
                border: 2px solid #388e3c;
                text-align: center;
                margin: 0 auto;
                padding: 5px 0px 5px;
            }

            .flex-center {
                /*align-items: center;*/
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .content > a {
                color: #636b6f;
                text-decoration: none;
            }

            .links > ul > li > a {
                font-family: Raleway, sans-serif;
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #nav-mobile {
                display: flex;
                justify-content: space-around;
            }
        </style>
    </head>
<body>
  @include('header')
  <div class="container">
    <h2>Error - 500</h2>
    <hr />
  </div>
  @include('footer')
</body>
