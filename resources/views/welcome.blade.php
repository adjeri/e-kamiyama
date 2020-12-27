<!doctype html>
<html lang="Kamiya-map">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kamiya-map</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      {!! $map['js']!!}  
    </head>
    <body>
       {!! $map['html']!!}
       <div id="directionsDiv"></div>
    </body>
</html>
