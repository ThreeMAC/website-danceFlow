@extends('layouts.app')

@section('content')
    <div>Teachable Machine Pose Model</div>
    <button type="button" onclick="init()">Start</button>
    <div><canvas id="canvas"></canvas></div>
    <div id="label-container"></div>
@endsection

@section('pagescript')
    <script src="{{asset('js/googleLearning.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@1.3.1/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/pose@0.8/dist/teachablemachine-pose.min.js"></script>
@endsection
