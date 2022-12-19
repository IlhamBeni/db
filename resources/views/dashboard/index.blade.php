@extends('dashboard.layout.main')

@section('abc')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

</div>
<div class="row">

<div class="col-xl-3 col-md-6">
    <div class="box">
    <div class="small-box bg-primary text-white mb-4">
        <style>
            .box{
                box-shadow: 10px 10px;
                border-radius: 5px;
            }
        </style>
        <div class="inner mb-0">
            Total Lembaga
            <h2 >{{ $posts }}</h2>
        </div>
        <div class="icon">
            <i class="h2" style="width: 85px; ">
            <ion-icon name="business-outline"></ion-icon>
            </i>
        </div>
            <a href="/dashboard/satu" class="small-box-footer text-white stretched-link" style="text-decoration: none;">Click For Detail <i class="fa fa-arrow-circle-right"></i> </a>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-6">
    <div class="box">
    <div class="small-box bg-success text-white mb-4">
        <style>
            .box{
                box-shadow: 10px 10px;
                border-radius: 5px;
            }
        </style>
        <div class="inner mb-0">
            Syariah
            <h2 >{{ $z }}</h2>
            Konvensional
            <h2 >{{ $zz }}</h2>
        </div>
        <div class="icon">
            <i class="h2" style="width: 85px; ">
            <ion-icon name="business-outline"></ion-icon>
            </i>
        </div>
            <a class="small-box-footer text-white stretched-link" style="text-decoration: none;">Type Koperasi </a>
    </div>
    </div>
</div>



</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Status</h1>
</div>
<div class="row">

<div class="col-xl-3 col-md-4">
    <div class="box">

    <div class="card bg-danger text-white mb-4">
        <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
        <a class="text-white stretched-link h4" style="text-decoration: none;"><b>Status Service Gwlite</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2>
                 <b>{{ $q }}</b>
            </h2>

                Down
            <h2>
                 <b>{{ $qq }}</b>
            </h2>

                Tidak Ada
            <h2>
                <b>{{ $qqq }}</b>
            </h2>
        </div>

    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Service Gwlkm</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $w }}</b></h2>

                Down
            <h2>
                <b>{{ $ww }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $www }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Service Ereg</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $e }}</b></h2>

                Down
            <h2>
                <b>{{ $ee }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $eee }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Service Marketplace</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $r }}</b></h2>

                Down
            <h2>
                <b>{{ $rr }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $rrr }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Va</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $t }}</b></h2>

                Down
            <h2>
                <b>{{ $tt }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $ttt }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Kartu Santri</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $y }}</b></h2>

                Down
            <h2>
                <b>{{ $yy }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $yyy }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Mikropay</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $u }}</b></h2>

                Down
            <h2>
                <b>{{ $uu }}</b>
            </h2>
            Tidak Ada
            <h2>
                <b>{{ $uuu }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Qris</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $i }}</b></h2>

                Down
            <h2>
                <b>{{ $ii }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $iii }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Service Gwibslite</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $c }}</b></h2>

                Down
            <h2>
                <b>{{ $cc }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $ccc }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
    <div class="card-header d-flex align-items-center justify-content-between bg-red small-box">
            <a class="text-white stretched-link h4" style="text-decoration: none;"> <b>Status Service Core</b></a>
    </div>
        <div class="card-body mb-0">
                Up
            <h2><b>{{ $v }}</b></h2>

                Down
            <h2>
                <b>{{ $vv }}</b>
            </h2>
                Tidak Ada
            <h2>
                <b>{{ $vvv }}</b>
            </h2>
        </div>
    </div>
    </div>
</div>

</div>
    </div>
    </div>
</div>
@endsection
