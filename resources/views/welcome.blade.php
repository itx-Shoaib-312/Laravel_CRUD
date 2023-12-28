<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Styles -->
    <style>

    </style>
</head>

<body class="antialiased">



    <!-- Navbar on small screens -->

    <div class="w3-content w3-padding-large w3-margin-top" id="portfolio">



        <!-- Contact -->
        <div class="w3-light-grey w3-padding-large w3-padding-32 w3-margin-top" id="contact">
            <a href="{{ route('Read') }}"type="button" class="w3-button w3-block w3-dark-grey">
                Data
            </a>


            <form action="{{ route('Form') }}" method="GET" target="_blank">
                <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-blue w3-center">
                    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">Welcome To Laravel</h1>
                    <h5 class="w3-hide-large" style="brown-space:nowrap">CRUD Operation</h5>
                    <h3 class="w3-hide-medium w3-hide-small">By Shoaib</h3>
                    <button type="submit" class="w3-button w3-block w3-dark-grey">Form</button>
                </div>
            </form>
            <br>
        </div>

        <!-- End page content -->
    </div>



</body>

</html>
