<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">        <title>Lara Web One </title>
    </head>


<body data-spy="scroll" data-target=".navbar" data-offset="50>
    <div class="container">
        <header>
            @include('inc.navbar')
        </header>

        @include('inc.intro')


        @include('forms.info')


            @include('inc.gallery')

            @include('inc.features')

            @include('inc.faq')

            
            @include('forms.contact')

    
        @include('inc.footer')
        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    </div>       
</body>
</html>