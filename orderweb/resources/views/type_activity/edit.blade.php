@extends('templates.base')
@section('title', 'Editar tipo de actividad')
@section('header', 'Editar tipo de actividad')
@section('content')
@include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('type_activity.update', $type_activity['id']) }}" method="POST">
                @csrf {{-- medida de seguridad de laravel para evitar ataques --}}
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" required
                         value="{{ $type_activity['description'] }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('type_activity.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection