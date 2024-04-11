<?php

namespace App\Http\Controllers;

use App\Models\Res;
use App\Models\Foods;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ResController extends Controller
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
        return view('superadmin.add');
    }

    public function create_food()
    {
        //
        return view('superadmin.add-food');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store_data(Request $request)
    {
        $data = new Res();

        $data->name = $request->input('name');
        $data->type = $request->input('type');
        $data->place = $request->input('place');

        $data->save();
        return redirect('super');
    }

    public function store_food(Request $request)
    {
        $data = new Foods();

        $data->food = $request->input('food');
        $data->price = $request->input('price');
        $data->restaurants_id = $request->input('restaurants_id');

        $data->save();
        return back();
    }

    function food()
    {
        $res = Res::all();
        return view('superadmin.add-food', compact('res'));
    }

    /**
     * Display the specified resource.
     */
    function view()
    {
        $foods = Foods::with('res')->get();
        $restaurants = Res::with('foods')->get();
        // dd($foods);
        // $data = Res::find($id);
        return view('user.view', compact('foods' ,'restaurants'));
    }

    function view2()
    {
        $data = Res::all();
        return view('user.home', compact('data'));
    }

    public function create2()
    {
        //
        return view('superadmin.add_food');
    }


    /**
     * Display the specified resource.
     */
    function view3($id)
    {
        $data = Res::find($id);
        return view('user.view_food', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    function supershow()
    {
        //
        $data = Res::all();
        return view('superadmin.home', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    function admin()
    {
        //
        $data = Res::all();
        return view('admin.home', compact('data'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    function edit($id)
    {
        $data = Res::find($id);

        return view('superadmin.edit', compact('data'));
    }

    function update_data(Request $request, $id)
    {
        $data = Res::find($id);

        $data->name = $request->input('name');
        $data->type = $request->input('type');
        $data->place = $request->input('place');

        $data->save();
        return redirect('super');
    }

    /**
     * Delete the specified resource in storage.
     */
    public function delete($id)
    {
        $data = Res::find($id);

        $data->delete();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Res $Res)
    {
        //
    }
}
