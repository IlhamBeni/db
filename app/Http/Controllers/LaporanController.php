<?php

namespace App\Http\Controllers;

use App\Models\satu;
use App\Models\post;
use App\Models\tiga;
use App\Models\empat;
use App\Models\lima;
use App\Models\laporan;
use Barryvdh\DomPDF\Facade\Pdf;
// use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use LengthException;
use PhpParser\Node\Expr\Cast\Array_;
use PhpParser\Node\Stmt\Echo_;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lapo = Laporan::all();
        $dua = Post::all();

        $paginate = 20;

        if($request->has('search')){
            $posts = Satu::where('nama_lembaga','LIKE','%'.$request->search.'%')->paginate($paginate);
        }else{
            $posts = Satu::paginate($paginate);
        }

        return view('/dashboard/laporan/index', [
            'dua' => $dua,
            'posts' => $posts,
            'lapo' => $lapo,
            'tiga' => Tiga::all(),
            'empat' => Empat::all(),
            'lima' => LIma::all(),
        ]);
    }

    public function filterMultiple(Request $request)
    {
        $paginate = 20;
        $posts = Satu::query();

        $filter = array(
            "ref_produk"        =>  $request->produk,
            "server_service"    =>  $request->serverService,
            "status_service_gwlite"  => $request->gwlite,
            "status_service_gwlkm"  => $request->gwlkm,
            "status_service_gwibslite"  => $request->gwibslite,
            "status_service_ereg"  => $request->ereg,
            "status_service_core"  => $request->core,
            "status_service_marketplace"  => $request->marketplace,
            "status_va"  => $request->va,
            "status_kartu_santri"  => $request->santri,
            "status_mikropay"  => $request->mikropay,
            "status_qris"  => $request->qris,
        );


        // $sting = "Satu::All()";
        // dd($sting);
        foreach ($filter as $dataLembaga => $value) {
            // echo "'->where(",$dataLembaga,"=",$value,"') \n'";
            $result = DB::table('app_lembaga')->where('ref_produk', $dataLembaga, $value)->get();

        }

        dd($result);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function exportpdf(){
        $ss = Satu::all();

        view()->share('data',$ss);
        $pdf = Pdf::loadview('lembaga-pdf');
        $pdf ->setPaper('A0','landscape');
        return $pdf->download('lembaga.pdf');
    }

}
