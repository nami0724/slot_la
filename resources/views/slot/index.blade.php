@extends('layouts.app')
@include('layouts.header')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SLOT</title>
        <link rel="stylesheet" href="/css/style.css" >
        <script src="{{ asset('js/slot.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
   
@yield('header')
    <body>
        <div class="image" id="threeNumber">
          <img class="leftImg" id="leftImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
          <img class="centerImg" id="centerImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
          <img class="rightImg" id="rightImg" src="https://1.bp.blogspot.com/-5ZKfHE46N_w/U9zsZKNSJwI/AAAAAAAAkdI/EgZ4lm7z3UE/s1600/number_7.png" width="200px" height="200"></img>
        </div>

        <div class="stopButton">
          <button class="leftStop" id="leftStop">STOP</button>
          <button class="centerStop" id="centerStop">STOP</button>
          <button class="rightStop" id="rightStop">STOP</button>
        </div>

        <img class="startButton" id="startButton" src="https://1.bp.blogspot.com/-UsDBghnTkkE/VvpdnBu-nuI/AAAAAAAA5Rc/CKqATAWvfkMpU7sNaJIhySDOmR5HPyJ6A/s800/button_start1.png"></img>    
        <img class="resetButton" id="resetButton" src="https://2.bp.blogspot.com/-cp5f6mhUcSw/Vla-Gu0ZtmI/AAAAAAAA1CU/8q2cAji1H8s/s800/reset_buttn_off.png"></img>
        
        <script>
            $(function(){
                $('#rightStop').on('click',function(){
                    $.ajax({
                        url: '/ajax/points',
                        type: 'GET',
                        dataType: 'json',
                        data:{ "point" : $("#money").val() }

                    }).done(function(data){
                        $('#money').html(+"球");
                        <h2>{[ $money->point]}</h2>
                    });
                    })
                })
        </script>
@yield('footer')
    </body>
</html>

