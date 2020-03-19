@extends('layouts.app')

@section('content')
<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Crear Grupo</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Equipo</label>
                <div class="col-sm-9">
                    <select class="form-control" name="" id="">
                        <option selected disabled value="">Seleccione un equipo</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Cruce</label>
                <div class="col-sm-9">
                    <select class="form-control" name="" id="">
                        <option selected disabled value="">Seleccione un cruce</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Tipo de grupo</label>
                <div class="col-sm-9">
                    <select class="form-control" name="" id="">
                        <option selected disabled value="">Seleccione un tipo</option>
                        <option value="">Regular</option>
                        <option value="">Peatonal</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Grupo principal</label>
                <div class="col-sm-9">
                    <input type="checkbox" name="" id="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">latitud</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" value="">
                </div>
                <label class="col-sm-3 col-form-label form-control-label">longitud</label>
                <div class="col-sm-3">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                    <input type="button" class="btn btn-primary" value="Save Changes">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection