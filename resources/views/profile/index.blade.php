@extends('layouts.app')

@section('content')
<div class="container-fluid row justify-content-center">
    <div class="pt-5 w-50">
    <h3 class="fw-bolder"><i class="fa-solid fa-calendar-day mx-3"></i> Сьогоднішні плани:</h3>
    @if(!count($today_schedulers))
        <h2>На сьогодні справ немає!</h2>
    @else
        @foreach($today_schedulers as $today_scheduler)
            <div class="px-5 border-bottom scheduler pt-4 pb-2" class="@if(!$today_scheduler->completed) background-color: danger;@else background-color: success; @endif">
                <p>Мені потрібно: <strong>{{ $today_scheduler->name }}</strong></p>
                <p>А іменно: <strong>{{ $today_scheduler->content }}</strong></p>
                <form action="{{ route('profile.scheduler.update', $today_scheduler->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <label class="fw-lighter">Статус: </label>
                    <input type="hidden" name="id" value="{{$today_scheduler->id}}">
                    @if(!$today_scheduler->completed)
                        <button name="completed" class="btn btn-danger" value="1" type="SUBMIT">Ви ще не виконали!</button>
                    @else
                        <button name="completed" class="btn btn-success" value="0" type="SUBMIT">Ви виконали!</button>
                    @endif
                </form>
            </div>
        @endforeach
    @endif



    <h3 class="mt-5 fw-bolder"><i class="fa-solid fa-list-check mx-3"></i>Плани на майбутнє:</h3>
        @if(!count($future_schedulers))
            <h2>Планів на найближчий час немає!</h2>
        @else
            @foreach($future_schedulers as $future_scheduler)
                <div class="scheduler mt-3 px-5 pt-3 pb-1 border-bottom" style="background-color: @if(!$future_scheduler->completed) light;@else green @endif">
                    <p>Мені потрібно: <strong>{{ $future_scheduler->name }}</strong></p>
                    <p>А іменно: <strong>{{ $future_scheduler->content }}</strong></p>
                    <div class="row justify-content-between">
                        <p class="col-3 pt-2">{{ \Carbon\Carbon::parse($future_scheduler->date)->translatedFormat('d F о h:i')}}</p>

                        <button type="button" class="col-3 btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$future_scheduler->id}}">
                            Видалити задачу
                        </button>
                    </div>
                    <div class="modal fade" id="exampleModal{{$future_scheduler->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Видалити задачу</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Ви дійсно хочете видалити задачу?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрити</button>
                                    <form class="text-end" action="{{ route('profile.scheduler.destroy', ['schedule' => $future_scheduler->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="SUBMIT">Удалити</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
