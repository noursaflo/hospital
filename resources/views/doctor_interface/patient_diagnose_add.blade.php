@extends('layouts.app')
@section('content3')
<!DOCTYPE html>
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

      @media(max-width:900px) {
         fieldset {
            margin-left: 30%;
            margin-right: 30%;
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
   <div id="subheader">المرضى > إضافة تشخيص</div>
   <!---->
  
   <section>
      <form method="post" action="{{url('patient_diagnose_save')}}">
         @csrf
         <fieldset>
            <legend>إضافة تشخيص للمريض</legend>
            <input type="hidden" name="patient_id" value="{{$patient_id}}">
            <label>تاريخ التشخيص</label>
            <input type="date" name="date" value="{{date('Y-m-d', time())}}">
            <label>التشخيص</label>
            <input type="text" name="complaint">
            <label>الإجراءات المتخذة</label>
            <input type="text" name="solution">
            <label>ملاحظات</label>
            <textarea name="comments" rows="10" id="message" placeholder="" required="" style="background-color: rgba(250,250,250,0.3);" dirct></textarea>
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