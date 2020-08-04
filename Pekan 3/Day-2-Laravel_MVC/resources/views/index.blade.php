<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Sanber Book</title>
</head>
<style>
    .nav-link {
        text-transform: uppercase;
        margin-right: 30px;
    }
</style>

<body>
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/')}}">SanberCode</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ url('/')}}">Home</a>
                    <a class="nav-item nav-link" href="{{ url('/register')}}">Register</a>
                    <a class="nav-item nav-link" href="{{ url('/welcome')}}">Welcome</a>
                </div>
            </div>
        </div>
    </nav>
    <!--- Akhir Navbar -->

    <!--- isi Konten --->
    <div class="container">
        <h1>SanberBook</h1>

        <h2>Social Media Developer Santai Berkualitas</h2>

        <p>Belajar dan Berbagi agar hidup ini semakin santai berkualitas</p>
        <h3>Benefit Join di SanberBook</h3>
        <ul>
            <li>Mendapatkan motivasi dari sesama developer</li>
            <li>Sharing knowledge dari para mastah sanber</li>
            <li>Dibuat oleh calon web developer terbaik</li>
        </ul>
        <h3>Cara Bergabung ke SanberBook</h3>
        <ol>
            <li>Mengunjungi Website ini</li>
            <li>Mendaftar di <a href="{{ url('/register')}}">Form Sign Up</a></li>
            <li>Selesai</li>
        </ol>
    </div>
    <!--- Akhir Konten --->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>