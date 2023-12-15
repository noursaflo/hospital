@extends('layouts.app')
@section('content5')
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

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
    <div id="subheader">صفحة التحكم > الأطباء > إضافة</div>
    <section>
        <form method="POST" action="{{url('add_doctor_save')}}">
            @csrf
            <fieldset>
                <legend>إضافة طبيب جديد</legend>
                <label>العيادة</label>
                <select name="clinic_id">
                
                </select>

                <label>اسم الطبيب</label>
                <input type="text" name="full_name" value="{{old('full_name')}}" />
               

                <label>تاريخ الميلاد</label>
                <input type="text" name="birthday" />
               

                <label>رقم الهاتف</label>
                <input type="text" name="Phone" />

                <label>التخصص</label>
                <input type="text" name="specialization" />

                <label>الخبرة</label>
                <input type="text" name="experience" />

                <label>العنوان</label>
                <input type="text" name="Address" />

                <label>البريد الالكتروني</label>
                <input type="email" name="email" />
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
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
</body>
@endsection