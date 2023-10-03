<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Http\Requests\StoreChartRequest;
use App\Http\Requests\UpdateChartRequest;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreChartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChartRequest $request)
    {
      //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChartRequest  $request
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChartRequest $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chart  $chart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chart $chart)
    {
        //
    }


    public function createChart(StoreChartRequest $request) {
        $chart = new Chart([
            'user_id' => $request->input('user_id')
        ]);

        $chart->save();

        // Restituisci una risposta di successo
        return response()->json(['message' => 'Carrello creato con successo'], 201);
    }
}
