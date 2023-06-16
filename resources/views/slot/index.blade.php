@extends('layouts.app')

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
@section('content')
    <header>
      <h1>スロット</h1>
      <p class="money" id="money">貯玉</p>
      @guest
      <div class = "login">
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                        </div>
                        <div class = "logout">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('login') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
</div>

    </header>
        <div class="image" id="threeNumber">
          <img class="leftImg" id="leftImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
          <img class="centerImg" id="centerImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
          <img class="rightImg" id="rightImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
          <!-- <img class="piero" id="piero" src="https://3.bp.blogspot.com/-XPnqDnX2P8c/UZRWk-I9jeI/AAAAAAAASvQ/2ltSBFcsENA/s800/aprilfool_piert_face.png"></img> -->
        </div>

        <div class="stopButton">
          <button class="leftStop" id="leftStop">STOP</button>
          <button class="centerStop" id="centerStop">STOP</button>
          <button class="rightStop" id="rightStop">STOP</button>
        </div>

        <img class="startButton" id="startButton" src="https://1.bp.blogspot.com/-UsDBghnTkkE/VvpdnBu-nuI/AAAAAAAA5Rc/CKqATAWvfkMpU7sNaJIhySDOmR5HPyJ6A/s800/button_start1.png"></img>
        <!-- <button class="startButton" id="startButton"><img src="https://3.bp.blogspot.com/-fFUY85vORJg/Vvpdoan991I/AAAAAAAA5Rg/adywSGA7HBQ_Y2FmZWwDJtUwI-tJbz5eQ/s800/button_start2.png"><img></button> -->
    
        <img class="resetButton" id="resetButton" src="https://2.bp.blogspot.com/-cp5f6mhUcSw/Vla-Gu0ZtmI/AAAAAAAA1CU/8q2cAji1H8s/s800/reset_buttn_off.png"></img>
        
        @extends('layouts.footer')

  </body>
</html>

