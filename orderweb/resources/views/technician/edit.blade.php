@extends('templates.base')
@section('title', 'Editar técnico')
@section('header', 'Editar técnico')
@section('content')
@include('templates.messages')

    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('technician.update', $technician['id']) }}" method="POST">
                @csrf {{-- medida de seguridad de laravel para evitar ataques --}}
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="document">Documento</label>
                        <input type="number" id="document" name="document" required 
                         value="{{ $technician['document'] }}" class="form-control">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" required 
                         value="{{ $technician['name'] }}" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="speciality">Especialidad</label>
                        <input list='specialities-list' class="form-control" name="speciality" id="speciality" >
                        <datalist id="specialities-list">
                            <option value="Instalación de redes">Instalación de redes</option>
                            <option value="Construcción">Construcción</option>
                            <option value="Lectura de redes">Lectura de redes</option>
                            <option value="Plomería">Plomería</option>
                        </datalist>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="phone">Teléfono</label>
                        <input type="text" name="phone" id="phone" required 
                         value="{{ $technician['phone'] }}" class="form-control">
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