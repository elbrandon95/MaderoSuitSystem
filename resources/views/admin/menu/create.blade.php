@extends("theme.$theme.layout")
@section('title')
    Sistema Menús
@endsection

@section('scripts')
<script src="{{asset("assets/pages/scripts/admin/menu/create.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.message')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear menús</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('menu')}}" class="btn btn-block btn-info btn-sm">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('menuStore')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg6"></div>
                    @include('includes.button-form-create')
                </div>
            </form>
        </div>
    </div>
</div>
@endsection