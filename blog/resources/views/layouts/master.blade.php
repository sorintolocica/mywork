<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimeAZU Fansub</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/posts.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/list.css')}}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <!-- JQUERY -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js' type='text/javascript'></script>

    <script type='text/javascript'>
        (function($) {
            $(document).ready(function(){
                $('ul.xo-tab-links li').click(function(){
                    var tab_id = $(this).attr('data-tab');

                    // Make the old tab inactive.
                    $('ul.xo-tab-links li').removeClass('current');
                    $('.xo-tab-content').removeClass('current');

                    // Make the clicked tab active.
                    $(this).addClass('current');
                    $("#"+tab_id).addClass('current');
                })
            })
        })(jQuery);
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<div class="header">
  @include('partials.header')
</div>
<div class="container">
@yield('content')
</div>


<footer class="footer">
@include('partials.footer')
</footer>

<!-- JS -->
<script src="{{asset('https://code.jquery.com/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.anime-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: true, // adaugă autoplay
            autoplayTimeout: 5000, // setează timeout-ul pentru autoplay la 5 secunde
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            },
            navText: [ // adaugă butoanele prev și next
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ]
        });
    });
</script>
<script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
