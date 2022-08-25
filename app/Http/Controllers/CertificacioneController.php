<?php

namespace App\Http\Controllers;

use App\Models\Certificacione;
use App\Models\Grado;
use App\Models\Alumno;
use Illuminate\Http\Request;
use PDF;
/**
 * Class CertificacioneController
 * @package App\Http\Controllers
 */
class CertificacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificaciones = Certificacione::paginate();

        return view('certificacione.index', compact('certificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $certificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificacione = new Certificacione();

        $grados = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario
        $estudiante = Alumno::pluck('documentoIdentidadAlumno','id');
        $nombre= Alumno::pluck('documentoIdentidadAlumno','id');
       
        return view('certificacione.create', compact('certificacione','grados','estudiante'));
    }
    public function downloadPdf()
    {
        $grados = Certificacione::paginate();

        view()->share('certificacione.pdf', $grados);
        
        
        $pdf = PDF::loadView('certificacione.pdf', ['certificaciones' => $grados])->setPaper('a4', 'landscape');

        return $pdf->stream()
        
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Certificacione::$rules);

        $certificacione = Certificacione::create($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificacione = Certificacione::find($id);
        $grados = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario
      

        return view('certificacione.show', compact('certificacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacione = Certificacione::find($id);
        $grados = Grado::pluck('nombreGrado', 'id');//sirve para mostrar el select del formulario
        $estudiante = Alumno::pluck('documentoIdentidadAlumno','id');
        $nombre= Alumno::pluck('documentoIdentidadAlumno','id');


        return view('certificacione.edit', compact('certificacione','grados','estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Certificacione $certificacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacione $certificacione)
    {
        request()->validate(Certificacione::$rules);

        $certificacione->update($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificacione = Certificacione::find($id)->delete();

        return redirect()->route('certificaciones.index')
            ->with('success', 'Certificacione deleted successfully');
    }
}
