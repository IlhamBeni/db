<?php

namespace App\Http\Controllers;

use App\Models\satu;
use App\Models\post;
use App\Models\tiga;
use App\Models\empat;
use App\Models\lima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

use function GuzzleHttp\Promise\each;

class DashboardSatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Satu::all();

        return view('dashboard/satus/satu', compact('posts'));
        // return view('dashboard/satus/satu', [
        //     'posts' => Satu::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(satu $satu)
    {   
        $z = Satu::find($satu)->where('type_koperasi');
        $w = Satu::find($satu)->where('status_service_gwlite');
        $a = Satu::find($satu)->where('status_service_gwlkm');
        $b = Satu::find($satu)->where('status_service_ereg');
        $c = Satu::find($satu)->where('status_service_marketplace');
        $d = Satu::find($satu)->where('status_va');
        $e = Satu::find($satu)->where('status_kartu_santri');
        $f = Satu::find($satu)->where('status_mikropay');
        $g = Satu::find($satu)->where('status_qris');

        return view('dashboard.satus.create', [
            'posts' => Post::all(),
            'tiga' => Tiga::all(),
            'empat' => Empat::all(),
            'lima' => LIma::all(),
            'w' => $w,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'f' => $f,
            'g' => $g,
            'z' => $z
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, satu $satu)
    {
        Satu::create($request->all());

        // $validatedData = $request->validate([
        //     'id_app_lembaga ' => 'required',
        //     'ref_produk' => 'required',
        //     'sub_domain' => 'required',
        //     'nama_database' => 'required',
        //     'user_database' => 'required',
        //     'nama_lembaga' => 'required',
        //     'server_service' => 'required',
        //     'kode_lkm' => 'required',
        //     'type_koperasi' => 'required',
        //     'template_ibslite' => 'required',
        //     'port' => 'required',
        //     'tgl_setup' => 'required',
        //     'status_service_gwlite' => 'required',
        //     'status_service_gwlkm' => 'required',
        //     'status_service_ereg' => 'required',
        //     'status_service_marketplace' => 'required',
        //     'status_va' => 'required',
        //     'status_kartu_santri' => 'required',
        //     'status_mikropay' => 'required',
        //     'status_qris' => 'required',
        //     'alamat' => 'required',
        //     'kabupaten' => 'required',
        //     'provinsi' => 'required',
        //     'nama_pic' => 'required',
        //     'no_hp_pic' => 'required',
        //     'data_migrasi' => 'required',
        //     'status_pks' => 'required',
        //     'kode_ikm' => 'required',
        //     'kode_bon_va' => 'required',
        //     'client' => 'required',
        // ]);

        // Satu::create($validatedData);

        return redirect('/dashboard/satu')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function show(Satu $satu)
    {
        // dd($satu['id_app_lembaga']);
        
        // dd($satu);
        // $posts = Satu::findOrFail($satu)->where('id_app_lembaga');
        // $posts = Satu::findOrFail($satu)->where('id_app_lembaga');
        // $posts = Satu::find($satu);
        // $posts = DB::table('app_lembaga')->where('id', 1)->get();

        // dd($posts);
        // return view('dashboard.satus.show', [
        //     'posts' => Satu::find($satu)
        //     // 'posts' => $posts
        // ]);
        // return $satu;
        $posts = Satu::find($satu)->where('id_app_lembaga',$satu['id_app_lembaga']);
        // dd($posts);

        return view('dashboard.satus.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function edit(satu $satu)
    {
        // $aw = Satu::all();
        $w = Satu::find($satu)->where('status_service_gwlite');
        $a = Satu::find($satu)->where('status_service_gwlkm');
        $b = Satu::find($satu)->where('status_service_ereg');
        $c = Satu::find($satu)->where('status_service_marketplace');
        $d = Satu::find($satu)->where('status_va');
        $e = Satu::find($satu)->where('status_kartu_santri');
        $f = Satu::find($satu)->where('status_mikropay');
        $g = Satu::find($satu)->where('status_qris');
        $z = Satu::find($satu)->where('type_koperasi');
        
        return view('dashboard.satus.edit',[
            'satu' => $satu,
            'posts' => Post::all(),
            'tiga' => Tiga::all(),
            'empat' => Empat::all(),
            'lima' => Lima::all(),
            'w' => $w,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'f' => $f,
            'g' => $g,
            'z' => $z
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, satu $satu)
    {

        $validatedData = Satu::find($satu)->where('id_app_lembaga',$satu['id_app_lembaga']);

        // $users = $validatedData->makeHidden(['id_app_lembaga']);

        $validatedData->each->update($request->all());
        
        


        return redirect('/dashboard/satu')->with('success', 'Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\satu  $satu
     * @return \Illuminate\Http\Response
     */
    public function destroy(satu $satu)
    {
        $posts = Satu::find($satu)->where('id_app_lembaga',$satu['id_app_lembaga']);
        $posts->each->delete();

        return redirect('/dashboard/satu')->with('success', 'Berhasil Dihapus');
    }
}
