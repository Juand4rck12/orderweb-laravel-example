@extends('templates.base')
@section('title', 'Editar órden')
@section('header', 'Editar órden')
@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="#" method="POST">
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
                        <select name="causal" id="causal" class="form-control">
                            <option value="TULUA">TULUÁ</option>
                            <option value="CALI">CALI</option>
                            <option value="BUGA">BUGA</option>
                            <option value="PALMIRA">PALMIRA</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="causal">Causa</label>
                        <select name="causal" id="causal" class="form-control">
                            <option value="">Seleccione</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <label for="observation_id">Observación</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
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
        </div>
    </div>
@endsection