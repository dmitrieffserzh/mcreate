@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="section">
        <div class="section__intro">
            <div class="section__overlay">
                <div class="container">
                    <h1 class="section__intro-title">Самый длинный заголовок страницы из всех!</h1>
                    <p class="section__intro-description">
                        Тщательные исследования конкурентов лишь добавляют фракционных разногласий и представлены в исключительно положительном свете.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section"></section>
    <section class="section"></section>
    <section class="section"></section>
    <section class="section"></section>
    
@endsection
