@extends('templates.base')
@section('title', 'Crear técnico')
@section('header', 'Crear técnico')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
                @csrf {{-- medida de seguridad de laravel para evitar ataques --}}
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" id="document" name="document" required class="form-control">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" required class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="speciality">Especialidad</label>
                        <input type="text" name="speciality" id="speciality" required class="form-control">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('technician.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection