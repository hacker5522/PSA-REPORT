<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<header class="bg-primary text-white py-3 shadow-sm">
    <div class="container d-flex justify-content-between align-items-center">
        <h2 class="fw-bold">PlumbFix Repairs</h2>
        <nav>
            <ul class="list-unstyled d-flex gap-4 mb-0">
                <li><a href="/" class="text-white text-decoration-none">Home</a></li>
                <li><a href="{{route('services')}}" class="text-white text-decoration-none">Services</a></li>
                <li><a href="{{route('about')}}" class="text-white text-decoration-none">About</a></li>
                <li><a href="{{route('contact')}}" class="text-white text-decoration-none">Contact</a></li>
            </ul>
        </nav>
        <a href="{{route('contact')}}" class="btn btn-warning fw-bold">Get a Free Quote</a>
    </div>
</header>

