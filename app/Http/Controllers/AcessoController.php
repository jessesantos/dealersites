<?php

namespace App\Http\Controllers;

use App\Models\Acesso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcessoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acessos = DB::table('users')
                   ->select('users.name', 'users.email', 'users.active',
                   DB::raw("(SELECT COUNT(last_login) FROM users_access WHERE users_access.users_id = users.id) AS nacesso"))
                   ->paginate(10);

        return view('acessos.index', compact('acessos'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function show(Acesso $acesso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function edit(Acesso $acesso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acesso $acesso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acesso $acesso)
    {
        //
    }
}
