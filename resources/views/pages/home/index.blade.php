@extends('layouts.app')

@section('content')

@include('pages.home.sections.hero')

@include('pages.home.sections.about')

@include('pages.home.sections.services-cards')

@include('pages.home.sections.vehicles-cta')

@include('sections.cta')

@include('pages.home.sections.brands')

@include('pages.home.sections.blog', ['blogs' => $blogs])

@endsection