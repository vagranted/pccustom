@extends('layouts.master')
@section('title', 'Товар')
@section('content')
        <h1>GAMING ONE</h1>
        <h2>{{ $product }}</h2>
        <p>Цена: <b>120000 руб.</b></p>
        <img src="{{ asset('images/computers/1.jpg') }}" alt="Computer">
        <p>HYPERPC GAMING ONE - это базовая игровая линейка компьютеров, разработанная специально для начинающих геймеров и энтузиастов.</p>
        <a href="@routeactive('basket*') {{ route('basket') }}">Добавить в корзину</a>
@endsection
