<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\categorie;
use Illuminate\Support\Facades\Auth;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')::all();
        return view('categories.categories',compact('categories'));
    }
    public function store(Request $request)
    {
    $this -> validate($request, [
        'nom' => 'required',
        'site_web' => 'required'
      ]);
      session()->flash('Add', 'catégorie ajoutée');
            return redirect('/categories');
}
public function destroy(Request $request)
{
    $id = $request->id;
    DB::table('categories')::find($id)->delete();
    session()->flash('delete',' categorie supprimée');
    return redirect('/categories');
}
}