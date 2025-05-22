@extends('templates.base')
@section('title', 'Crear órden')
@section('header', 'Crear órden')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('order.store') }}" method="POST">
                @csrf {{-- medida de seguridad de laravel para evitar ataques --}}
                <div class="row form-group">
                    <div class="col-lg-6 mb-4">
                        <label for="legalization_date">Fecha legalización</label>
                        <input type="date" id="legalization_date" name="legalization_date" required class="form-control">
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="address">Dirección</label>
                        <input type="text" id="address" name="address" required class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-4 mb-4">
                        <label for="city">Ciudad</label>
                        <select name="city" id="city" class="form-control">
                            <option value="TULUA">TULUÁ</option>
                            <option value="CALI">CALI</option>
                            <option value="BUGA">BUGA</option>
                            <option value="PALMIRA">PALMIRA</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="causal_id">Causa</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($causals as $causal)
                                <option value="{{ $causal['id'] }}">
                                    {{ $causal['description'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="observation_id">Observación</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($observations as $observation)
                                <option value="{{ $observation['id'] }}">
                                    {{ $observation['description'] }}
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
                        <a href="{{ route('order.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>

            <br>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa-solid fa-lightbuld"></i> Para añadir actividades a la orden, primero debe
                        crearla y luego dar clic en la opción <i class="fas fa-edit"></i> <strong>Editar</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection