@extends('layouts.app')

@section('content')
    <canvas id="canvas" width="640" height="360"></canvas>
    <video id="video" width="640" height="360" style="display:none" autoplay></video>

    <!-- you can add style="display: none" to the video tag -->

    <div id="message">Loading...</div>

    <div id="fullscreen">
        <button id="button" onclick="fullscreen();">Toggle fullscreen</button>
    </div>
@endsection


@section('pagescript')
    <script src="{{ asset('js/free.js') }}"></script>
@endsection
