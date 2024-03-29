@extends("theme.$theme.layout")
@section("title")
Menú
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scriptPlugins")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12">
            @include('includes.message')
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Menús</h3>
                    <a href="{{route('menuCreate')}}" class="btn btn-success btn-sm pull-right">Crear menú</a>
                </div>
                <div class="box-body">
                    @csrf
                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            @foreach ($menus as $key => $item)
                                @if ($item["menu_id"] != 0)
                                    @break
                                @endif
                                @include("admin.menu.menu-item",["item" => $item])
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection