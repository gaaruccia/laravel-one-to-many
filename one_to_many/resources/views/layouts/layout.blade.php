<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee</title>
        <link rel="stylesheet" href="css/app.scss">
        <script src="js/app.js"></script>
    </head>
    <body>
        @include("componets.header")

        @yield("content")

        @include("componets.footer")
    </body>
</html>