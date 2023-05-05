<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OlahData;
// cara installnya
// composer require league/csv

use League\Csv\Reader;
use League\Csv\Writer;

class OlahDataStatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $csv = Reader::createFromPath(public_path('dataStat/rating.csv'), 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();

        // mengirim data rating ke halaman blade
        return view('admin.olahData', ['ratings' => $records]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $csv = Reader::createFromPath(public_path('dataStat/rating.csv'), 'r');
        $csv->setHeaderOffset(0);
        $records = $csv->getRecords();
        $newRecords = [];

        foreach ($records as $index => $record) {
            if ($record['id'] == $id) {
                $record['rating'] = $request->input('rating');
            }
            $newRecords[] = $record;
        }

        $csv = Writer::createFromPath(public_path('dataStat/rating.csv'), 'w+');
        $csv->setDelimiter(',');
        $csv->insertOne(['id', 'province', 'rating']);
        $csv->insertAll($newRecords);

        return redirect()->route('olah-data')->with('success', 'Data updated successfully.');
    }


    // public function import(Request $request)
    // {
    //     $request->validate([
    //         'file' => 'required|mimes:csv,txt'
    //     ]);

    //     $csv = Reader::createFromPath($request->file('file')->getPathname());
    //     $csv->setHeaderOffset(0);

    //     foreach ($csv as $record) {
    //         OlahData::updateOrCreate([
    //             'id' => $record['id']
    //         ], [
    //                 'nama' => $record['nama'],
    //                 'rating' => $record['rating']
    //             ]);
    //     }

    //     return redirect()->back()->with('success', 'Data has been imported successfully.');
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        $data = OlahData::find($id);

        return view('admin.editOlahData', compact('data'));
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}