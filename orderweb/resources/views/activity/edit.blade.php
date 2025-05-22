@extends('templates.base')
@section('title', 'Editar actividad')
@section('header', 'Editar actividad')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('activity.update', $activity['id']) }}" method="POST">
                @csrf {{-- medida de seguridad de laravel para evitar ataques --}}
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control" id="description" name="description" 
                         value="{{ $activity['description'] }}" required>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="hours">Horas</label>
                        <input type="number" class="form-control" id="hours" name="hours" 
                         value="{{ $activity['hours'] }}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="technician_id">Técnico</label>
                        <select name="technician_id" id="technician_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($technicians as $technician)
                                {{-- Sin cerrar el <option> se verifica si el seleccionado es el mismo --}}
                                <option value="{{ $technician['id'] }}" 
                                {{ $technician['id'] == $activity['technician_id'] ? 'selected' : '' }}>
                                    {{ $technician['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="type_activity_id">Tipo</label>
                        <select name="type_activity_id" id="type_activity_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($types as $type)
                                <option value="{{ $type['id'] }}"
                                {{-- Sin cerrar el <option> se verifica si el seleccionado es el mismo --}}
                                {{ $type['id'] == $activity['type_activity_id'] ? 'selected' : '' }}>
                                    {{ $type['description'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a href="{{ route('activity.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection