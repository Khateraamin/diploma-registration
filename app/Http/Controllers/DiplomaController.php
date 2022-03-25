<?php

namespace App\Http\Controllers;

use App\Models\Diploma;
use App\Http\Requests\StoreDiplomaRequest;
use App\Http\Requests\UpdateDiplomaRequest;
use Inertia\Inertia;

class DiplomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Diplomas/Index', [
            'diplomas' => Diploma::paginate(10),
        ]);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $diploma = Diploma::where('diploma_id', request('diploma_id'))->first();

        return Inertia::render('Diplomas/Show', [
            'diploma' => $diploma,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Diplomas/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDiplomaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDiplomaRequest $request)
    {
        $diploma = Diploma::create($request->validated());

        return redirect()
            ->route('diplomas.show', $diploma)
            ->with('success', 'Diploma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function show(Diploma $diploma)
    {
        return Inertia::render('Diplomas/Show', [
            'diploma' => $diploma,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function edit(Diploma $diploma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDiplomaRequest  $request
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiplomaRequest $request, Diploma $diploma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diploma  $diploma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Diploma $diploma)
    {
        //
    }
}
