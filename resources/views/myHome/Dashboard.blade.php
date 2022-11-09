@extends('layouts.myHome')

@section('content')
<div class="container-fluid px-4 px-sm-5">

    <div class="row">
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Interior lights  START -->
            <div class="card" data-unit-group="switch-lights">
                <div class="card-body">
                    <h3 class="card-title">روشنایی - داخل</h3>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach ($inLamps as $inLamp)
                    <li class="list-group-item d-flex" data-unit="switch-light-{{ $inLamp->id }}">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>{{ $inLamp->persianName }}</h5>
                        @if(auth()->user()->can('light-status'))
                        <label class="switch ml-auto">
                            <form action="{{route('inLampsUpdateStatusDashboard',$inLamp->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="checkbox" id="switch-light-{{ $inLamp->id }}" {{ $inLamp->status === '1' ? 'checked' : '' }} onchange="this.form.submit()">
                                <input id="status" name="status" value={{ $inLamp->status }} hidden>
                            </form>
                        </label>
                        @endif
                        <div class="info-holder info-rb" style="right:40px;">
                            <div data-toggle="popover-all" data-content="Checkbox element using localStorage to remember the last status." data-original-title="Switch ON/OFF" data-container="body" data-placement="top" data-offset="0,-6"></div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
            <!-- Interior lights  END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Exterior lights  START -->
            <h3 class="card-title my-3">روشنایی بیرون</h3>
            @foreach ($outLamps as $outLamp)
            <div class="card" data-unit="switch-light-{{$outLamp->id}}">
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>{{$outLamp->persianName}}</h5>
                    @if(auth()->user()->can('light-status'))
                    <label class="switch ml-auto">
                        <form action="{{route('outLampsUpdateStatusDashboard',$outLamp->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" id="switch-light-{{ $outLamp->id }}" {{ $outLamp->status === '1' ? 'checked' : '' }} onchange="this.form.submit()">
                            <input id="status" name="status" value={{ $outLamp->status }} hidden>
                        </form>
                    </label>
                    @endif
                </div>
            </div>
            @endforeach

            <!-- Exterior lights  END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Appliances  START -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">لوازم خانگی</h3>
                </div>
                <hr class="my-0">
                <!-- Washing machine  START -->
                @foreach ($washingMachines as $washingMachine)
                <ul class="list-group borderless active" data-unit="{{ $washingMachine->name }}">
                    <li class="list-group-item d-flex pb-0">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Wash machine.svg') }}" alt="Cameras">

                        <h5>لباسشویی</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                    <li class="list-group-item d-flex pt-0 pb-4">
                        <p class="entry">زمان باقیمانده</p>
                        <p id="{{ $washingMachine->name }}" class="ml-auto mb-0">{{ $washingMachine->timeRemaining }}</p>
                    </li>
                </ul>
                @endforeach

                <!-- Washing machine  END -->
                <hr class="my-0">
                <!-- Fridge  START -->
                @foreach ($fridges as $fridge)
                <ul class="list-group borderless active" data-unit="{{ $fridge->name }}">
                    <li class="list-group-item d-flex pb-0">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Home fridge.svg') }}" alt="Cameras">

                        <h5>{{ $fridge->persianName }}</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                    <li class="list-group-item d-flex pt-0 pb-4">
                        <p class="entry">دما</p>
                        <p class="ml-auto mb-0">{{ $fridge->temperature }}<sup>°C</sup></p>
                    </li>
                </ul>
                @endforeach
                <!-- Fridge  END -->
                <hr class="my-0">
                <!-- TV  START -->
                @foreach ($tvs as $tv)
                <ul class="list-group borderless" data-unit="tv-{{ $tv->id }}">
                    <li class="list-group-item d-flex">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/LCD TV.svg') }}" alt="Cameras">

                        <h5>{{ $tv->persianName }}</h5>
                        <p class="ml-auto status">{{ $tv->status == '1' ? 'روشن' : 'خاموش' }}</p>
                    </li>
                </ul>
                @endforeach
                <!-- TV  END -->
            </div>
            <!-- Appliances  END -->
        </div>
    </div>
    <div class="row">
        <!-- Camera  START -->
        @foreach ($cameras as $camera)
        <div class="col-sm-12 col-md-6">

            <div class="card" data-unit="switch-camera-{{$camera->id}}">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="" loop="" __idm_id__="163841">
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
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Camera.svg') }}" alt="Cameras">

                    <h5>{{$camera->persianName}}</h5>
                    @if(auth()->user()->can('camera-status'))
                    <label class="switch ml-auto">
                        <form action="{{route('camerasUpdateStatusDashboard',$camera->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="checkbox" id="switch-camera-{{$camera->id}}" {{$camera->status ? 'ckecked':''}} onchange="this.form.submit()">
                            <input id="status" name="status" value={{ $camera->status }} hidden>

                        </form>
                    </label>
                    @endif
                </div>
            </div>

        </div>
        @endforeach
        <!-- Camera   END -->

    </div>

    <br><br>

