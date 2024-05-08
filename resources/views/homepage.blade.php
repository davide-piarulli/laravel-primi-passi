<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css'
        integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ=='
        crossorigin='anonymous' />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <div class="container my-5 ">
        <h1>Hello World!</h1>
        <p>Il mio nome è: {{ $fullname }}</p>
        <p>Ho: {{ $age }} anni</p>
        <p>Vivo a: {{ $city }}</p>


    </div>
</body>

</html>
