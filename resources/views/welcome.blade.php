@extends('layouts.main')

@section('title', 'Home | PT Tropical Natural Sugar')

@section('content')

    {{-- Banner --}}
    @include('sections.banner')

    {{-- Featured --}}
    @include('sections.featured')

    {{-- Video --}}
    {{-- @include('sections.video') --}}

    {{-- Products --}}
    @include('sections.products')

    {{-- Contact --}}
    @include('sections.contact')

@endsection
