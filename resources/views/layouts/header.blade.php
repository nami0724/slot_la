@section('header')
@section('point', 'points.point')
@section('points')

    <header>
      <h1>スロット</h1>
      <p class="money" type="text" name="money" id="money" value="">貯玉</p>
      {!! form::hidden('id', $points->id) !!}
 
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
          </div>
            @else
          <div class = "logout">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} さん
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
@endsection