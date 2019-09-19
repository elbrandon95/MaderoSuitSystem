
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label required">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name = "nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" id="nombre" required >
    </div>
</div>
<div class="form-group">
    <label for="url" class="col-lg-3 control-label required">URL</label>
    <div class="col-lg-8">
        <input type="text" name = "url" class="form-control" value="{{old('url', $data->url ?? '')}}" id="url" required>
    </div>
</div>
<div class="form-group">
    <label for="icono" class="col-lg-3 control-label">Ícono</label>
    <div class="col-lg-8">
        <input type="text" name = "icono" class="form-control" value="{{old('icono', $data->icono ?? '')}}" id="icono">
    </div><div class="col-lg-1">
        <span id="show-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>
</div>