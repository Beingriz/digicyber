<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32"
        href=" {{ URL::asset('/publicBootstrap_Layoutimg/favicon_io/favicon-32x32.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cyberpe</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href=" {{ URL::asset('/public/bootstrap4/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ URL::asset('/public/bootstrap4/css/mdb.min.css') }}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{ URL::asset('/public/bootstrap4/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/publicBootstrap_Layoutcss/600.css') }}" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <!-- Start your project here-->

    @yield('content')



    <!-- Start your project here-->
    @livewireScripts
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="{{ URL::asset('public/bootstrap4/js/jquery.min.js') }}/">
    </script>
    <!-- Bootstrap tooltips -->
    <script src="{{ URL::asset('/public/bootstrap4/js/popper.min.js') }}">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ URL::asset('/public/bootsrap4/js/bootstrap.min.js') }}">
    </script>
    <!-- MDB core JavaScript -->
    <script src="{{ URL::asset('/public/bootstrap4/js/mdb.min.js') }}">
    </script>
    <!-- <script src="{{ URL::asset('/publicBootstrap_Layoutjs/js/js.js') }}">
    </script>
    <script src="{{ URL::asset('/publicBootstrap_Layoutjs/js/javascript.js') }}."> -->
    </script>
    <script type="text/javascript">
    var a = document.getElementById('disc-50');
    a.onclick = function() {
        Clipboard_CopyTo("T9TTVSQB");
        var div = document.getElementById('code-success');
        div.style.display = 'block';
        setTimeout(function() {
            document.getElementById('code-success').style.display = 'none';
        }, 900);
    };

    function Clipboard_CopyTo(value) {
        var tempInput = document.createElement("input");
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
    }
    </script>
</body>

</html>
