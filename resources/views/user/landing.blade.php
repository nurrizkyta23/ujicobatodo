<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
            padding-top: 56px; /* Adjusting padding for the fixed navbar */
        }
        .navbar {
            background-color: #FFFFFF; /* Navbar background color */
        }
        .navbar-brand {
            color: #ffffff; /* Navbar brand text color */
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .navbar-brand img {
            max-height: 70px; /* Adjusting logo size */
        }
        .login-button {
            color:  #0496c7; /* Login button text color */
            background-color: #ffffff ; /* Button background color */
            border: none;
            border-radius: 50px; /* Making the button rounded */
            padding: 15px 40px; /* Adjusting button padding */
            font-size: 1.25rem; /* Adjusting button font size */
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }
        .login-button:hover {
            background-color: #0272a3; /* Button background color on hover */
            color: #ffffff;
            transform: scale(1.05); /* Adding a slight scale effect on hover */
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .hero-section {
    background-color: #0496c7;
    color: white;
    padding: 100px 20px;
    border-radius: 20px;
    text-align: center;
    position: relative; /* To position the content */
}

    .hero-section h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        overflow: hidden; /* Hide overflow text */
        white-space: nowrap; /* Prevent wrapping */
        animation: typing 3s steps(20) infinite; /* Typing animation */
        display: inline-block; /* To center align the typing animation */
    }

    @keyframes typing {
        0% {
            width: 0;
        }
        100% {
            width: 100%;
        }
    }

    .hero-section p {
        font-size: 1.25rem;
    }

    .hero-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

        .team-section {
            padding: 40px 20px;
            text-align: center;
        }
        .team-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .team-member {
            margin-bottom: 30px;
        }
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .team-member h5 {
            margin-bottom: 5px;
            font-size: 1.25rem;
        }
        .team-member p {
            color: #666666;
            font-size: 1rem;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/mytodo.png') }}" alt="MyTodo Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container hero-section">
    <h1>Selamat Datang di <b>Mytodo!</b></h1>
    <p>Stay on track dengan mencatat semua kegiatanmu.</p>
    <br>
    <div>
        <a href="/login">
            <button class="login-button">Mulai Sekarang</button>
        </a>
    </div>
</div>
<div class="container team-section">
    <h2><b style="color:#0496c7">Meet Mytodo Team!</b></h2>
    <br><br>
    <div class="row">
        <div class="col-md-4 team-member">
            <img src="images/auliapic.jpg" alt="Team Member 1" class="img-fluid">
            <br><br>
            <h5>Nurrizkyta Aulia Hanifah</h5>
            <p>J0403221001</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="images/daffapic.jpg" alt="Team Member 2" class="img-fluid">
            <br><br>
            <h5>Daffarizqy Prastowiyono</h5>
            <p>J0403221034</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="images/bagaspic.jpg" alt="Team Member 3" class="img-fluid">
            <br><br>
            <h5>Anggito Rangkuti Bagas M</h5>
            <p>J0403221096</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 team-member">
            <img src="images/najlapic.jpg" alt="Team Member 1" class="img-fluid">
            <br><br>
            <h5>Najla Amelia Putri</h5>
            <p>J0403221089</p>
        </div>
        <div class="col-md-4 team-member">
            <img src="images/fathipic.jpg" alt="Team Member 2" class="img-fluid">
            <br><br>
            <h5>Muhammad Fathi Ramdhana</h5>
            <p>J0403221113</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
