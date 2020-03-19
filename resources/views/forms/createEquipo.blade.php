@extends('layouts.app')

@section('content')
<div class="card card-outline-secondary">
    <div class="card-header">
        <h3 class="mb-0">Crear equipo</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Nombre</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Telefono</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">ip</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Ciudad</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">Direccion</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label form-control-label">serial</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" value="">
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