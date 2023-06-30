@extends('layouts.app')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SLOT</title>
        <link rel="stylesheet" href="/css/style.css" >
        <script src="{{ asset('js/slot.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <header>
      <h1>ログインしてください</h1>
    </header>
    <body>
          <div class = "login_2">
              <li class="nav-item_2">
                <a class="nav-link_2" href="{{ route('login') }}">{{ __('ログイン') }}</a>
              </li>

               <li class="nav-item_2">
                  <a class="nav-link_2" href="{{ route('register') }}">{{ __('新規登録') }}</a>
               </li>
           </div>
@yield('footer')
       

</body>
</html>

