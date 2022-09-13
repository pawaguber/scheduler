@extends('layouts.main')

@section('main')
<div class="container">
    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Підтвердіть свою почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Оновлене посилання на підтвердження вислане на Вашу почту') }}
                        </div>
                    @endif

                    {{ __('Перш ніж продовжити, перевірте свою електронну пошту на наявність посилання для підтвердження.') }}
                    {{ __('Якщо ви не отримали листа') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('натисніть тут, щоб надіслати запит') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
