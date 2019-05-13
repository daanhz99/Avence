<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testimonial Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container w-screen flex flex-col justify-center items-center p-5">
    <p class="title text-2xl">Nieuwe testimonial:</p>
    <p><span class="font-semibold">Volledige Naam:</span> {{ $full_name }}</p>
    <p><span class="font-semibold">Emailadres:</span> {{ $email }}</p>
    <p><span class="font-semibold">Bedrijfsnaam:</span> {{ $company_name}}</p>
    <p><span class="font-semibold">Ervaring:</span> {{ $experience }}</p>
</div>
</body>
</html>