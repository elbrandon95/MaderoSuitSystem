<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Rol;
use App\Models\admin\Menu;
use App\Models\admin\MenuRol;

class MenuRolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rols = Rol::orderBy('id')->pluck('nombre','id')->toArray();
        $menus = Menu::getMenu();
        $menusRols = Menu::with('roles')->get()->pluck('roles','id')->toArray();
        return view('admin.menu-rol.index',compact('rols', 'menus', 'menusRols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $menus = new Menu();
            if ($request->input('estado') == 1) {
                $menus->find($request->input('idMenu'))->roles()->attach($request->input('idRol'));
                return response()->json(['respuesta' => 'El rol se asigno correctamente']);
            } else {
                $menus->find($request->input('idMenu'))->roles()->detach($request->input('idRol'));
                return response()->json(['respuesta' => 'El rol se elimino correctamente']);
            }
        } else {
            return response()->json(['respuesta' => 'Te mamaste']);;
        }
    }
}
