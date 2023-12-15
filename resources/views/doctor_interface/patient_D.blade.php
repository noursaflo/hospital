@extends('layouts.app')
@section('content1')
<html>

<head>
   <meta charset="utf-8">
   <title>مركز طبي</title>
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
   <style>
      /*********Sub Header*********/
      #subheader {
         width: 100%;
         height: 50px;
         color: #fff;
         margin-bottom: 5%;
         background: #38d39f;
         font-size: 25px;
         padding: 0px 25px 0px 50px !important;
      }

      .left {
         line-height: 50px;
      }

      #subheader .row {
         display: flex;
         justify-content: space-between;
      }

      /*********End Header*********/

      section {
         padding: 1%;
         text-align: center;
         font-size: 20px;
         

      }

      input {
         direction: rtl;
         padding: 0.5% 5%;
         margin-bottom: 10%;
         text-align: right;
         font-weight: normal;
         border: 1px solid gray;
         margin-left: 1%;
      }

      label {
         margin-bottom: 1%;
         margin-left: 1%;
      }

      .content-table {
         width: 100%;
         font-size: 18px;
         min-width: 400px;
         overflow: hidden;
         border-collapse: collapse;
         border-radius: 15px 15px 0px 0px;
         box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }

      .content-table thead tr {
         color: #fff;
         text-align: center;
         font-weight: bold;
         background-color: #38d39f;
      }

      .content-table th,
      .content-table td {
         padding: 1.2% 0.8%;
      }

      .content-table tbody tr {
         border-bottom: 1px solid #dddddd;
         text-align: center;
      }

      .content-table tbody tr:nth-of-type(even) {
         background-color: #f3f3f3;
         color: #39d39f;
         font-weight: bold;
      }

      .content-table tbody tr:last-of-type {
         border-bottom: 2px solid #38d39f;
      }

      .icon a {
         padding: 3% 8%;
         margin: 0%;
         display: block;
      }

      .title_table {
         margin-bottom: 2%;
      }
   </style>
</head>

<body>
   <!--Sub-Header-->
   <div id="subheader">المرضى</div>
   <!---->
   <section>
      <form method="post" action="{{url('refresh')}}">
         @csrf
         <button type="submit"><i class="fas fa-sync"></i></button>
         <input type="date" name="date" value="{{date('Y-m-d', time())}}">
         
         <label>اختر التاريخ</label>
      </form>
      <h1 class="title_table">المرضى</h1>
      <table class="content-table">
         <thead>
            <tr>
               <th>التشخيص</th>
               <th>العنوان</th>
               <th>البريد الالكتروني</th>
               <th>رقم الهاتف</th>
               <th>وقت الحجز</th>
               <th>اسم المريض</th>
               <th>رقم المريض</th>
            </tr>
         </thead>
         <tbody>
            @foreach($patients as $patient)
            <tr>
               <td class="icon">
                  <a href="Patient_D_Diagnose/{{$patient->id}}"><i class="fas fa-eye" style="color: darkturquoise"></i></a>
                  <a href="patient_diagnose_add/{{$patient->id}}"><i class="fas fa-plus" style="color:red"></i></a>
               </td>
               <td>{{$patient->address}}</td>
               <td>{{$patient->email}}</td>
               <td>{{$patient->phone}}</td>
               <td>{{$patient->visit_time}}</td>
               <td>{{$patient->full_name}}</td>
               <td>{{$loop->index+1}}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
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
</body>

</html>
@endsection