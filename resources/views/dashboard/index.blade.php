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
        <div class="card-body mb-0">
                Up 
            <h2>{{ $q }}</h2>

                Down 
            <h2>
                {{ $qq }}
            </h2>

                Tidak Ada 
            <h2>
                {{ $qqq }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Service Gwlite</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $w }}</h2>

                Down 
            <h2>
                {{ $ww }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $www }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Service Gwlkm</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $e }}</h2>

                Down 
            <h2>
                {{ $ee }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $eee }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Service Ereg</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $r }}</h2>

                Down 
            <h2>
                {{ $rr }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $rrr }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Marketplace</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $t }}</h2>

                Down 
            <h2>
                {{ $tt }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $ttt }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Va</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $y }}</h2>

                Down 
            <h2>
                {{ $yy }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $yyy }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Kartu Santri</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $u }}</h2>

                Down 
            <h2>
                {{ $uu }}
            </h2>
            Tidak Ada 
            <h2>
                {{ $uuu }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Mikropay</h2>
        </div>
    </div>
    </div>
</div>

<div class="col-xl-3 col-md-4">
    <div class="box">
    <div class="card bg-danger text-white mb-4">
        <div class="card-body mb-0">
                Up 
            <h2>{{ $i }}</h2>

                Down 
            <h2>
                {{ $ii }}
            </h2>
                Tidak Ada 
            <h2>
                {{ $iii }}
            </h2>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <h2 href="" class="small text-white stretched-link" style="text-decoration: none;">Status Qris</h2>
        </div>
    </div>
    </div>
</div>

</div>
    </div>
    </div>
</div>
@endsection