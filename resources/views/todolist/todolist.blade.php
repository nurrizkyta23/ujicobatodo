<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #FFFFFF;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .navbar-brand img {
            max-height: 70px;
        }
        .container {
            margin-top: 100px;
        }
        .display-4 {
            color: #343a40;
        }
        .btn {
            border-radius: 20px;
        }
        .btn-sm {
            font-size: 0.875rem;
            padding: 0.25rem 0.5rem;
        }
        .btn-primary, .btn-warning, .btn-danger {
            margin-right: 5px;
        }
        .table {
            margin-top: 20px;
        }
        .table thead {
            background-color: #0496c7;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/mytodo.png') }}" alt="MyTodo Logo">
        </a>
    </div>
</nav>

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    @if(isset($error))
        <div class="row">
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="display-4 fw-bold lh-1 mb-3" style="font-size: 2rem;">List kegiatanmu</h1>
        <form method="post" action="/logout" class="d-inline">
            @csrf
            <button class="btn btn-sm btn-danger" type="submit">Sign Out</button>
        </form>
    </div>

    <div class="mb-4">
        <a href="/openAddTodo" class="btn btn-sm btn-primary">Add Todo</a>
    </div>

    <form id="deleteForm" method="post" style="display: none"></form>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">To Do Aktivitas</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Selesai</th>
            <th scope="col">Catatan</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todolist as $key => $todo)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$todo['todo']}}</td>
                <td>{{$todo['tanggal']}}</td>
                <td>{{$todo['deadline']}}</td>
                <td>{{$todo['catatan']}}</td>
                <td>
                    <form action="/todolist/{{$todo['id']}}/delete" method="post" class="d-inline">
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit">Tandai Selesai</button>
                    </form>
                    <a href="/todolist/{{$todo['id']}}/edit" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</body>
</html>
