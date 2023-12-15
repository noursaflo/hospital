<!DOCTYPE html>
<html>

<head>
    <title>مركز طبي</title>
    <link rel="stylesheet" href="Dector_details.css">
    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <style>
        *,
        body,
        html,
        header {
            margin: 0;
            padding: 0;
            text-align: center;
            box-sizing: border-box;
            font: 1.03em "open sans"sans-serif;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: rgb(158, 146, 146);
        }

        a:hover {
            color: #000000;
        }

        /*header*/
        header {
            width: 100%;
            height: 84px;
            font-size: 30px;
        }

        .icon_love {
            color: rgb(207, 30, 30);
        }

        nav {
            color: #000;
            width: 100%;
            height: 84px;
            display: flex;
            padding: 10px;
            position: fixed;
            padding-right: 5%;
            align-items: center;
            background-color: white;
            justify-content: space-between;
            border-top: solid 8px #38d39f;
            border-bottom: solid 5px #3f3c3c;
        }

        nav>ul>li {
            padding: 20px;
            align-items: center;
            display: inline-block;
        }

        /*Footer*/
        footer {
            color: #fff;
            margin-top: 5%;
            font-size: 20px;
            text-align: center;
        }

        .information {
            width: 100%;
            background-color: #3f3c3c;
        }

        .information ul li {
            padding: 1%;
            text-align: right;
            display: inline-block;
        }

        .information ul li p {
            font-size: 16px;
        }

        .icon-footer {
            font-size: 30px;
            margin-right: 60px;
        }

        .end {
            width: 100%;
            padding: 0.5%;
            background-color: #38d39f;
        }

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


        /*********End Header*********/

        section {
            font-size: 20px;
            font-weight: bold;
        }

        fieldset {
            padding: 5%;
            margin: 5% 15%;
            text-align: right;
            border-radius: 15px 15px 15px 15px;
        }

        .input {
            padding: 1% 5%;
            margin-bottom: 5%;
            font-weight: normal;
            border: 1px solid gray;
        }

        label {
            display: block;
            margin-bottom: 0.5%;
        }

        .content-table {
            width: 100%;
            font-size: 18px;
            min-width: 300px;
            overflow: hidden;
            border-collapse: collapse;
            border-radius: 15px 15px 0px 0px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table caption {
            margin-bottom: 1%;
        }

        .content-table thead tr {
            color: #fff;
            text-align: center;
            font-weight: bold;
            background-color: #38d39f;
            direction: rtl;
        }

        .content-table th,
        .content-table td {
            text-align: right;
            padding: 1.2% 0.8%;
        }

        .content-table td {
            font-weight: normal;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
            color: #38d39f;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <nav class="menu">
            <ul id="rmenu">

            </ul>
            <h1>مركز طبي&nbsp;<i class="fas fa-heartbeat icon_love"></i></h1>
        </nav>
    </header>
    <!--Sub-Header-->
    <div id="subheader">أطباء العيادة</div>
    <!---->
    <section>
        @foreach($doctors as $doctor)
        <form>
            <fieldset>
                <legend></legend>
                <div class="DectorInfo">
                    <label>اسم الطبيب</label>
                    <label class="input">{{$doctor->full_name}}</label>
                    <label>معلومات الطبيب</label>
                    <label class="input">{{$doctor->experience}}</label>
                </div>
                <table class="content-table">
                    <caption>مواعيد الطبيب</caption>
                    <thead>
                        <tr>
                            <th>وقت النهاية</th>
                            <th>وقت البداية</th>
                            <th>اليوم</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dates as $date)
                        @if($date->doctor_id==$doctor->id)
                        <tr>

                            <td>{{$date->end_time}}</td>
                            <td>{{$date->start_time}}</td>
                            <td>{{$date->day}}</td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>

            </fieldset>
        </form>
        @endforeach
        <footer>
            <div class="mail_section">
                <ul>
                    <li>العنوان<p>حلب الجديدة جانب مشفى الشهباء</p>
                    </li>
                    <li><i class="fas fa-map-marker-alt icon-f"></i></li>
                    <li>رقم المركز<p>0999999999</p>
                    </li>
                    <li><i class="fas fa-phone icon-f"></i></li>
                </ul>
            </div>
            <div class="end_section">
                <span>الحقوق محفوظة لعام 2021 ©</span>
        </footer>

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