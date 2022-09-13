<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Schedule</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/e84f2d0407.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    </head>

    <body class="d-flex h-100v text-center text-bg-primary">

    <div class="d-flex w-50 h-100v p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0 ">Scheduler</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link fw-bold py-1 px-0 active" href="{{ route('register')}}">Реєстрація</a>
                    <a class="nav-link fw-bold py-1 px-0" href="{{ route('login') }}">Вхід</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h1 class="">твій день —</h1>
            <p class="lead">разом із нашим сервісом <strong class="fw-bold">СТАНЕ</strong> на <strong>199% продуктивніший</strong>!</p>
            <p class="lead">
                <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Спробувати</a>
            </p>
        </main>

        <div class="row justify-content-between container w-100" id="featured-3">
            <div class="row g-4 pt-5 row-cols-1 row-cols-lg-3">
                <div class="feature col">
                    <h4 class="fw-bolder"><i class="fa-solid fa-child-reaching"></i>   Зручно</h4>
                    <p class="fw-lighter"><em class="fw-bolder">Реєстрація займе від сили 30 секунд.</em> Опісля, у Вас вийде чітко спланувати графік на день.</p>

                </div>
                <div class="feature col">

                    <h4 class="fw-bolder"><i class="fa-solid fa-chart-simple"></i>   Продуктивно</h4>
                    <p class="fw-lighter">У всіх наших користувачів получається виконати <em class="fw-bolder">99.8% запланованих справ</em></p>

                </div><div class="feature col">
                    <h4 class="fw-bolder"><i class="fa-solid fa-bell"></i>   Надійно</h4>
                    <p class="fw-lighter"><em class="fw-bolder">Наш сервіс завжди доступний!</em> Тому у Вас ніяк не вийде залишится без запланованих справ</p>
                </div>
            </div>
        </div>

        <footer class="mt-auto text-white-50">
        </footer>
    </div>
    </body>
</html>
