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
                    <li class="list-group-item d-flex" data-unit="switch-light-1">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>آشپزخانه</h5>
                        <label class="switch ml-auto">
                            <input type="checkbox" id="switch-light-1" checked="">
                        </label>
                        <div class="info-holder info-rb" style="right:40px;">
                            <div data-toggle="popover-all" data-content="Checkbox element using localStorage to remember the last status." data-original-title="Switch ON/OFF" data-container="body" data-placement="top" data-offset="0,-6"></div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex" data-unit="switch-light-2">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>پذیرایی</h5>
                        <label class="switch ml-auto">
                            <input type="checkbox" id="switch-light-2">
                        </label>
                    </li>
                    <li class="list-group-item d-flex" data-unit="switch-light-3">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>هال</h5>
                        <label class="switch ml-auto">
                            <input type="checkbox" id="switch-light-3">
                        </label>
                    </li>
                    <li class="list-group-item d-flex" data-unit="switch-light-4">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>اتاق خواب</h5>
                        <label class="switch ml-auto">
                            <input type="checkbox" id="switch-light-4">
                        </label>
                    </li>
                    <li class="list-group-item d-flex" data-unit="switch-light-5">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                        <h5>حمام</h5>
                        <label class="switch ml-auto">
                            <input type="checkbox" id="switch-light-5">
                        </label>
                    </li>
                </ul>
                <div class="card-body">
                    <div class="lights-controls" data-controls="switch-lights">
                        <button data-action="all-on" type="button" class="btn btn-secondary lights-control">همه <strong>روشن</strong></button>
                        <button data-action="all-off" type="button" class="btn btn-primary lights-control">همه <strong>خاموش</strong></button>
                    </div>
                </div>
            </div>
            <!-- Interior lights  END -->
        </div>
        <div class="col-sm-12 col-md-6 col-xl-4">
            <!-- Exterior lights  START -->
            <h3 class="card-title my-3">روشنایی بیرون</h3>
            <div class="card" data-unit="switch-light-6">
                <div class="card-body d-flex flex-row justify-content-start">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>در جلو</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-6">
                    </label>
                </div>
            </div>
            <div class="card" data-unit="switch-light-7">
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>در عقب</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-7">
                    </label>
                </div>
            </div>
            <div class="card" data-unit="switch-light-8">
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>باغچه</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-8">
                    </label>
                </div>
            </div>
            <div class="card" data-unit="switch-light-9">
                <div class="card-body d-flex">
                    <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Cameras">

                    <h5>پارکینگ</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-light-9">
                    </label>
                </div>
            </div>
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
                <ul class="list-group borderless active" data-unit="wash-machine">
                    <li class="list-group-item d-flex pb-0">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Wash machine.svg') }}" alt="Cameras">

                        <h5>لباسشویی</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                    <li class="list-group-item d-flex pt-0 pb-4">
                        <p class="entry">زمان باقیمانده</p>
                        <p id="wash-machine" class="ml-auto mb-0">01:16:44</p>
                    </li>
                </ul>
                <!-- Washing machine  END -->
                <hr class="my-0">
                <!-- Fridge  START -->
                <ul class="list-group borderless active" data-unit="home-fridge">
                    <li class="list-group-item d-flex pb-0">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Home fridge.svg') }}" alt="Cameras">

                        <h5>یخچال</h5>
                        <p class="ml-auto status">روشن</p>
                    </li>
                    <li class="list-group-item d-flex pt-0 pb-4">
                        <p class="entry">دما</p>
                        <p class="ml-auto mb-0">35<sup>°F</sup></p>
                    </li>
                </ul>
                <!-- Fridge  END -->
                <hr class="my-0">
                <!-- TV  START -->
                <ul class="list-group borderless" data-unit="tv-lcd">
                    <li class="list-group-item d-flex">
                        <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/LCD TV.svg') }}" alt="Cameras">

                        <h5>تلویزیون</h5>
                        <p class="ml-auto status">خاموش</p>
                    </li>
                </ul>
                <!-- TV  END -->
            </div>
            <!-- Appliances  END -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <!-- Camera 1  START -->
            <div class="card" data-unit="switch-camera-1">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="" loop="" __idm_id__="163841">
                            <source src="assets/videos/street.mp4" type="video/mp4">
                            <source src="assets/videos/street.webm" type="video/webm">
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

                    <h5>در رو به رو</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-camera-1" checked="">
                    </label>
                </div>
            </div>
            <!-- Camera 1  END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Camera 2  START -->
            <div class="card" data-unit="switch-camera-2">
                <div class="card-img-top card-stream">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video muted="" loop="" __idm_id__="163842">
                            <source src="assets/videos/room.mp4" type="video/mp4">
                            <source src="assets/videos/room.webm" type="video/webm">
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

                    <h5>اتاق محمد</h5>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-camera-2">
                    </label>
                </div>
            </div>
            <!-- Camera 2  END -->
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <!-- Security system START -->
            <div class="card lock" data-unit="switch-house-lock">
                <div class="card-body d-flex flex-wrap">
                    <svg class="icon-sprite icon-2x">
                        <use xlink:href="SmartHome/assets/icons-sprite.svg#Home"></use>
                        <use class="subicon-unlocked" xlink:href="SmartHome/assets/icons-sprite.svg#subicon-unlocked"></use>
                        <use class="subicon-locked" xlink:href="SmartHome/assets/icons-sprite.svg#subicon-locked"></use>
                    </svg>
                    <div class="title-status">
                        <h4>سیستم امنیتی</h4>
                        <p class="status"><span class="arm"></span></p>
                    </div>
                    <label class="switch ml-auto">
                        <input type="checkbox" id="switch-house-lock">
                    </label>
                </div>
            </div>
            <!-- Security system END -->
        </div>
        <div class="col-sm-12 col-md-6">
            <!-- Garage-doors START -->
            <div class="card" data-unit="garage-doors-1">
                <div class="card-body">
                    <div class="d-flex flex-wrap mb-2">
                        <svg class="icon-sprite icon-1x">
                            <use xlink:href="SmartHome/assets/icons-sprite.svg#garage"></use>
                        </svg>
                        <div class="title-status">
                            <h5>در پارکینگ</h5>
                            <p class="status">بسته</p>
                        </div>
                        <div class="ml-auto timer-controls" data-controls="garage-doors-1">
                            <button data-action="open" type="button" class="btn btn-primary doors-control">باز</button>
                            <button data-action="pause" type="button" class="btn btn-secondary doors-control">توقف</button>
                            <button data-action="resume" type="button" class="btn btn-secondary doors-control">ادامه</button>
                            <button data-action="close" type="button" class="btn btn-primary doors-control">بسته</button>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-tiny timer" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="12"></div>
                    </div>
                    <div class="info-holder info-cb">
                        <div data-toggle="popover-all" data-content="Element driven by javascript (countdown timer)." data-original-title="Progress indicator" data-placement="top" data-offset="0,-12"></div>
                    </div>
                </div>
            </div>
            <!-- Garage-doors END -->
        </div>
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
