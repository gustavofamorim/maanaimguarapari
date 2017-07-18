@extends('layouts.error')

@section('title', 'Página não Encontrada')

@section('description')
    <p>A página que você procura não foi encontrada!</p>
    <p>Acreditamos que seja melhor voltar a página anterior ou acessar o que procura pela <a href="{{ route('index') }}">página inicial</a>.</p>
@endsection