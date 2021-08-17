<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\AirportModel;
use Illuminate\Support\Facades\Validator;

class AiportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AirportModel::all();
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'city' => 'required',
        ]);

        if ($validator->fails()){
            return response()->json([
                'error' => [
                    'errors' => $validator->errors()
                ]
                ]);
        }

        $dataModel = [
            'name' => $data['name'],
            'city' => $data['city'],
            'iota' => $data['iota'],
        ];

        //dd($dataModel);

       AirportModel::create($dataModel);

       return response()->json([
           'data' => 'success'
       ], 201);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
