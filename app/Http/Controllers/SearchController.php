<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TableUserModel;
use App\Models\TableTextilModel;
use App\Models\TableDonasiModel;
use App\Models\TableCoinModel;
use App\Models\Menu;
class SearchController extends Controller
{
    /**
     * Menampilkan halaman search result.
     */
    // public function index()
    // {
    //     return view('admin.search-result');
    // }

    /**
     * Mencari data berdasarkan keyword pada halaman admin.
     */
    public function search(Request $request)
    {
        $query = $request->get('keyword');

        // Search in 'donasi' table.
        $donasi = TableDonasiModel::query()
            ->where('judul', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->orWhere('status', 'LIKE', "%$query%")
            ->get();

        // Search in 'textil' table.
        $textils = TableTextilModel::query()
            ->where('nama', 'LIKE', "%$query%")
            ->orWhere('jenis', 'LIKE', "%$query%")
            ->orWhere('deskripsi', 'LIKE', "%$query%")
            ->get();

        // Search in 'users_migration' table.
        $users_migration = TableUserModel::query()
            ->where('nama', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->orWhere('alamat', 'LIKE', "%$query%")
            ->orWhere('provinsi', 'LIKE', "%$query%")
            ->get();

        // Search in 'users' table.
        $users = DB::table('users')
            ->where('name', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->get();

        // Store search results in separate arrays.
        $searchResults = [
            'donasi' => $donasi,
            'textils' => $textils,
            'users_migration' => $users_migration,
            'users' => $users,
        ];

        // Check if any search results were found.
        $searchResultFound = false;
        foreach ($searchResults as $result) {
            if (!$result->isEmpty()) {
                // If there are search results, redirect to search results page.
                $searchResultFound = true;
                return view('admin.search-result', compact('searchResults'));
            }
        }

        // If no search results were found, return to previous page with error message.
        if (!$searchResultFound) {
            return back()->with('error', 'No search results found.');
        }
    }



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