<!DOCTYPE html>
<html>
<head>
    <title>Administratoriaus puslapis</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <style>
        /* CSS stiliai */
        .menu {
            background-color: #333;
            overflow: hidden;
        }
        .menu a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .menu a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="alert alert-info mb-0 dismissable">
    Sveiki prisijungę, administratoriau!
</div>
<div class="menu">
    <a href="{{route('dashboard')}}" class="btn btn-primary">Pradžia</a>
    <a href="{{route('addresses.index')}}" class="btn btn-primary">Adresai</a>
    <a href="{{route('categories.index')}}" class="btn btn-primary">Kategorijos</a>
    <a href="{{route('orders.index')}}" class="btn btn-primary">Užsakymai</a>
    <a href="{{route('payments.index')}}" class="btn btn-primary">Mokėjimai</a>
    <a href="{{route('persons.index')}}" class="btn btn-primary">Asmenys</a>
    <a href="{{route('products.index')}}" class="btn btn-primary">Produktai</a>
    <a href="{{route('statuses.index')}}" class="btn btn-primary">Adresai</a>
    <a href="{{route('users.index')}}" class="btn btn-primary">Vartotojai</a>
</div>
<div class="container mt-4">
    @yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script>
    // Išnykimo funkcija
    function dismissAlert() {
        $('.dismissable').fadeOut();
    }

    // Pranešimo automatinis išnykimas po 5 sekundžių
    setTimeout(dismissAlert, 5000);
</script>
</body>
</html>
