@extends('layouts.app')
@section('content4')
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>مركز طبي</title>
   <link rel="stylesheet" href="Admin_S_Add.css">
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
</head>
<style>
   /*********Sub Header*********/
   #subheader {
      /*width: 100%;*/
      height: 50px;
      color: #fff;
      font-size: 28px;
      margin-bottom: 5%;
      background: #38d39f;
      padding-right: 5%;
      line-height: 50px;
      text-align: right;
   }

   legend {
      text-align: right;
   }

   section {
      margin: 30px;
      font-weight: bold;
      font-size: 24px;

   }

   fieldset {
      padding: 40px;
      display: block;
      margin: 0% 35%;
      border-radius: 15px;
      text-align: right;

   }

   input,
   select {
      font-weight: normal;
      margin-bottom: 10%;
      padding: 1% 5%;
      direction: rtl;
      border-radius: 5px;
      font-size: 20px;
      text-align: right;

   }

   label {
      display: block;
      margin-bottom: 1%;
      text-align: right;

   }

   .btn {
      float: left;
      cursor: pointer;
      font-size: 24px;
      padding: 5px 25px;
      margin-left: 35%;
      margin-top: 1%;
      background-color: #fff;
   }

   .btn:hover {
      border: 3px solid #38d39f;
   }
</style>

<body>


   <!--Sub-Header-->
   <div id="subheader">صفحة التحكم > مواعيد العيادة > إضافة موعد</div>
   <!---->
   <section>
      <form method="post" action="{{url('/date')}}">
         @csrf
         <fieldset>
            <legend>إضافة مواعيد جديدة</legend>
            <label>اسم الطبيب</label>
            <select name="doctor_id">
               @foreach($doctor as $doc)
               <option value="{{ $doc ->id}}">{{ $doc -> full_name}}</option>
               @endforeach
            </select>
            <label>اليوم الموافق</label>
            <input type="text" name="day">
            <label>وقت البداية</label>
            <input type="time" name="start_time">
            <label>وقت النهاية</label>
            <input type="time" name="end_time">
         </fieldset>
         <button class="btn" type="submit">حفظ</button>
      </form>
   </section>

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

</html>
@endsection