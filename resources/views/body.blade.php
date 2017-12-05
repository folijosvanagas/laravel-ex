@extends('layout')

@section('content')

    @include('nav')

    <!-- Intro Section -->
        <section id="intro" class="intro-section">
            @include('sections.intro')
        </section>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery-section">
        @include('sections.gallery2')
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        @include('sections.about')
    </section>

    <!-- About Section -->
    <section id="contacts" class="contacts-section">
        @include('sections.contacts')
    </section>


@endsection