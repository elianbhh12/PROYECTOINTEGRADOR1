<?php

namespace App\Http\Controllers;

use App\Models\documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    function __construct()
    {
            $this->middleware('permission:documents-list|documents-create|documents-edit|documents-delete', ['only' => ['index','show']]);
            $this->middleware('permission:documents-create', ['only' => ['create','store']]);
            $this->middleware('permission:documents-edit', ['only' => ['edit','update']]);
            $this->middleware('permission:documents-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $documents = Documents::latest()->paginate(5);
        return view('documents.index',compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function create()
    {
        return view('documents.create');
    }
    
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'archivo' => 'required',
        ]);
    
        Documents::create($request->all());
    
        return redirect()->route('documents.index')
                        ->with('success','Documento Creado Exitosamente.');
    }
    
    public function show(Documents $documents)
    {
        return view('documents.show',compact('documents'));
    }
    
    public function edit(Documents $documents)
    {
        return view('documents.edit',compact('documents'));
    }
    
    public function update(Request $request, Documents $documents)
    {
        request()->validate([
            'name' => 'required',
            'archivo' => 'required',
        ]);
    
        $documents->update($request->all());
    
        return redirect()->route('documents.index')
                        ->with('success','Documento Cargado Exitosamente');
    }
    

    public function destroy(Documentst $documents)
    {
        $documents->delete();
    
        return redirect()->route('documents.index')
                        ->with('success','Documento Eliminado Exitosamente');
    }
}
