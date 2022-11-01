@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">




    <!-- Interior lights START -->
    <div class="row" data-unit-group="switch-lights-in">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- ON/OFF all interior lights  START -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">لامپ های داخل</h3>
                </div>
                <hr class="my-0">
                <div class="card-body">
                    <div class="lights-controls" data-controls="switch-lights-in">
                        <button data-action="all-on" type="button" class="btn btn-secondary lights-control">همه <strong>روشن</strong></button>
                        <button data-action="all-off" type="button" class="btn btn-primary lights-control">همه <strong>خاموش</strong></button>
                    </div>
                </div>
            </div>
            <!-- ON/OFF all interior lights  END -->
        </div>
        @foreach ($inLamps as $inLamp)

        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-{{$inLamp->id}}">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>{{ $inLamp->persianName }}</h5>
                    <label class="switch ml-auto checked">

                        <form action="{{route('inLampUpdateStatus',$inLamp->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" id="switch-light-{{$inLamp->id}}" {{ $inLamp->status === '1' ? 'checked' : '' }} onchange="this.form.submit()">
                            <input id="status" name="status" value={{ $inLamp->status }} hidden>
                        </form>
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">{{ $inLamp->connectionStatus == '1' ? 'متصل' : 'قطع' }}</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">{{$inLamp->powerConsumption}}W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">{{ $inLamp->voltageRange }}V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">{{ $inLamp->dailyAvrage }}h</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <form action="{{route('inLampUpdateDim',$inLamp->id)}}" method="POST">
                    @csrf
                    @method('PATCH')


                    <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-{{$inLamp->id}}">
                        <li class="list-group-item">
                            <p class="specs">قدرت</p>
                            <p class="ml-auto mb-0"><span class="range-output">{{ $inLamp->dim }}</span>%</p>
                        </li>
                        <li class="list-group-item pt-0 pb-4">
                            <input type="range" name="dimer" value="{{ $inLamp->dim }}" class="form-range" id="dimmer-light-{{$inLamp->id}}" onchange="this.form.submit()">

                        </li>
                    </ul>
                </form>

                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>

        @endforeach
    </div>
    <!-- Interior lights END -->
    <hr class="my-2">


    <!-- Exterior lights START -->
    <div class="row">
        <div class="col-12">
            <div class="card" data-unit-group="switch-lights-ex">

                <div class="card-body">
                    <div class="d-flex flex-column flex-sm-row justify-content-start">
                        <h3 class="card-title">لامپ های بیرون</h3>

                    </div>
                </div>

                <hr class="my-0">
                <div class="card-body">
                    <div class="row">
                        @foreach ($outLamps as $outLamp)
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="p-sm-3" data-unit="switch-light-{{$outLamp->id}}">
                                <!-- Light switch START -->
                                <div class="d-flex flex-row justify-content-start py-3">
                                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                                    <h5>{{$outLamp->persianName}}</h5>

                                    <label class="switch ml-auto">
                                        <form action="{{route('outLampUpdateStatus',$outLamp->id)}}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="checkbox" id="switch-light-{{$outLamp->id}}" {{ $outLamp->status == '1' ? 'checked' : '' }} {{ $outLamp->connectionStatus == '0' ? 'disabled' : '' }} onchange="this.form.submit()" {{ $outLamp->status == '1' ? 'checked' : '' }}>
                                            <input id=" status" name="status" value={{ $outLamp->status }} hidden>

                                        </form>
                                    </label>
                                </div>
                                <!-- Light switch END -->
                                <hr class="my-0">
                                <!-- Bulb details START -->
                                <ul class="list-group borderless">
                                    <li class="list-group-item px-2">
                                        <p class="specs">وضعیت اتصال</p>
                                        @if ($outLamp->connectionStatus == '1')
                                        <p class="ml-auto mb-0 text-success">وصل</p>
                                        @else
                                        <p class="ml-auto mb-0 text-danger">قطع</p>
                                        @endif
                                    </li>
                                    <li class="list-group-item pt-0 px-2">
                                        <p class="specs">مصرف برق</p>
                                        <p class="ml-auto mb-0">{{$outLamp->powerConsumption}}W</p>
                                    </li>
                                    <li class="list-group-item pt-0 pb-4 px-2">
                                        <p class="specs">محدوده ولتاژ</p>
                                        <p class="ml-auto mb-0">{{ $outLamp->voltageRange }}V</p>
                                    </li>
                                </ul>
                                <!-- Bulb details END -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Exterior lights END -->
</div>
@endsection
