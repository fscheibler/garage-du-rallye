@extends('layouts.app')

@section('title', 'Nos Services')

@section('content')

@include('pages.services.sections.services-banner')

@include('pages.services.sections.services-grid')

@include('pages.services.sections.process-steps')

@include('sections.cta')

@endsection