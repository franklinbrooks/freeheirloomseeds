<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Seed;

class SeedController extends Controller
{
    /**
     * Enforce middleware.
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("seeds")->withTitle('Seeds');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create')->withTitle('Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Seed::create($request->all());
        return view('dashboard')->withTitle('Dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('details', ['seed' => Seed::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('edit', ['seed' => Seed::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $seed = Seed::find($id);
        $seed->name = $request->name;
        $seed->active = $request->active;
        $seed->type = $request->type;
        $seed->latin_name = $request->latin_name;
        $seed->photo_url = $request->photo_url;
        $seed->description = $request->description;
        $seed->days_to_harvest = $request->days_to_harvest;
        $seed->active = $request->active;
        $seed->type = $request->type;
        $seed->instructions = $request->instructions;
        $seed->pestdisease = $request->pestdisease;
        $seed->saving = $request->saving;
        $seed->source = $request->source;
        $seed->save();
        return redirect('dashboard')->withTitle('Dashboard');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
