<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">
    <!--cssのフォルダ位置ファイル位置によって読み込み不可になる-->
    <link rel="stylesheet" href="{{ asset('css/common_header-attendance.css') }}">
    <link rel="stylesheet" href="">
</head>

<body>
    <div class="common_header">
        <p class="login_header">Atte</p>
        <ul class="login_header_list">
            <li class="login_header_list-item">ホーム</li>
            <li class="login_header_list-item">日付</li>
            <li class="login_header_list-item">ログアウト</li>
        </ul>
        </nav>
    </div>
    </div>
    <p>~~さんお疲れ様です！</p>
    <div class="main_content">
        <form action="/attendance/start" method="post" class="main_content-common">
            @csrf
            <input type="submit" id="work_start" class="main_content-button" name="work_start" value="勤務開始" onclick="Btn1()">
        </form>
        <form action="/attendance/end" method="post" class="main_content-common">
            @csrf
            <input type="submit" id="work_end" class="main_content-button" name="work_end" value="勤務終了" onclick="Btn2()" disabled>
        </form>
        <form action="" method="post" class="main_content-common">
            @csrf
            <input type="submit" id="start_time" class="main_content-button" name="start_time" value="休憩開始" onclick="Btn3()" disabled>
        </form>
        <form action="" method="post" class="main_content-common">
            @csrf
            
            <input type="submit" id="end_time" class="main_content-button" name="end_time" value="休憩終了" onclick="Btn4()" disabled>
        </form>
    </div>


    <div class="common_footer">
        <p class="login_footer">Atte,inc.</p>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>