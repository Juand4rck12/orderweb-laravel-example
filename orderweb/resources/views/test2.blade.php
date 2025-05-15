@extends('templates.base')

@section('title', 'Test')

@section('content')
    
    <h1>Test</h1>
    <q>No soy hombre de plegarias,
        pero si estás en el cielo ayúdame Superman!</q>
    <small>Homero J. Simpson</small>
    <button onclick="showAlert()">Clic!</button>

@endsection

@section('scripts')
    <script src="{{ asset('js/test.js') }}"></script>
@endsection