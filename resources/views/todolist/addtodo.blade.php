<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #FFFFFF;
            color: #0496c7;
        }
        .navbar-brand {
            color: #0496c7;
        }
        .navbar-brand img {
            max-height: 70px; /* Adjusting logo size */
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 80px; /* Adding space between navbar and container */
        }
        .display-4 {
            color: #0496c7;
            font-size: 2rem;
        }
        .btn {
            border-radius: 20px;
        }
        .btn-lg {
            font-size: 1.25rem;
            padding: 0.75rem 1.5rem;
        }
        .form-control {
            border-radius: 10px;
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

<div class="container col-xl-10 col-xxl-8 px-4 py-5">

    <class="row align-items-center g-lg-5 py-5">
            <br>
            <h1 class="display-4 fw-bold lh-1 text-center">Add Todo</h1>
            <br>
            <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="/todolist">
                @csrf
                <div class="mb-3">
                    <label for="todo" class="form-label">Todo</label>
                    <input type="text" class="form-control" name="todo" id="todo" placeholder="Enter your todo">
                </div>
                <div class="mb-3">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="text" class="form-control" name="deadline" id="deadline" placeholder="Enter deadline">
                </div>
                <div class="mb-3">
                    <label for="catatan" class="form-label">Catatan</label>
                    <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Enter your notes">
                </div>
                <script>
                    flatpickr("#deadline", {
                        enableTime: true,
                        dateFormat: "Y-m-d H:i",
                        minDate: "today",
                        time_24hr: true
                    });
                </script>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Add Todo</button>
            </form>
    </div>
</div>

</body>
</html>