</div>

<script>
    $(document).ready(function() {


        // Get checkbox statuses from localStorage if available (IE)
        if (localStorage) {


            // Switch statuses
            var switchValues = JSON.parse(localStorage.getItem('switchValues')) || {};

            $.each(switchValues, function(key, value) {

                // Apply only if element is included on the page
                if ($('[data-unit="' + key + '"]').length) {

                    if (value === true) {

                        // Apply appearance of the "unit" and checkbox element
                        $('[data-unit="' + key + '"]').addClass("active");
                        $("#" + key).prop('checked', true);
                        $("#" + key).closest("label").addClass("checked");

                        //In case of Security unit with SVG illustration
                        if (key === "switch-house-lock-pin") {
                            $('#house-disarmed').css('opacity', '0');
                            $('#house-armed').css('opacity', '1');
                        }

                        //In case of Doorway light (featured)
                        if (key === "switch-light-doorway") {
                            $('#doorway-light').addClass("active");
                        }

                        //In case of Garage light (featured)
                        if (key === "switch-light-garage") {
                            $('#garage-light').addClass("active");
                        }

                        //In case of Camera unit - play video
                        if (key === "switch-camera-1" || key === "switch-camera-2") {
                            $('[data-unit="' + key + '"] video')[0].play();
                        }

                    } else {
                        $('[data-unit="' + key + '"]').removeClass("active");
                        $("#" + key).prop('checked', false);
                        $("#" + key).closest("label").removeClass("checked");

                        //In case of Security unit with SVG illustration
                        if (key === "switch-house-lock-pin") {
                            $('#house-disarmed').css('opacity', '1');
                            $('#house-armed').css('opacity', '0');
                        }

                        //In case of Doorway light (featured)
                        if (key === "switch-light-doorway") {
                            $('#doorway-light').removeClass("active");
                        }

                        //In case of Garage light (featured)
                        if (key === "switch-light-garage") {
                            $('#garage-light').removeClass("active");
                        }

                        if (key === "switch-camera-1" || key === "switch-camera-2") {
                            $('[data-unit="' + key + '"] video')[0].pause();
                        }
                    }
                }
            });
        }

        // Switch (checkbox element) toogler
        $('.switch input[type="checkbox"]').on("change", function(t) {

            // Check the time between changes to prevert Android native browser execute twice
            // If you dont need support for Android native browser - just call "switchSingle" function
            if (this.last) {

                this.diff = t.timeStamp - this.last;

                // Don't execute if the time between changes is too short (less than 250ms) - Android native browser "twice bug"
                // The real time between two human taps/clicks is usually much more than 250ms"
                if (this.diff > 250) {

                    this.last = t.timeStamp;

                    iot.switchSingle(this.id, this.checked);

                } else {
                    return false;
                }

            } else {

                // First attempt on this switch element
                this.last = t.timeStamp;

                iot.switchSingle(this.id, this.checked);

            }
        });

        // All ON/OFF controls
        $('.lights-control').click(function() {

            var target = $(this).closest('.lights-controls').data('controls');
            var action = $(this).data('action');

            iot.switchGroup(target, action);
        });

        // Reposition to center when a modal is shown
        $('.modal.centered').on('show.bs.modal', iot.centerModal);

        // Reset/Stop countdown timer (EXIT NOW)
        $('#armModal').on('hide.bs.modal', iot.clearCountdown);

        // Reset PIN keyboard and checkbox
        $('#cancel-keyboard').click(function() {
            iot.clearKeyboard();
        });

        // Garage roll-doors controls
        $('.roll-doors-control').click(function() {

            var target = $(this).closest('.timer-controls').data('controls');
            var action = $(this).data('action');
            iot.garageDoorsRoll(target, action);

        });

        // Garage doors controls
        $('.doors-control').click(function() {

            var target = $(this).closest('.timer-controls').data('controls');
            var action = $(this).data('action');
            iot.garageDoors(target, action);

        });

        // Alerts "Close" callback - hide modal and alert indicator dot when user closes all alerts
        $('#alertsModal .alert').on('close.bs.alert', function() {
            var sum = $('#alerts-toggler').attr('data-alerts');
            sum = sum - 1;
            $('#alerts-toggler').attr('data-alerts', sum);

            if (sum === 0) {
                $('#alertsModal').modal('hide');
                $('#alerts-toggler').attr('data-toggle', 'none');

            }

        });

        // Show/hide tips (popovers) - FAB button (right bottom on large screens)
        $('#info-toggler').click(function() {

            if ($('body').hasClass('info-active')) {
                $('[data-toggle="popover-all"]').popover('hide');
                $('body').removeClass('info-active');
            } else {
                $('[data-toggle="popover-all"]').popover('show');
                $('body').addClass('info-active');
            }
        });

        // Hide tips (popovers) by clicking outside
        $('body').on('click', function(pop) {

            if (pop.target.id !== 'info-toggler' && $('body').hasClass('info-active')) {
                $('[data-toggle="popover-all"]').popover('hide');
                $('body').removeClass('info-active');
            }

        });

    });

    // Apply necessary changes, functionality when content is loaded
    $(window).on('load', function() {

        // This script is necessary for cross browsers icon sprite support (IE9+, ...)
        svg4everybody();

        // Washing machine - demonstration of running program/cycle
        $('#wash-machine').timer({
            countdown: true,
            format: '%H:%M:%S',
            duration: '1h17m10s',
            callback: function() {
                $('[data-unit="wash-machine"]').removeClass("active");
                $('[data-unit="wash-machine"] .status').html('OFF');
            }
        });

        if ($('[data-unit="switch-camera-1"]').hasClass("active")) {
            var activeVideo = $('[data-unit="switch-camera-1"] video').get(0);

            if (activeVideo.paused) {
                activeVideo.autoplay = true;
                activeVideo.load();
                activeVideo.play();
            } else {
                activeVideo.pause();
            }
        }

        if ($('[data-unit="switch-camera-2"]').hasClass("active")) {
            var activeVideo = $('[data-unit="switch-camera-2"] video').get(0);

            if (activeVideo.paused) {
                activeVideo.autoplay = true;
                activeVideo.load();
                activeVideo.play();
            } else {
                activeVideo.pause();
            }
        }

        // "Timeout" function is not neccessary - important is to hide the preloader overlay
        setTimeout(function() {

            // Hide preloader overlay when content is loaded
            $('#iot-preloader,.card-preloader').fadeOut();
            $("#wrapper").removeClass("hidden");

            // Check for Main contents scrollbar visibility and set right position for FAB button
            iot.positionFab();

        }, 800);

    });

    // Apply necessary changes if window resized
    $(window).on('resize', function() {

        // Modal reposition when the window is resized
        $('.modal.centered:visible').each(iot.centerModal);

        // Check for Main contents scrollbar visibility and set right position for FAB button
        iot.positionFab();
    });
</script>
@endsection
