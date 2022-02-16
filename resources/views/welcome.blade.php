<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="/js/app.js"></script>

</head>
<script>
    var channel = Echo.channel('my-channel');
    channel.listen('.App\\Events\\TicketFoiCriado', function(data) {
        alert(JSON.stringify(data));
    });
</script>


</html>
