<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'مركز طبي') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="fontawesome-free-5.12.0-web/css/all.min.css" rel="stylesheet" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
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

    .search {
        display: flex;
        font-size: 20px;
    }

    input {
        margin-left:5%;
        font-weight: normal;
        padding: 1% 1%;
        direction: rtl;
        border-radius: 5px;
        font-size: 20px;
        text-align: right;
    }
</style>

<body>
    <div id="app">
        @guest
        @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('دخول') }}</a>
        </li>
        @endif
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل دخول') }}</a>
        </li>
        @endif
    </div>
    @else
    <!--role=Manager-->
    @if( Auth::user()->role==1)
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <header>
        <nav>
            <ul>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}</a></li>
                <li><a href="/user.show">المستخدمين</a></li>
                <li><a href="/secret_show">السكرتاريا</a></li>
                <li><a href="/date">المواعيد</a></li>
                <li><a href="/clinic">العيادات</a></li>
                <li><a href="/doctor.show">الأطباء</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
            <h1>مركز طبي&nbsp;<i class="fas fa-heartbeat icon_love"></i></h1>
        </nav>
    </header>

    <!--content-->
    @yield('content1')
    @yield('content2')
    @yield('content3')
    @yield('content4')
    @yield('content5')
    @yield('content6')
    @yield('content7')
    @yield('content8')
    @yield('content9')
    @yield('content10')
    @yield('content11')
    @yield('content12')
    @yield('content13')
    @endif

    <!--role=Dector-->
    @if( Auth::user()->role==2)
    <header>
        <nav>
            <ul>
                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li> <a href="{{url('show_patients') }}">المرضى</a> </li>
                <li> <a href="{{url('my_dates') }}">المواعيد</a> </li>
            </ul>
            <div class="logo">
                <h1>مركز طبي&nbsp;<i class="fas fa-heartbeat icon_love"></i></h1>
            </div>
        </nav>
    </header>
    <!--content-->
    @yield('content1')
    @yield('content2')
    @yield('content3')
    @yield('content4')
    </div>
    @endif

    <!--role=secretara-->
    @if( Auth::user()->role==3)
    <header>
        <nav>
            <ul>
                <li> <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('خروج') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li> <a href="add_patient">إضافة مريض </a> </li>
                <li> <a href="visits"> مواعيد الزيارات</a> </li>
                <li> <a href="add_visit">حجز</a> </li>
                <li> <a href="patient_search">المرضى</a> </li>
            </ul>
            <form method="post" action="{{url('patient_search')}}">
                @csrf
                <div class="search">
                    <button type="submit"><i class="fas fa-search"> </i></button>
                    <input type="text" name="patient_search" placeholder="بحث عن مريض">
                </div>
            </form>
            <div class="logo">
                <h1>مركز طبي&nbsp;<i class="fas fa-heartbeat icon_love"></i></h1>
            </div>
        </nav>
    </header>
    <!--content-->
    @yield('content1')
    @yield('content2')
    @yield('content3')
    @yield('content4')
    @yield('content5')
    @yield('content6')
    @endif

    <!--role=user-->
    @if( Auth::user()->role==4)
    <a class="logo" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        {{ __('خروج') }}</a>
    {{__('عزيزي المستخدم  عليك الانتظار حتى يتم منحك الصلاحية الخاصة بك حتى تتمكن من الدخول للموقع ')}}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    @endguest
    @endif
    <main>
        @yield('content')
    </main>
</body>

</html>