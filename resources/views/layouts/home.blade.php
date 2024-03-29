<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Developerazad</title>

    <!-- Global stylesheets -->
    <link href="{{ asset('profile/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{ asset('profile/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('profile/css/devicons/css/devicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('profile/css/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('profile/css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Raleway', sans-serif;
        }
    </style>
</head>

<body id="page-top">

    @include('layouts.navBar')
    <div class="container-fluid p-0">

        <!--====================================================
                            ABOUT
        ======================================================-->
        @include('layouts.about')

        <!--====================================================
                            EXPERIENCE
        ======================================================-->
        @include('layouts.experience')

        <!--====================================================
                            PORTFOLIO
        ======================================================-->
        @include('layouts.portfolio')


        <!--====================================================
                            EDUCATION
        ======================================================-->
        @include('layouts.education')
        <!--====================================================
                            SKILLS
        ======================================================-->
        @include('layouts.skills')

        <!--====================================================
                             AWARDS
        ======================================================-->
        @include('layouts.awards')

        <!--====================================================
                              CONTACT
        ======================================================-->
        @include('layouts.contact')

        @include('layouts.footer')


    </div>

<!--====================================================
                    PORTFOLIO MODALS
======================================================-->
@include('layouts.modalPortfolio')

<!-- Global javascript -->
<script src="{{ asset('profile/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('profile/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('profile/js/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('profile/js/counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('profile/js/counter/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('profile/js/custom.js') }}"></script>
<script>
    $(document).ready(function(){

        $(".filter-b").click(function(){
            var value = $(this).attr('data-filter');
            if(value == "all")
            {
                $('.filter').show('1000');
            }
            else
            {
                $(".filter").not('.'+value).hide('3000');
                $('.filter').filter('.'+value).show('3000');
            }
        });

        if ($(".filter-b").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");
    });

    // SKILLS
    $(function () {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });

    });
</script>
</body>

</html>