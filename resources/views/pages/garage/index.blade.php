@extends('layouts.app')

@section('title', 'Le Garage')

@section('content')

@include('pages.garage.sections.garage-banner')

@include('pages.garage.sections.garage-presentation')

@include('pages.garage.sections.reassurance-block')

@include('pages.garage.sections.team-presentation')

@include('sections.cta')

@endsection
