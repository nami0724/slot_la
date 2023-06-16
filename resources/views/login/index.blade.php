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
    <h1>ログインしてください</h1>

    @section('footer')
        copyright 2020 tuyano.
        @endsection

