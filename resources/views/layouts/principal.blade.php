<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Bin, Sistema de Información Centralizado y Gestión de procesos internos de Blanco y Negro Especiales" />
    {{--Favicon--}}
    <link rel="shortcut icon" href="{{ asset('Imagen2.ico') }}">
    <meta name="author" content="Paula A. Ortiz" />
   @yield('add_css', '')
   {{-- CSS base del sistema --}}
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
   {!! Html::style('assets/css/bootstrap.css') !!}
    {{-- CSS personalizado --}}
   {!! Html::style('assets/css/principal.css') !!}
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <link media="all" type="text/css" rel="stylesheet" href="http://bootsnipp.com/css/fullscreen.css">
        <title>Blanco y negro - @yield('titulo','Inicio')</title>
</head>
    <body>
 
        <div class="container">
            @yield('content')
        </div>
  

        @yield('add_script', '')
        {{-- JS propio --}}

       {{--js externos--}}
       {!!Html::script('assets/js/bootstrap.min.js') !!}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-59774003-2', 'auto');
            ga('send', 'pageview');
        </script>
         <script type="text/javascript">
            (function($) { 
                $('#theme_chooser').change(function(){
                    whichCSS = $(this).val();
                    document.getElementById('snippet-preview').contentWindow.changeCSS(whichCSS);
                });
            })(jQuery);
    </script>
    </body>
</html>