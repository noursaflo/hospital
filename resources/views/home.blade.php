@extends('layouts.app')
@section('content')
<style>
    img {
        padding: 2% 0%;
        width: 60%;
        height: 600px;
        border-radius: 100px;
    }
</style>

<!--role=Manager-->
@if( Auth::user()->role==1)
<img src="images/Manager.jpg" />
@endif
@if( Auth::user()->role==2)
<img src="images/Doctor.jpg" />
@endif
@if( Auth::user()->role==3)
<img src="images/S.jpg" />
@endif

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<footer>
    <div class="information">
        <ul>
            <li>العنوان<p>حلب الجديدة جانب مشفى الشهباء</p>
            </li>
            <li><i class="fas fa-map-marker-alt icon-f"></i></li>
            <li>رقم المركز<p>0999999999</p>
            </li>
            <li><i class="fas fa-phone icon-footer"></i></li>
        </ul>
    </div>
    <div class="end">
        <span>الحقوق محفوظة لعام 2021 ©</span>
</footer>
@endsection