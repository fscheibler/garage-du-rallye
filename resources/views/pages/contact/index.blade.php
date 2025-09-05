@extends('layouts.app')

@section('title', 'Contact')

@section('content')

@include('pages.contact.sections.hero')



@include('pages.contact.sections.form')

@include('pages.contact.sections.coordinate')

@include('pages.contact.sections.map')

@include('pages.contact.sections.info')

@endsection 