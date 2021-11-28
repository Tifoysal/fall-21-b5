<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('/css/website/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{url('/css/website/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/css/website/tooplate-main.css')}}">
    <link rel="stylesheet" href="{{url('/css/website/owl.css')}}">
    <!--
    Tooplate 2114 Pixie
    https://www.tooplate.com/view/2114-pixie
    -->
</head>

<body>


@include('website.fixed.header')


@yield('content')


@include('website.fixed.footer')


<!-- Bootstrap core JavaScript -->
<script src="{{url('/js/website/jquery.min.js')}}"></script>
<script src="{{url('/js/website/bootstrap.bundle.min.js')}}"></script>


<!-- Additional Scripts -->
<script src="{{url('js/website/custom.js')}}"></script>
<script src="{{url('js/website/owl.js')}}"></script>


<script language = "text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
        if(! cleared[t.id]){                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value='';         // with more chance of typos
            t.style.color='#fff';
        }
    }
</script>


</body>

</html>
