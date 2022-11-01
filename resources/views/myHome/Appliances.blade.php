@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">
    <div class="row">
        <!-- Appliances  START -->
        <!-- Washing machine  START -->
        @foreach ($washingMachines as $washingMachine)
        <div class="col-sm-12 col-md-6">

            <div class="card active" data-unit="{{ $washingMachine->name }}">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Wash machine.svg') }}" alt="Cameras">

                        <h5>{{$washingMachine->persianName}}</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                </ul>
                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">برنامه شست و شو</p>
                            <p class="ml-auto mb-0 text-primary">{{ $washingMachine->washingProgram }}</p>
                        </li>
                        <li class="list-group-item pb-0">
                            <p class="specs">وزن</p>
                            <p class="ml-auto mb-0 text-primary">{{ $washingMachine->weight }}kg </p>
                        </li>
                        <li class="list-group-item">
                            <p class="specs">زمان باقیمانده</p>
                            <p id="wash-machine" class="ml-auto mb-0">{{ $washingMachine->timeRemaining }}</p>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        @endforeach
        <!-- Washing machine  END -->
        <!-- Fridge  START -->
        @foreach ($fridges as $fridge)
        <div class="col-sm-12 col-md-6">

            <div class="card active" data-unit="{{ $fridge->name }}">
                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Home fridge.svg') }}" alt="Cameras">

                        <h5>{{ $fridge->persianName }}</h5>
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
                                <span id="fridge-temp-F">{{$fridge->temperature}}</span><sup>°C</sup>
                            </p>
                        </li>
                    </ul>
                    <div class="p-4" style="position:relative;">
                        <form action="{{route('fridgeTeperatureUpdate',$fridge->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="range" name='dimer' class="form-range" id="fridge-temp" min="1" max="20" step="1" value="{{$fridge->temperature}}" data-orientation="vertical" onchange="this.form.submit()">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Fridge  END -->
        <!-- TV  START -->
        @foreach ($tvs as $tv)
        <div class="col-sm-12 col-md-6">
            <div class="card active" data-unit="tv-lcd-{{ $tv->id }}">

                <ul class="list-group borderless">
                    <li class="list-group-item align-items-center">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/LCD TV.svg') }}" alt="Cameras">

                        <h5>{{$tv->persianName}}</h5>
                        <label class="switch ml-auto checked">
                            <form action="{{route('tvStatusUpdate',$tv->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" id="tv-lcd-{{ $tv->id }}" {{ $tv->status === '1' ? 'checked' : '' }} onchange="this.form.submit()">
                                <input id="status" name="status" value={{ $tv->status }} hidden>
                            </form>
                        </label>
                    </li>
                </ul>

                <div class="only-if-active">
                    <hr class="my-0">
                    <ul class="list-group borderless px-1">
                        <li class="list-group-item pb-0">
                            <p class="specs">کانال</p>
                            <p class="ml-auto mb-0 text-primary">{{ $tv->channel }}</p>
                        </li>

                    </ul>
                    <!-- Volume control - range slider START -->
                    <form action="{{route('tvVolumeUpdate',$tv->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <ul class="list-group borderless px-1" data-rangeslider="tv-volume-{{$tv->id}}">
                            <li class="list-group-item">
                                <p class="specs">صدا</p>
                                <p class="ml-auto mb-0"><span class="range-output">{{ $tv->volume }}</span>%</p>
                            </li>
                            <li class="list-group-item pt-0 pb-4">
                                <input type="range" name="dimer" class="form-range" id="tv-volume-{{ $tv->id }}" onchange="this.form.submit()">

                            </li>
                        </ul>
                    </form>
                    <!-- Volume control - range slider END -->
                </div>
            </div>

        </div>
        @endforeach
        <!-- TV  END -->

        <!-- Appliances  END -->
    </div>
</div>
@endsection
