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
        $z = Satu::where('type_koperasi','SYARIAH')->count();
        $zz = Satu::where('type_koperasi','KONVEN')->count();


        $q = Satu::where('status_service_gwlite','UP')->count();
        $qq = Satu::where('status_service_gwlite','DOWN')->count();
        $qqq = Satu::where('status_service_gwlite','TIDAK ADA')->count();

        $c = Satu::where('status_service_gwlite','UP')->count();
        $cc = Satu::where('status_service_gwlite','DOWN')->count();
        $ccc = Satu::where('status_service_gwlite','TIDAK ADA')->count();

        $w = Satu::where('status_service_gwlkm','UP')->count();
        $ww = Satu::where('status_service_gwlkm','DOWN')->count();
        $www = Satu::where('status_service_gwlkm','TIDAK ADA')->count();

        $e = Satu::where('status_service_ereg','UP')->count();
        $ee = Satu::where('status_service_ereg','DOWN')->count();
        $eee = Satu::where('status_service_ereg','TIDAK ADA')->count();

        $v = Satu::where('status_service_core','UP')->count();
        $vv = Satu::where('status_service_core','DOWN')->count();
        $vvv = Satu::where('status_service_core','TIDAK ADA')->count();

        $r = Satu::where('status_service_marketplace','UP')->count();
        $rr = Satu::where('status_service_marketplace','DOWN')->count();
        $rrr = Satu::where('status_service_marketplace','TIDAK ADA')->count();

        $t = Satu::where('status_va','UP')->count();
        $tt = Satu::where('status_va','DOWN')->count();
        $ttt = Satu::where('status_va','TIDAK ADA')->count();

        $y = Satu::where('status_kartu_santri','UP')->count();
        $yy = Satu::where('status_kartu_santri','DOWN')->count();
        $yyy = Satu::where('status_kartu_santri','TIDAK ADA')->count();

        $u = Satu::where('status_mikropay','UP')->count();
        $uu = Satu::where('status_mikropay','DOWN')->count();
        $uuu = Satu::where('status_mikropay','TIDAK ADA')->count();

        $i = Satu::where('status_qris','UP')->count();
        $ii = Satu::where('status_qris','DOWN')->count();
        $iii = Satu::where('status_qris','TIDAK ADA')->count();
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
            'zz',
            'c',
            'cc',
            'ccc',
            'v',
            'vv',
            'vvv',
        ));
    }
}