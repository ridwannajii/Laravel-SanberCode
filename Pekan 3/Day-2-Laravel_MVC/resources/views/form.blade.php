<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:200&display=swap" rel="stylesheet">

    <title>Halaman Registrasi</title>
</head>
<style>
    html,
    body {
        font-family: 'Nunito', sans-serif;
    }

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

    <!--- Form --->
    <div class="container-fluid">
        <h2>Buat Account Baru!</h2>
        <h3>Sign Up Form</h3>
        <form action="{{ url('/welcome')}}" method="post">
            <!-- <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"> -->
            @csrf
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br><br>
            <label for="gender">Gender:</label><br>
            <input type="radio" id="male" name="gender" value="male" required>Male<br>
            <input type="radio" id="female" name="gender" value="female" required>Female<br>
            <input type="radio" id="other" name="gender" value="other" required>Other<br><br>
            <label for="nationality">Nationality:</label><br>
            <select id="nationality" name="nationality">
                <option value="indonesian">Indonesian</option>
                <option value="malaysian">Malaysian</option>
                <option value="singapore">Singapore</option>
                <option value="australia">Australia</option>
            </select><br><br>
            <label for="language">Language Spoken:</label><br>
            <input type="checkbox" name="langugage1" id="langugage1" value="Bahasa Indonesia">Bahasa Indonesia<br>
            <input type="checkbox" name="langugage2" id="langugage2" value="English">English<br>
            <input type="checkbox" name="langugage3" id="langugage3" value="Other">Other<br><br>
            <label for="bio">Bio:</label><br>
            <textarea name="bio" rows="10" cols="30"></textarea><br><br>
            <button type="submit" name="submit">Sign Up</button>
            <button type="reset" name="reset">Clear</button>
        </form>
    </div>
    <!--- Akhir Form --->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>