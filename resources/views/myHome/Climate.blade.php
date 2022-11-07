@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">
    <div class="row">
        <!-- Appliances  START -->

        @foreach ($coolers as $cooler )
        <div class="col-sm-12 col-md-6">
            <!-- Living room temperature  START -->
            <div class="card active" data-unit="room-temp-02">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Thermometer.svg') }}" alt="Cameras">

                        <h5>{{ $cooler->persianName }}</h5>
                        <h5 class="ml-auto status">{{ $cooler->currentTemperature }}<sup>°C</sup></h5>
                    </li>
                </ul>
                <hr class="my-0">
                <div class="d-flex justify-content-between" data-rangeslider="room-temp-0{{$cooler->id}}">
                    <ul class="list-group borderless px-1 align-items-stretch">
                        <li class="list-group-item">
                            <p class="specs mr-auto mb-auto">دمای دلخواه</p>
                        </li>
                        <li class="list-group-item d-flex flex-column pb-4">
                            <p class="mr-auto mt-2 mb-0 display-5">
                                <span class="room-temp-F">{{ $cooler->desiredTemperature }}</span><sup>°C</sup>
                            </p>

                        </li>
                    </ul>
                    <div class="p-4" style="position:relative;">
                        <form action="{{route('coolerDesiredTemperatureUpdate',$cooler->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="range" name="desiredTemperature" class="form-range room-temp" id="room-temp-0{{ $cooler->id }}" min="19" max="30" step="1" value="24" data-orientation="vertical" onchange="this.form.submit()">
                            <input id="currentTemperature" name="currentTemperature" value={{ $cooler->currentTemperature }} hidden>
                            <input id="status" name="status" value={{ $cooler->status }} hidden>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Living room temperature  END -->
        </div>
        @endforeach


        @foreach ($fans as $fan)
        <div class="col-sm-12 col-md-6">
            <!-- FAN Kitchen  START -->
            <div class="card active" data-unit="{{ $fan->name }}">
                <!-- FAN Kitchen switch START -->
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Fan.svg') }}" alt="Cameras">

                        <h5>{{ $fan->persianName }}</h5>
                        <label class="switch ml-auto checked">
                            <form action="{{route('fanUpdateStatus',$fan->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" id="{{ $fan->name }}" {{ $fan->status === '1' ? 'checked' : '' }} onchange="this.form.submit()">
                                <input id="status" name="status" value={{ $fan->status }} hidden>
                            </form>
                        </label>
                    </li>
                </ul>
                <!-- FAN Kitchen switch END -->
                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">وضعیت اتصال</p>
                            <p class="ml-auto mb-0 text-success">متصل</p>
                        </li>
                    </ul>
                    <!-- Speed control - range slider START -->
                    <form action="{{route('fanSpeedUpdate',$fan->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <ul class="list-group borderless px-1" data-rangeslider="fan-0{{$fan->id}}">
                            <li class="list-group-item">
                                <p class="specs">سرعت</p>
                                <p class="ml-auto mb-0"><span class="range-output">3</span></p>
                            </li>
                            <li class="list-group-item pt-0 pb-4">

                                <input type="range" name="dimer" class="form-range" id="fan-0{{$fan->id}}" min='1' max='6' value="{{$fan->dim}}" onchange="this.form.submit()">
                            </li>
                        </ul>
                    </form>

                    <!-- Speed control - range slider END -->
                </div>
            </div>
            <!-- FAN Kitchen END -->
        </div>
        @endforeach
    </div>


</div>
@endsection
