<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('sections.header')


    <div class="jumbotron-box">
        <img  src="{{asset("images/jumbotron.jpg")}}">
    </div>

    <div class="background">
        <!-- titolo sezione principale -->
        <div class="container comics-title">
            <span> CURRENT SERIES</span>

            <div class="contenitore-comics d-flex flex-wrap align-items-ceter justify-content-between">
                @include('sections.mainComics')
            </div>

        </div>
        
        <div class="d-flex align-items-center justify-content-center">
            <button type="button" class="btn btn-primary">Load More</button>
        </div>
    </div>



</body>
</html>