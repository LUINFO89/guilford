<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InformesController as ControllersInformesController;
use App\Models\Certificacione;
use App\Models\Informe;
use FontLib\Table\Type\cmap;
use PDF;
use Illuminate\Http\Request;

class InformesController extends Controller
{
    //
    public function index()
    {
        return view('informes.informes');
    }
    
    public function downloadPdfcertificado(Request $request , Certificacione $id){

        //$certificaciones = Certificacione::findOrFail($id);
       // $datosCertificado = request() -> $request->except('_token','_method')
        $certificacione = Certificacione::findOrFail($id);

       view()->share('informes.certificaciones', $certificacione);


        $pdf = PDF::loadView('informes.certificaciones', ['certificacione' => $certificacione]);

        return $pdf->stream();
        //return response()->json($certificaciones);
        //return view('informes.certificaciones');
    }

    public function show(Informe $id)
    {
        $certificacione = Informe::find($id);

        return view('informes.certificaciones', compact('certificacione'));
    }

}
