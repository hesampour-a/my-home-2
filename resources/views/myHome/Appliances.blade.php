@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">
    <div class="row">
        <!-- Appliances  START -->
        <div class="col-sm-12 col-md-6">
            <!-- Washing machine  START -->
            <div class="card active" data-unit="wash-machine">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Wash machine.svg') }}" alt="Cameras">

                        <h5>ماشین لباسشویی</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                </ul>
                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">برنامه شست و شو</p>
                            <p class="ml-auto mb-0 text-primary">Cotton Quick</p>
                        </li>
                        <li class="list-group-item pb-0">
                            <p class="specs">وزن</p>
                            <p class="ml-auto mb-0 text-primary">10.5 lb <small class="text-muted">(4.76 kg)</small></p>
                        </li>
                        <li class="list-group-item">
                            <p class="specs">زمان باقیمانده</p>
                            <p id="wash-machine" class="ml-auto mb-0">00:00:46</p>
                        </li>
                        <li class="list-group-item pb-4 timer-controls" data-controls="wash-machine">
                            <button data-action="pause" type="button" class="btn btn-primary btn-block wash-control" style="display: block;">توقف</button>
                            <button data-action="resume" type="button" class="btn btn-secondary btn-block mt-0 wash-control">ادامه</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Washing machine  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Fridge  START -->
            <div class="card active" data-unit="home-fridge">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Home fridge.svg') }}" alt="Cameras">

                        <h5>یخچال</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                </ul>
                <hr class="my-0">
                <div class="d-flex justify-content-between" data-rangeslider="fridge-temp">
                    <ul class="list-group borderless px-1 align-items-stretch">
                        <li class="list-group-item">
                            <p class="specs mr-auto mb-auto">دما</p>
                        </li>
                        <li class="list-group-item d-flex flex-column pb-4">
                            <p class="mr-auto mt-2 mb-0 display-5">
                                <span id="fridge-temp-F">5</span><sup>°C</sup>
                            </p>
                        </li>
                    </ul>
                    <div class="p-4" style="position:relative;">
                        <input type="range" class="form-range" id="fridge-temp" min="1" max="20" step="1" value="2" data-orientation="vertical">
                    </div>
                </div>
            </div>
            <!-- Fridge  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- TV1  START -->
            <div class="card active" data-unit="tv-lcd-1">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/LCD TV.svg') }}" alt="Cameras">

                        <h5>تلویزیون محمد</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                </ul>
                <hr class="my-0">
                <ul class="list-group borderless px-1">
                    <li class="list-group-item pb-0">
                        <p class="specs">کانال</p>
                        <p class="ml-auto mb-0 text-primary">ورزش</p>
                    </li>
                    <li class="list-group-item pb-4">
                        <p class="specs">ضبط</p>
                        <p class="ml-auto mb-0 text-primary text-off">خاموش</p>
                    </li>
                </ul>
            </div>
            <!-- TV1  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- TV2  START -->
            <div class="card active" data-unit="tv-lcd-2">
                <!-- TV2 switch START -->
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/LCD TV.svg') }}" alt="Cameras">

                        <h5>تلویزیون هال</h5>
                        <label class="switch ml-auto checked">
                            <input type="checkbox" id="tv-lcd-2" checked="checked">
                        </label>
                    </li>
                </ul>
                <!-- TV2 switch END -->
                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">کانال</p>
                            <p class="ml-auto mb-0 text-primary">پویا</p>
                        </li>
                        <li class="list-group-item pb-0">
                            <p class="specs">ضبط</p>
                            <div class="btn-group btn-group-toggle ml-auto py-1" data-toggle="buttons">
                                <label class="btn btn-label btn-sm mb-0">
                                    <input type="radio" name="options" id="c1-nv-on" autocomplete="off"> روشن
                                </label>
                                <label class="btn btn-label btn-sm mb-0 active">
                                    <input type="radio" name="options" id="c1-nv-off" autocomplete="off" checked="checked"> خاموش
                                </label>
                            </div>
                        </li>
                    </ul>
                    <!-- Volume control - range slider START -->
                    <ul class="list-group borderless px-1" data-rangeslider="tv-volume-1">
                        <li class="list-group-item">
                            <p class="specs">صدا</p>
                            <p class="ml-auto mb-0"><span class="range-output">45</span>%</p>
                        </li>
                        <li class="list-group-item pt-0 pb-4">
                            <input type="range" class="form-range" id="tv-volume-1">

                        </li>
                    </ul>
                    <!-- Volume control - range slider END -->
                </div>
            </div>
            <!-- TV2  END -->
        </div>
        <!-- Appliances  END -->
    </div>
</div>
@endsection
