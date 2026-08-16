<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coachtech_FreeMarket2</title>
    
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/head.css') }}">
    @yield('css')
    
</head>
<body>

    <div class="heading">
        <div class="heading_logo">
            <img src="{{ asset('storage/img/COACHTECHヘッダーロゴ.png') }}" alt="COACHTECHロゴ">
        </div>
    </div>
    

    @yield('content')

</body>
</html>