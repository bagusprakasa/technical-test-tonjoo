<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Form',
            'url' => url('/form'),
            'type' => 'List Form',
        ];
        return view('pages.form.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Form',
            'url' => url('/form'),
            'type' => 'Create Form',
            'method' => 'add',
            'data' => (object)[]
        ];
        return view('pages.form.form', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $arrValidate = [
            'name'   => 'required',
            'select'   => 'required',
            'file'   => 'required',
        ];
        $request->validate($arrValidate);

        DB::beginTransaction();
        try {

            DB::commit();

            return redirect()->route('form.index')->with('success', 'Order Berhasil Ditambahkan');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something wrong. : ' . $e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Something wrong on database : ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
