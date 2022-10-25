@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">
    <div class="row">
        <!-- Appliances  START -->
        <div class="col-sm-12 col-md-6">
            <!-- Living room temperature  START -->
            <div class="card active" data-unit="room-temp-02">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Thermometer.svg') }}" alt="Cameras">

                        <h5>هال</h5>
                        <h5 class="ml-auto status">71.2<sup>°C</sup></h5>
                    </li>
                </ul>
                <hr class="my-0">
                <div class="d-flex justify-content-between" data-rangeslider="room-temp-02">
                    <ul class="list-group borderless px-1 align-items-stretch">
                        <li class="list-group-item">
                            <p class="specs mr-auto mb-auto">دمای دلخواه</p>
                        </li>
                        <li class="list-group-item d-flex flex-column pb-4">
                            <p class="mr-auto mt-2 mb-0 display-5">
                                <span class="room-temp-F">24</span><sup>°C</sup>
                            </p>

                        </li>
                    </ul>
                    <div class="p-4" style="position:relative;">
                        <input type="range" class="form-range room-temp" id="room-temp-02" min="19" max="30" step="1" value="24" data-orientation="vertical">

                    </div>
                </div>
            </div>
            <!-- Living room temperature  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Bedroom temperature  START -->
            <div class="card" data-unit="room-temp-01">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Thermometer.svg') }}" alt="Cameras">

                        <h5>اتاق خواب</h5>
                        <h5 class="ml-auto status">24<sup>°C</sup></h5>
                    </li>
                </ul>
                <hr class="my-0">
                <div class="d-flex justify-content-between" data-rangeslider="room-temp-01">
                    <ul class="list-group borderless px-1 align-items-stretch">
                        <li class="list-group-item">
                            <p class="specs mr-auto mb-auto">دمای دلخواه</p>
                        </li>
                        <li class="list-group-item d-flex flex-column pb-4">
                            <p class="mr-auto mt-2 mb-0 display-5">
                                <span class="room-temp-F">24</span><sup>°C</sup>
                            </p>

                        </li>
                    </ul>
                    <div class="p-4" style="position:relative;">

                        <input type="range" class="form-range room-temp" id="room-temp-01" min="19" max="30" step="1" value="24" data-orientation="vertical">


                    </div>
                </div>
            </div>
            <!-- Bedroom temperature  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- FAN Kitchen  START -->
            <div class="card active" data-unit="fan-kitchen">
                <!-- FAN Kitchen switch START -->
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Fan.svg') }}" alt="Cameras">

                        <h5>آشپزخانه</h5>
                        <label class="switch ml-auto checked">
                            <input type="checkbox" id="fan-kitchen" checked="checked">
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
                    <ul class="list-group borderless px-1" data-rangeslider="fan-01">
                        <li class="list-group-item">
                            <p class="specs">سرعت</p>
                            <p class="ml-auto mb-0"><span class="range-output">3</span></p>
                        </li>
                        <li class="list-group-item pt-0 pb-4">
                            <input type="range" class="form-range" id="fan-01" min='0' max='6'>
                        </li>
                    </ul>
                    <!-- Speed control - range slider END -->
                </div>
            </div>
            <!-- FAN Kitchen END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- FAN Bathroom  START -->
            <div class="card active" data-unit="fan-bathroom">
                <!-- FAN Bathroom switch START -->
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Fan.svg') }}" alt="Cameras">

                        <h5>حمام</h5>
                        <label class="switch ml-auto checked">
                            <input type="checkbox" id="fan-bathroom" checked="checked">
                        </label>
                    </li>
                </ul>
                <!-- FAN Bathroom switch END -->
                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">وضعیت اتصال</p>
                            <p class="ml-auto mb-0 text-success">متصل</p>
                        </li>
                    </ul>
                    <!-- Speed control - range slider START -->
                    <ul class="list-group borderless px-1" data-rangeslider="fan-02">
                        <li class="list-group-item">
                            <p class="specs">سرعت</p>
                            <p class="ml-auto mb-0"><span class="range-output">3</span></p>
                        </li>
                        <li class="list-group-item pt-0 pb-4">
                            <input type="range" class="form-range" id="fan-02" min='0' max='6'>
                        </li>
                    </ul>
                    <!-- Speed control - range slider END -->
                </div>
            </div>
            <!-- FAN Bathroom END -->
        </div>
    </div>
    <hr class="my-2">

</div>
@endsection
