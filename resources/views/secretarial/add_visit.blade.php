@extends('layouts.app')
@section('content4')
<html>

<head>
   <meta charset="utf-8">
   <title>مركز طبي</title>
   <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
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
      select,
      textarea {
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

      @media(max-width:950px) {
         .add_but {
            font-size: 20px;
            margin: 5% 30% 0% 30%;
         }
      }

      @media(max-width:900px) {
         fieldset {
            margin-left: 20%;
            margin-right: 20%;
         }

         input {
            padding-right: 10px;
         }
      }

      textarea {
         resize: none;
      }
   </style>
</head>

<body>
   <!--Sub-Header-->
   <div id="subheader">صفحة السكرتاريا > إضافة حجز</div>
   <!---->

   <section>
      <form method="post" action="{{url('visit_save')}}">
         @csrf
         <fieldset>
            <legend>إضافة حجز</legend>
            <label>اسم المريض</label>
            <select name="patient_id">
               @foreach($patients as $patient)
               <option value="{{$patient->id}}">{{$patient->full_name}}</option>
               @endforeach
            </select>
            <label>العيادة</label>
            <select name="clinic_id">
               @foreach($clinics as $clinic)
               <option value="{{$clinic->id}}">{{$clinic->specialization}}</option>
               @endforeach
            </select>
            <label>الطبيب</label>
            <select name="doctor_id">

               @foreach($doctors as $doctor)

               <option value="{{$doctor->id}}">{{$doctor->full_name}}</option>
               @endforeach
            </select>
            <label>تاريخ الموعد</label>
            <input type="date" name="visit_date" value="{{date('Y-m-d', time())}}">
            <label>وقت الموعد</label>
            <input type="time" name="visit_time" value="{{date('h:i A',time())}}">
            <label>النوع</label>
            <select name="visit_type">
               <option value="1">زيارة جديدة</option>
               <option value="2">مراجعة</option>
            </select>
            <label> هل تمت الزيارة</label>
            <select name="is_complete">
               <option value="نعم">نعم</option>
               <option value="لا">لا</option>

            </select>
            <label>ملاحظات</label>
            <textarea name="notes" rows="5" id="message" placeholder="" required="" style="background-color: rgba(250,250,250,0.3);" dirct></textarea>
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
</body>

</html>
@endsection