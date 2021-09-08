<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
      @include('partials.header')
			<main>
        @include('partials.jumbo')
				@yield('main') <!--questo sarà sostituito di volta in volta
        con il codice che si trova in @section('main') che cambia a seconda
        della pagina visualizzata-->
			</main>
      @include('partials.footer')
    </body>
</html>