@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <!-- Camera 1  START -->
            <div class="card" data-unit="switch-camera-1">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="muted" loop="">
                            <source src="{{ asset('SmartHome/assets/video/street.mp4') }}" type="video/mp4">
                            <source src="{{ asset('SmartHome/assets/video/street.webm') }}" type="video/webm">
                        </video>
                        <div class="card-preloader" style="display: none;">
                            <div class="center-preloader d-flex align-items-center">
                                <div class="spinners">
                                    <div class="spinner01"></div>
                                    <div class="spinner02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-img-top card-stream off">
                    <div class="embed-responsive embed-responsive-16by9">
                        <h2 class="center-abs">خاموش</h2>
                    </div>
                </div>
                <!-- Camera switch START -->
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Camera.svg') }}" alt="Cameras">

                    <h5>در جلو</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-camera-1">
                    </label>
                </div>
                <!-- Camera switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item pt-3 pb-2">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 py-1 text-success">متصل</p>
                    </li>
                    <li class="list-group-item py-2 flex-column flex-sm-row justify-content-between">
                        <p class="specs">دید در شب</p>
                        <div class="btn-group btn-group-toggle mb-auto py-1" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 active">
                                <input type="radio" name="options" id="c1-nv-auto" autocomplete="off"> خودکار
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <input type="radio" name="options" id="c1-nv-on" autocomplete="off"> روشن
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <input type="radio" name="options" id="c1-nv-off" autocomplete="off"> خاموش
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item pt-2 pb-4 flex-column flex-sm-row justify-content-between">
                        <p class="specs">تایم لپس</p>
                        <div class="btn-group btn-group-toggle mb-auto py-1" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 active">
                                <input type="radio" name="options" id="c1-rec-on" autocomplete="off"> فعال
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <input type="radio" name="options" id="c1-rec-off" autocomplete="off"> غیر فعال
                            </label>
                        </div>
                    </li>
                </ul>
                <!-- Bulb details END -->
            </div>
            <!-- Camera 1  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Camera 2  START -->
            <div class="card" data-unit="switch-camera-2">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="muted" loop="">
                            <source src="{{ asset('SmartHome/assets/video/room.mp4') }}" type="video/mp4">
                            <source src="{{ asset('SmartHome/assets/video/street.webm') }}" type="video/mp4">
                        </video>
                        <div class="card-preloader" style="display: none;">
                            <div class="center-preloader d-flex align-items-center">
                                <div class="spinners">
                                    <div class="spinner01"></div>
                                    <div class="spinner02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-img-top card-stream off">
                    <div class="embed-responsive embed-responsive-16by9">
                        <h2 class="center-abs">خاموش</h2>
                    </div>
                </div>
                <!-- Camera switch START -->
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Camera.svg') }}" alt="Cameras">

                    <h5>اتاق محمد</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-camera-2">
                    </label>
                </div>
                <!-- Camera switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item pt-3 pb-2">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 py-1 text-success">متصل</p>
                    </li>
                    <li class="list-group-item flex-column py-2">
                        <p class="specs w-100">دید در شب</p>
                        <div class="btn-group btn-group-toggle w-100 py-2" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 col-4 active">
                                <input type="radio" name="options" id="c2-nv-auto" autocomplete="off"> خودکار
                            </label>
                            <label class="btn btn-label btn-sm mb-0 col-4">
                                <input type="radio" name="options" id="c2-nv-on" autocomplete="off"> روشن
                            </label>
                            <label class="btn btn-label btn-sm mb-0 col-4">
                                <input type="radio" name="options" id="c2-nv-off" autocomplete="off"> خاموش
                            </label>
                        </div>
                        <div class="info-holder info-ct">
                            <div data-toggle="popover-all" data-content="Group of radio buttons." data-original-title="Option settings" data-placement="bottom" data-offset="0,-32"></div>
                        </div>
                    </li>
                    <li class="list-group-item flex-column pt-2 pb-4">
                        <p class="specs w-100">تایم لپس</p>
                        <div class="btn-group btn-group-toggle w-100 ml-auto py-2" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 w-100 active">
                                <input type="radio" name="options" id="c2-rec-on" autocomplete="off" checked="checked"> فعال
                            </label>
                            <label class="btn btn-label btn-sm mb-0 w-100">
                                <input type="radio" name="options" id="c2-rec-off" autocomplete="off"> غیر فعال
                            </label>
                        </div>
                    </li>
                </ul>
                <!-- Bulb details END -->
            </div>
            <!-- Camera 2  END -->
        </div>
    </div>
</div>
@endsection
