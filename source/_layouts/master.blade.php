<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>@yield('title')</title>
        <meta name="description" content="An elegantly crafted UI Kit for CSUN branded prototypes &amp; applications">
        <link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon">

        <!-- FONT LIBS -->
        <script>try{Typekit.load();}catch(e){}</script>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
        <link rel="stylesheet" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
    </head>
    <body>
        @include('_partials.header')
        @yield('body')
        @include('_partials.csun-footer')
        @include('_partials.metalab-footer')
        <!-- SCRIPTS -->
        <script src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
        <script src="//use.typekit.net/gfb2mjm.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', '{{ $google_analytics }}', 'auto');
          ga('send', 'pageview');

          // $(function() {
          //   var title = $('title').text();
          //   var pagePathName=window.location.pathname;
          //   pagePathName=pagePathName.substring(pagePathName.lastIndexOf("/") + 1);
          //   if (title.indexOf(pagePathName >= 0)){
          //     console.log('true');
          //   } else {
          //     console.log('false');
          //   }
          // });
        </script>
    </body>
</html>
