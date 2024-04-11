<?php

namespace App\Http\Controllers;

use App\Models\AddAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('superadmin.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_data2(Request $request)
    {
        $data = new AddAdmin();

        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->password = $request->input('password');
        $data->role = $request->input('role');

        $data->save();
        return redirect('super');
    }

    /**
     * Display the specified resource.
     */
    public function show(DB $DB)
    {
        // $data = AddAdmin::all();
        $data = DB::table('admin')
            ->where('role', 'admin')
            ->get();
        return view('superadmin.all_admin', compact('data'));
    }

    public function show2(DB $DB)
    {
        // $data = AddAdmin::all();
        $data = DB::table('admin')
            ->where('role', 'user')
            ->get();
        return view('superadmin.all_users', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AddAdmin $AddAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AddAdmin $AddAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AddAdmin $AddAdmin)
    {
        //
    }
}
