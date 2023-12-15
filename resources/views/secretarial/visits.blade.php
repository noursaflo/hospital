@extends('layouts.app')
@section('content5')
<style>
   /*********Sub Header*********/
   #subheader {
      /*width: 100%;*/
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
      display: block;
   }

   .title_table {
      margin-bottom: 2%;
      text-align: center;
   }

   select {
      font-weight: normal;
      padding: 1% 5%;
      direction: rtl;
      border-radius: 5px;
      font-size: 20px;
      text-align: right;

   }
</style>

<body>
   <!--Sub-Header-->
   <div id="subheader">صفحة السكرتاريا > مواعيد الزيارات</div>

   <!---->
   <section>
      <h1 class="title_table">المواعيد</h1>
      <table class="content-table">
         <thead>
            <tr>
               <th>الفعل</th>
               <th>ملاحظات</th>
               <th>تأكيد الحجز</th>
               <!-- <th>النوع</th> -->
               <th>تاريخ الموعد</th>
               <th>العيادة</th>
               <th>اسم المريض</th>
               <th>رقم الحجز</th>
            </tr>
         </thead>
         <tbody>
            @foreach($visits as $visit)
            <tr>
               <td class="icon">
                  <a href="delete_visit/{{$visit->id}}"><i class="far fa-trash-alt" style="color: red"></i></a>
               </td>
               <td>{{$visit->notes}}</td>
               <td>
                  <form method="post" action="is_complete/{{$visit->id}}">
                     @csrf
                     <select name="is_complete" onchange="this.form.submit()">
                        <option value="0" {{($visit->is_complete==0)?'selected':null}}>نعم</option>
                        <option value="1" {{($visit->is_complete==1)?'selected':null}}>لا</option>
                     </select>
                  </form>
               </td>

               <!-- <td>{{$visit->visit_type}}</td> -->
               <td>{{$visit->visit_date}}</td>
               <td>{{$visit->specialization}}</td>
               <td>{{$visit->full_name}}</td>
               <td> {{$loop->index+1}}</td>
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