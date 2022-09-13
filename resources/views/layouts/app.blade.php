@extends('layouts.main')

@section('main')
<body>
<nav class="fixed-top navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Scheduler</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Створити завдання</button>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</a>
                    <ul class="dropdown-menu">
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="SUBMIT">Вихід</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Нове завдання</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('profile.scheduler.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Назва:</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Замітка:</label>
                        <textarea name="content" class="form-control" id="message-text"></textarea>
                    </div>
                    <input type="datetime-local" name="date">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                        <button type="SUBMIT" class="btn btn-primary">Створити завдання</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@yield('content')
@endsection
