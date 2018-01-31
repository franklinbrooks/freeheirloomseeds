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
        <title>FreeHeirloomSeeds.org - {{$title}} </title>
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
            input[type="image"] {
                cursor: pointer;
            }
            input[type="text"], #email, #subject {
                border: 2px solid green;
                background-color: #e8f5e9;
                padding: 0px 0px 0px 10px;
            }
            textarea {
                height: 100px;
                padding: 10px 0px 0px 10px;
                background-color: #e8f5e9;
                border: 2px solid green;
            }
            input[type="submit"] {
                padding: 7px;
                color: white;
                border: 2px solid green;
                background-color: #00c853;
            }
            .promo-caption {
                font-size: 1.7rem;
                font-weight: 500;
                margin-top: 5px;
                margin-bottom: 0;
            }
            .myCard {
                min-height: 312px;
                margin: 25px 0px 25px 0px;
            }
            blockquote{
              margin: 20px 0;
              padding-left: 1.5rem;
              border-left: 5px solid green;
            }
            #imageBackground {
                position: relative;
                background-image: url("/freeheirloomseeds/public/images/Seed_germination.png");
                background-position: right;
                background-size: cover;
                background-repeat: no-repeat;
                height: 500px;
                margin-bottom: 0;
            }
            #mytextbox {
                position: absolute;
                padding: 20px;
                background: rgba(255, 255, 255, 0.3);
                color: white;
                text-align: center;
            }
            .distribution {
                height: 400px;
                background-image: url("/freeheirloomseeds/public/images/soybeans.jpg");
                background-position: center left;
                background-size: cover;
                background-repeat: no-repeat;
            }
            .dist {
                margin: 0 auto;
                padding: 20px;
                background: rgba(129, 199, 138, 0.9);
                color: white;
                text-align: center;
            }
            #seeds {
                position: relative;
                background-image: url("/freeheirloomseeds/public/images/seeds.jpg");
                height: 400px;
            }
            .seedsText {
                position: absolute;
                background:  rgba(255,255,255, 0.95);
                padding: 30px;
                color: green;
                font-family: Roboto;
            }
            #volunteerBackground {
                position: relative;
                background-image: url("/freeheirloomseeds/public/images/volunteer.jpg");
                background-position: right;
                background-size: cover;
                background-repeat: no-repeat;
                height: 500px;
            }
            #volunteerText {
                margin: 0 auto;
                color: white;
                text-align: center;
            }
            .seedy {
                background-image: url("/freeheirloomseeds/public/images/seeds.jpg");
            }
            #noBottom {
                margin-bottom: 0;
            }
        </style>
    </head>
