<?php

namespace GaneshaSIGE\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as Collection;
use GaneshaSIGE\ModelMineria;
class controllermineria extends Controller
{
	public function mineria()
	{
		return view('Mineria/Agregar_mineria');
	}

	public function queryMineria($query)
	{
		$results = \DB::select('SELECT '.$query);
		return count($results);
	}

	public function minaValores(Request $request)
	{
		$cabeceras=explode(',', $request->celdas);
		$cantidad=$request->maximo-$request->minimo;
		$results = DB::select('SELECT '.$request->newQuery.' OFFSET '.$request->minimo.' ROWS FETCH NEXT '.$cantidad.' ROWS ONLY;');
		$discretizacion = ModelMineria::discretizacion($cabeceras,$cantidad,DB::select('SELECT '.$request->newQuery.' OFFSET '.$request->minimo.' ROWS FETCH NEXT '.$cantidad.' ROWS ONLY;'));
		$normalizacion = ModelMineria::discre($cabeceras,$cantidad,DB::select('SELECT '.$request->newQuery.' OFFSET '.$request->minimo.' ROWS FETCH NEXT '.$cantidad.' ROWS ONLY;'));

		foreach ($normalizacion as $key) {
			$dato[]=array_flatten(collect($key)->toArray());
		}
		foreach($dato as $key => $d) {
		  $dato[] = ModelMineria::normaliseValue($d, sqrt($d[0]*$d[0] + $d[1] * $d[1]));
		}
		$centroides=ModelMineria::kMeans($dato, $request->centroides)['centroides'];
		return view('Mineria/Mostrar_mineria')->with(['discretizacion' => $discretizacion,'normal'=>$results,'normalizacion'=>$normalizacion,'celdas'=>$cabeceras,'centroides'=>$centroides]);

	}
}
