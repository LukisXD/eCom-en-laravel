<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>E-comm Project</title>

</head> 
<body>

{{View::make('header')}}
    @yield('content')
{{View::make('footer')}}
</body>

<style>
    a {
        padding: 1em 1.5em;
        text-decoration: none;
    }

    .custom-login {
        height: 500px;
        padding-top: 100px;
    }
    
    img.slider-img {
        height: 100px !important
    }

    .custom-product {
        height: 600px;
    }

    .slider-text {
        background-color: #35443585 !important;
    }

    .trending-image {
        height: 100px; 
    }

    .trending-item {
        float: left;
        width: 20%;
    }

    .trending-wrapper {
        margin: 30px;
    }

    .detail-img {
        height: 200px;
    }

    .cart-list-divider {
        border-bottom: 1px solid #cccccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

    /* Large desktops and laptops */
        @media (min-width: 1200px) {

    }

    /* Landscape tablets and medium desktops */
        @media (min-width: 992px) and (max-width: 1199px) {

    }

    /* Portrait tablets and small desktops */
        @media (min-width: 768px) and (max-width: 991px) {

    }

    /* Landscape phones and portrait tablets */
        @media (max-width: 767px) {

    }   

    /* Portrait phones and smaller */
        @media (max-width: 480px) {

    }
</style>
</html>