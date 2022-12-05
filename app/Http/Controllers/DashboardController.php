<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\satu;
use App\Models\post;
use App\Models\tiga;
use App\Models\empat;
use App\Models\lima;

class DashboardController extends Controller
{
    public function index(satu $satu){
        $posts = Satu::count();
        $pp = Satu::all();

        // s
        $z = Satu::where('type_koperasi','Syariah')->count();
        $zz = Satu::where('type_koperasi','Konvensional')->count();


        $q = Satu::where('status_service_gwlite','Up')->count();
        $qq = Satu::where('status_service_gwlite','Down')->count();
        $qqq = Satu::where('status_service_gwlite','Tidak Ada')->count();

        $w = Satu::where('status_service_gwlkm','Up')->count();
        $ww = Satu::where('status_service_gwlkm','Down')->count();
        $www = Satu::where('status_service_gwlkm','Tidak Ada')->count();

        $e = Satu::where('status_service_ereg','Up')->count();
        $ee = Satu::where('status_service_ereg','Down')->count();
        $eee = Satu::where('status_service_ereg','Tidak Ada')->count();

        $r = Satu::where('status_service_marketplace','Up')->count();
        $rr = Satu::where('status_service_marketplace','Down')->count();
        $rrr = Satu::where('status_service_marketplace','Tidak Ada')->count();

        $t = Satu::where('status_va','Up')->count();
        $tt = Satu::where('status_va','Down')->count();
        $ttt = Satu::where('status_va','Tidak Ada')->count();

        $y = Satu::where('status_kartu_santri','Up')->count();
        $yy = Satu::where('status_kartu_santri','Down')->count();
        $yyy = Satu::where('status_kartu_santri','Tidak Ada')->count();

        $u = Satu::where('status_mikropay','Up')->count();
        $uu = Satu::where('status_mikropay','Down')->count();
        $uuu = Satu::where('status_mikropay','Tidak Ada')->count();

        $i = Satu::where('status_qris','Up')->count();
        $ii = Satu::where('status_qris','Down')->count();
        $iii = Satu::where('status_qris','Tidak Ada')->count();
        // 
        $ref = Post::all()->where('id_ref_produk', $satu['ref_produk'])->count();
        
        // foreach($ref as $p){
        //     $ref -> deskripsi_ref_produk
        // }
        // 
        $pot = Post::all();
        $tiga = Tiga::all();
        $em = Empat::all();
        $lim = Lima::all();
        // 
            



        return view('dashboard.index', compact(
            'posts',
            'q',
            'qq',
            'w',
            'ww',
            'e',
            'ee',
            'r',
            'rr',
            't',
            'tt',
            'y',
            'yy',
            'u',
            'uu',
            'i',
            'ii',
            'qqq',
            'www',
            'eee',
            'rrr',
            'ttt',
            'yyy',
            'uuu',
            'iii',
            'pot',
            'ref',
            'pp',
            'tiga',
            'em',
            'lim',
            'z',
            'zz'
        ));
    }
}