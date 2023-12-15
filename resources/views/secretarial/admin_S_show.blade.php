@extends('layouts.app')
@section('content11')
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <title>مركز طبي</title>
   <link rel="stylesheet" href="Admin_S.css">
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
</head>
<style>
   /*********Sub Header*********/
   #subheader {
      width: 100%;
      height: 50px;
      color: #fff;
      font-size: 28px;
      margin-bottom: 5%;
      background: #38d39f;
      line-height: 50px;
      text-align: right;
      padding-right: 5%;
   }

   /*********Section*********/
   section {
      padding: 1%;
   }

   section h1 {
      font-size: 28px;
   }

   .add_but {
      color: rgb(158, 146, 146);
      cursor: cell;
      font-size: 24px;
      padding: 5px 25px;
      background-color: #fff;
      float: left;
      margin: 1%;
   }

   .add_but:hover {
      color: black;
      border: 3px solid #38d39f;
   }

   .title_table {
      margin-bottom: 2%;
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
      padding: 1.0% 0.5%;
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
</style>

<body>

   <!--Sub-Header-->
   <div id="subheader">صفحة التحكم > السكرتاريا</div>
   <!---->
   <section>
      <h1 class="title_table">سكرتاريا المركز</h1>
      <a href="/secret"><button class="add_but">إضافة</button></a>
      <table class="content-table">
         <thead>
            <tr>
               <th>الفعل</th>
               <th>البريد الالكتروني</th>
               <th>العنوان</th>
               <th>رقم الجوال</th>
               <th>تاريخ الميلاد</th>
               <th>العمر</th>
               <th>الاسم </th>
               <th>رقم السكرتاريا</th>
            </tr>
         </thead>
         <tbody>
            @foreach($secret as $sec)
            <tr>
               <td class="icon">
                  <a href="/secretarial/{{$sec->id}}"><i class="far fa-trash-alt" style="color: red"></i></a>
                  <a href="/secretarial_update/{{$sec->id}}"><i class="far fa-edit" style="color: darkturquoise"></i></a>
               </td>
               <td>{{$sec->email}}</td>
               <td>{{$sec->address}}</td>
               <td>{{$sec->phone}}</td>
               <td>{{$sec->birthday}}</td>
               <td>{{\Carbon::parse($sec->birthday)->age}}</td>
               <td>{{$sec->full_name}}</td>
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