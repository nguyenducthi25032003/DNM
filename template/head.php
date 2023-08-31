<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/e2ccdc7f3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        .hover3:hover img {
            transition: all 0.2s;
            transform: scale(1.1, 1.1);
        }
        .hover3{
            overflow: hidden;
        }
        ul li{
            position: relative;
        }
        ul li ul{
            /* position: absolute; */
            display: none;
        }
        ul li:hover ul{
            display: block;
        }
    </style>
</head>
