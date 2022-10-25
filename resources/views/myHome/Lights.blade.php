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
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-1">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>آشپزخانه</h5>
                    <label class="switch ml-auto checked">
                        <input type="checkbox" id="switch-light-1" checked="checked">
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">متصل</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">24W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">110-130V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">3h 42m</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-1">
                    <li class="list-group-item">
                        <p class="specs">قدرت</p>
                        <p class="ml-auto mb-0"><span class="range-output">50</span>%</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">

                        <input type="range" class="form-range" id="dimmer-light-1">
                    </li>
                </ul>

                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-2">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>پذیرایی</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-2">
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">متصل</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">18W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">110-130V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">1h 16m</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-2">
                    <li class="list-group-item">
                        <p class="specs">قدرت</p>
                        <p class="ml-auto mb-0"><span class="range-output">100</span>%</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">

                        <input type="range" class="form-range" id="dimmer-light-2">
                    </li>
                </ul>
                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-3">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>هال</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-3">
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">متصل</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">24W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">110-130V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">2h 37m</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-3">
                    <li class="list-group-item">
                        <p class="specs">قدرت</p>
                        <p class="ml-auto mb-0"><span class="range-output">50</span>%</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">

                        <input type="range" class="form-range" id="dimmer-light-3">
                    </li>
                </ul>
                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-4">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>اتاق خواب</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-4">
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">متصل</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">15W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">110-130V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">0h 39m</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-4">
                    <li class="list-group-item">
                        <p class="specs">قدرت</p>
                        <p class="ml-auto mb-0"><span class="range-output">65</span>%</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">

                        <input type="range" class="form-range" id="dimmer-light-4">
                    </li>
                </ul>
                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Light unit START -->
            <div class="card active" data-unit="switch-light-5">
                <!-- Light switch START -->
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>حمام</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-5">
                    </label>
                </div>
                <!-- Light switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 text-success">متصل</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">مصرف برق</p>
                        <p class="ml-auto mb-0">18W</p>
                    </li>
                    <li class="list-group-item pt-0">
                        <p class="specs">محدوده ولتاژ</p>
                        <p class="ml-auto mb-0">110-130V</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">
                        <p class="specs">میانگین روشن بودن روزانه</p>
                        <p class="ml-auto mb-0">1h 08m</p>
                    </li>
                </ul>
                <!-- Bulb details END -->
                <hr class="my-0">
                <!-- Dimmer control - range slider START -->
                <ul class="list-group borderless px-1" data-rangeslider="dimmer-light-5">
                    <li class="list-group-item">
                        <p class="specs">قدرت</p>
                        <p class="ml-auto mb-0"><span class="range-output">50</span>%</p>
                    </li>
                    <li class="list-group-item pt-0 pb-4">

                        <input type="range" class="form-range" id="dimmer-light-5">
                    </li>
                </ul>
                <!-- Dimmer control - range slider END -->
            </div>
            <!-- Light unit END -->
        </div>
    </div>
    <!-- Interior lights END -->
    <hr class="my-2">

    <hr class="my-2">
    <!-- Exterior lights START -->
    <div class="row">
        <div class="col-12">
            <div class="card" data-unit-group="switch-lights-ex">
                <!-- ON/OFF all interior lights  START -->
                <div class="card-body">
                    <div class="d-flex flex-column flex-sm-row justify-content-start">
                        <h3 class="card-title">لامپ های بیرون</h3>
                        <div class="lights-controls ml-sm-auto pt-3 pt-sm-0" data-controls="switch-lights-ex">
                            <button data-action="all-on" type="button" class="btn btn-secondary lights-control">همه <strong>روشن</strong></button>
                            <button data-action="all-off" type="button" class="btn btn-primary lights-control">همه <strong>خاموش</strong></button>
                        </div>
                    </div>
                </div>
                <!-- ON/OFF all interior lights  END -->
                <hr class="my-0">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="p-sm-3" data-unit="switch-light-6">
                                <!-- Light switch START -->
                                <div class="d-flex flex-row justify-content-start py-3">
                                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                                    <h5>در جلو</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-6">
                                    </label>
                                </div>
                                <!-- Light switch END -->
                                <hr class="my-0">
                                <!-- Bulb details START -->
                                <ul class="list-group borderless">
                                    <li class="list-group-item px-2">
                                        <p class="specs">وضعیت اتصال</p>
                                        <p class="ml-auto mb-0 text-success">متصل</p>
                                    </li>
                                    <li class="list-group-item pt-0 px-2">
                                        <p class="specs">مصرف برق</p>
                                        <p class="ml-auto mb-0">15W</p>
                                    </li>
                                    <li class="list-group-item pt-0 pb-4 px-2">
                                        <p class="specs">محدوده ولتاژ</p>
                                        <p class="ml-auto mb-0">110-130V</p>
                                    </li>
                                </ul>
                                <!-- Bulb details END -->
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="p-sm-3" data-unit="switch-light-e7">
                                <!-- Light switch START -->
                                <div class="d-flex flex-row justify-content-start py-3">
                                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                                    <h5>در عقب</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-e7" disabled="disabled">
                                    </label>
                                </div>
                                <!-- Light switch END -->
                                <hr class="my-0">
                                <!-- Bulb details START -->
                                <ul class="list-group borderless">
                                    <li class="list-group-item px-2">
                                        <p class="specs">وضعیت اتصال</p>
                                        <p class="ml-auto mb-0 text-danger">قطع</p>
                                    </li>
                                    <li class="list-group-item pt-0 px-2">
                                        <p class="specs">مصرف برق</p>
                                        <p class="ml-auto mb-0">15W</p>
                                    </li>
                                    <li class="list-group-item pt-0 pb-4 px-2">
                                        <p class="specs">محدوده ولتاژ</p>
                                        <p class="ml-auto mb-0">110-130V</p>
                                    </li>
                                </ul>
                                <!-- Bulb details END -->
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="p-sm-3" data-unit="switch-light-8">
                                <!-- Light switch START -->
                                <div class="d-flex flex-row justify-content-start py-3">
                                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                                    <h5>باغچه</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-8">
                                    </label>
                                </div>
                                <!-- Light switch END -->
                                <hr class="my-0">
                                <!-- Bulb details START -->
                                <ul class="list-group borderless">
                                    <li class="list-group-item px-2">
                                        <p class="specs">وضعیت اتصال</p>
                                        <p class="ml-auto mb-0 text-success">متصل</p>
                                    </li>
                                    <li class="list-group-item pt-0 px-2">
                                        <p class="specs">مصرف برق</p>
                                        <p class="ml-auto mb-0">30W</p>
                                    </li>
                                    <li class="list-group-item pt-0 pb-4 px-2">
                                        <p class="specs">محدوده ولتاژ</p>
                                        <p class="ml-auto mb-0">110-130V</p>
                                    </li>
                                </ul>
                                <!-- Bulb details END -->
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="p-sm-3" data-unit="switch-light-9">
                                <!-- Light switch START -->
                                <div class="d-flex flex-row justify-content-start py-3">
                                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                                    <h5>پارکینگ</h5>
                                    <label class="switch ml-auto">
                                        <input type="checkbox" id="switch-light-9">
                                    </label>
                                </div>
                                <!-- Light switch END -->
                                <hr class="my-0">
                                <!-- Bulb details START -->
                                <ul class="list-group borderless">
                                    <li class="list-group-item px-2">
                                        <p class="specs">وضعیت اتصال</p>
                                        <p class="ml-auto mb-0 text-success">متصل</p>
                                    </li>
                                    <li class="list-group-item pt-0 px-2">
                                        <p class="specs">مصرف برق</p>
                                        <p class="ml-auto mb-0">15W</p>
                                    </li>
                                    <li class="list-group-item pt-0 pb-4 px-2">
                                        <p class="specs">محدوده ولتاژ</p>
                                        <p class="ml-auto mb-0">110-130V</p>
                                    </li>
                                </ul>
                                <!-- Bulb details END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Exterior lights END -->
</div>
@endsection
