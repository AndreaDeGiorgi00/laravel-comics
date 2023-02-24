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
        
        <div class="d-flex align-items-center justify-content-center mb-5 mt-5">
            <button type="button" class="btn btn-primary">Load More</button>
        </div>


        <div class="banner d-flex align-items-center">
            <div class="container d-flex justify-content-between align-items-center">
                <div >
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}">
                    <span> DIGITAL COMICS </span>
                </div>
                <div >
                    <img src="{{asset('images/buy-comics-merchandise.png')}}">
                    <span>DC MERCHANDISE </span>
                </div>
                <div >
                    <img src="{{asset('images/buy-comics-shop-locator.png')}}">
                    <span> SUBSCRIPTION </span>
                </div>
                <div >
                    <img src="{{asset('images/buy-comics-subscriptions.png')}}">
                    <span>COMICS SHOP LOCATOR </span>
                </div>
                <div >
                    <img src="{{asset('images/buy-dc-power-visa.svg')}}">
                    <span>DC POWER VISA </span>
                </div>
            </div>
        </div>
    </div>



</body>
</html>