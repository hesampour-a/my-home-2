@extends('layouts.myHome')

@section('content')


<div class="container-fluid px-4 px-sm-5">
    <div class="row">



        @foreach ($data as $camera)
        <div class="col-sm-12 col-md-6">

            <!-- Camera 1  START -->
            <div class="card" data-unit="switch-camera-{{$camera->id}}">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="muted" loop="true">
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

                    <h5>{{$camera->persianName}}</h5>
                    <label class="switch ml-auto">
                        <form action="{{route('camerasUpdateStatus',$camera->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input {{$camera->status ? 'ckecked':''}} onchange="this.form.submit()" type="checkbox" id="switch-camera-{{$camera->id}}" {{$camera->status ? 'ckecked':''}}>
                            <input id="status" name="status" value={{ $camera->status }} hidden>

                        </form>
                    </label>
                </div>
                <!-- Camera switch END -->
                <hr class="my-0">
                <!-- Bulb details START -->
                <ul class="list-group borderless px-1">
                    <li class="list-group-item pt-3 pb-2">
                        <p class="specs">وضعیت اتصال</p>
                        <p class="ml-auto mb-0 py-1 text-success">{{ $camera->connectionStatus == '1' ? 'متصل' : 'قطع' }}</p>
                    </li>
                    <li class="list-group-item py-2 flex-column flex-sm-row justify-content-between">
                        <p class="specs">دید در شب</p>
                        <div class="btn-group btn-group-toggle mb-auto py-1" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 active">
                                <form action="{{route('camerasUpdateStatusNightVision',$camera->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="radio" name="options" id="c{{$camera->id}}-nv-auto" autocomplete="{{$camera->nightVision == '2' ? 'on':'off'}}" {{$camera->nightVision == '2' ? 'checked':''}} onchange="this.form.submit()"> خودکار
                                    <input id="number" name="number" value='2' hidden>
                                </form>
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <form action="{{route('camerasUpdateStatusNightVision',$camera->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="radio" name="options" id="c{{$camera->id}}-nv-on" autocomplete="{{$camera->nightVision == '1' ? 'on':'off'}}" {{$camera->nightVision == '1' ? 'checked':''}} onchange="this.form.submit()"> روشن
                                    <input id="number" name="number" value='1' hidden>
                                </form>
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <form action="{{route('camerasUpdateStatusNightVision',$camera->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="radio" name="options" id="c{{$camera->id}}-nv-off" autocomplete="{{$camera->nightVision == '0' ? 'on':'off'}}" {{$camera->nightVision == '0' ? 'checked':''}} onchange="this.form.submit()"> خاموش
                                    <input id="number" name="number" value='0' hidden>
                                </form>
                            </label>
                        </div>
                    </li>
                    <li class="list-group-item pt-2 pb-4 flex-column flex-sm-row justify-content-between">
                        <p class="specs">تایم لپس</p>
                        <div class="btn-group btn-group-toggle mb-auto py-1" data-toggle="buttons">
                            <label class="btn btn-label btn-sm mb-0 active">
                                <form action="{{route('camerasUpdateStatusTimeLapse',$camera->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="radio" name="options" id="c{{$camera->id}}-rec-on" autocomplete="{{$camera->timeLapseStatus == '1' ? 'on':'off'}}" {{$camera->timeLapseStatus == '1' ? 'checked':''}} onchange="this.form.submit()"> فعال
                                    <input id=" number" name="number" value='1' hidden>
                                </form>
                            </label>
                            <label class="btn btn-label btn-sm mb-0">
                                <form action="{{route('camerasUpdateStatusTimeLapse',$camera->id)}}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="radio" name="options" id="c{{$camera->id}}-rec-off" autocomplete="{{$camera->timeLapseStatus == '0' ? 'on':'off'}}" {{$camera->timeLapseStatus == '0' ? 'checked':''}} onchange="this.form.submit()"> غیر فعال
                                    <input id=" number" name="number" value='0' hidden>
                                </form>
                            </label>
                        </div>
                    </li>
                </ul>
                <!-- Bulb details END -->
            </div>
            <!-- Camera 1  END -->
        </div>
        @endforeach
    </div>
</div>
@endsection
