<!DOCTYPE html>
<html lang="Fa">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jozef Dvorský - creatingo.com">

    <title>My Home</title>
    <link rel="icon" href="{{ asset('SmartHome/assets/svg/icon.png') }}" />


    <link href="{{ asset('SmartHome/assets/css/iot-theme-bundle.min.css') }}" rel="stylesheet">

</head>

<body>










    <!-- Wrapper START -->
    <div id="wrapper" class="">

        <!-- Top navbar START -->
        <nav class="navbar fixed-top border-bottom">
            <a class="navbar-brand pt-0 px-lg-3 px-1 mr-0" href="#"><img src="{{ asset('SmartHome/assets/svg/icon.png') }}" alt="My Home" style="width: 40px"></a>
            <!-- <div class="ml-auto">
                <div class="navbar-nav navbar-icons flex-row">
                    <div class="nav-item">
                        <button id="alerts-toggler" class="btn btn-link nav-link" title="user" type="button" data-alerts="3" data-toggle="modal" data-target="#alertsModal">
                            <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/user.png') }}" alt="user">
                        </button>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/settings.svg') }}" alt="Setting" />
                        </a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/logout.svg') }}" alt="logout">

                        </a>
                    </div>
                </div>
            </div> -->
        </nav>
        <!-- Top navbar END -->

        <!-- Content START -->
        @yield('content')
        <!-- Content END -->

        <!-- Bottom navbar START -->
        <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
            <button class="navbar-toggler mx-auto text-primary collapsed" type="button" data-toggle="collapse" data-target="#bottomCollapse" aria-expanded="false">
                <svg class="icon-sprite">
                    <use xlink:href="SmartHome/assets/svg/icons-sprite.svg#menu-arrow"></use>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="bottomCollapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="{{route('dashboard')}}">
                            <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Dashboard.svg') }}" alt="Dashboard">
                            <span>داشبورد</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lights')}}">
                            <img class=" icon-sprite" src="{{ asset('SmartHome/assets/svg/Bulb eco.svg') }}" alt="Lights">

                            <span>روشنایی</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cameras')}}">
                            <img class=" icon-sprite" src="{{ asset('SmartHome/assets/svg/Camera.svg') }}" alt="Cameras">

                            <span>دوربین ها</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('climate')}}">
                            <img class=" icon-sprite" src="{{ asset('SmartHome/assets/svg/Thermometer.svg') }}" alt="Climate">

                            <span>آب و هوا</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('appliances')}}">
                            <img class="icon-sprite" src="{{ asset('SmartHome/assets/svg/Appliances.svg') }}" alt="Appliance">

                            <span>لوازم خانگی</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Bottom navbar END -->
    </div>
    <!-- Wrapper END -->

    <!-- FAB button - bottom right on large screens -->
    <!-- <button id="info-toggler" type="button" class="btn btn-primary btn-fab btn-fixed-br d-none d-lg-inline-block">
        <svg class="icon-sprite">
            <use xlink:href="SmartHome/assets/svg/icons-sprite.svg#info"></use>
        </svg>
    </button> -->

    <!-- jQuery -->
    <script src="{{ asset('SmartHome/assets/js/jquery-3.4.1.min.js') }}" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <!-- Bootstrap bundle -->
    <script src="{{ asset('SmartHome/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Cross browser support for SVG icon sprites -->
    <script src="{{ asset('SmartHome/assets/js/svg4everybody.min.js') }}"></script>

    <!-- jQuery countdown timer plugin (Exit modal, Garage doors, Washing machine) -->
    <script src="{{ asset('SmartHome/assets/js/iot-timer.min.js') }}"></script>

    <!-- Basic theme functionality (arming, garage doors, switches ...) - using jQuery -->
    <script src="{{ asset('SmartHome/assets/js/iot-functions.min.js') }}"></script>

    <script src="{{ asset('SmartHome/assets/js/iot-range-slider.min.js') }}"></script>

    <script src="{{ asset('SmartHome/assets/js/chartist.min.js') }}"></script>

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
        //
    </script>

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

                        } else {
                            $('[data-unit="' + key + '"]').removeClass("active");
                            $("#" + key).prop('checked', false);
                            $("#" + key).closest("label").removeClass("checked");
                        }
                    }
                });

                // Range Slider values
                var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};

                $.each(rangeValues, function(key, value) {

                    // Apply only if element is included on the page
                    if ($('[data-rangeslider="' + key + '"]').length) {
                        // Update Range slider
                        $('[data-rangeslider="' + key + '"] input[type="range"]').val(value);
                        $('[data-rangeslider="' + key + '"] .range-output').html(value);
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

            // Data binding for numeric representation of range slider
            $(document).on('input', 'input[type="range"]', function() {
                $('[data-rangeslider="' + this.id + '"] .range-output').html(this.value);
            });

            // Charts initializaton - Chartist.js
            var data01 = {
                // A labels array that can contain any sort of values
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                // Series array that contains series objects or in this case series data arrays
                series: [
                    [5, 2, 4, 2, 0, 11, 8]
                ]
            };

            var options01 = {
                height: 240,
                high: 24,
                low: 0,
                scaleMinSpace: 12,
                onlyInteger: false,
                referenceValue: 12
            };

            // Initialize a Bar chart in the container with the ID chart01
            new Chartist.Bar('#chart01', data01, options01);


        });

        // Apply necessary changes, functionality when content is loaded
        $(window).on('load', function() {

            // This script is necessary for cross browsers icon sprite support (IE9+, ...)
            svg4everybody();

            // "Timeout" function is not neccessary - important is to hide the preloader overlay
            setTimeout(function() {

                // Hide preloader overlay when content is loaded
                $('#iot-preloader,.card-preloader').fadeOut();
                $("#wrapper").removeClass("hidden");

                // Initialize range sliders
                $('input[type="range"]').rangeslider({
                    polyfill: false,
                    onSlideEnd: function(position, value) {

                        var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};
                        // Update localStorage
                        if (localStorage) {
                            rangeValues[this.$element[0].id] = value;
                            localStorage.setItem("rangeValues", JSON.stringify(rangeValues));
                        }
                    }

                });

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

                        } else {
                            $('[data-unit="' + key + '"]').removeClass("active");
                            $("#" + key).prop('checked', false);
                            $("#" + key).closest("label").removeClass("checked");

                        }
                    }
                });

                // Range Slider values
                var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};

                $.each(rangeValues, function(key, value) {

                    // Apply only if element is included on the page
                    if ($('[data-rangeslider="' + key + '"]').length) {

                        var rangeKey = key.slice(0, -3);

                        if (rangeKey === 'room-temp') {
                            // Update Range slider - special case Room
                            var temperatureFar = value;
                            var temperatureCel = (temperatureFar - 32) * 5 / 9;
                            var roundCel = Number(Math.round(temperatureCel + 'e2') + 'e-2');
                            $('[data-rangeslider="' + key + '"] .room-temp-F').html(temperatureFar);
                            $('[data-rangeslider="' + key + '"] .room-temp-C').html(roundCel);

                            // If room temperature is lower than desired (71.6 F) - activate it
                            if (temperatureFar > 71.59) {
                                $('[data-unit="' + key + '"]').addClass("active");
                            } else {
                                $('[data-unit="' + key + '"]').removeClass("active");
                            }

                            // Update Range slider - universal
                            $('[data-rangeslider="' + key + '"] input[type="range"]').val(value);
                            $('[data-rangeslider="' + key + '"] .range-output').html(value);

                        } else {
                            // Update Range slider - universal
                            $('[data-rangeslider="' + key + '"] input[type="range"]').val(value);
                            $('[data-rangeslider="' + key + '"] .range-output').html(value);
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

            // Reposition to center when a modal is shown
            $('.modal.centered').on('show.bs.modal', iot.centerModal);

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

            // Data binding for numeric representation of Room temperature range slider
            $(document).on('input', 'input[type="range"].room-temp', function() {
                var temperatureFar = this.value;
                var temperatureCel = (temperatureFar - 32) * 5 / 9;
                var roundCel = Number(Math.round(temperatureCel + 'e2') + 'e-2');
                $('[data-rangeslider="' + this.id + '"] .room-temp-F').html(temperatureFar);
                $('[data-rangeslider="' + this.id + '"] .room-temp-C').html(roundCel);

                // If room temperature is lower than desired (71.6 F) - activate it
                if (temperatureFar > 71.59) {
                    $('[data-unit="' + this.id + '"]').addClass("active");
                } else {
                    $('[data-unit="' + this.id + '"]').removeClass("active");
                }
            });

            // Data binding for numeric representation of Fan speed range slider
            $(document).on('input', 'input[type="range"].fanspeed', function() {
                $('[data-rangeslider="' + this.id + '"] .range-output').html(this.value);
            });


            // Charts initializaton - Chartist.js
            var data02 = {
                // Labels array that can contain any sort of values
                labels: ['4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00'],
                // Series array that contains series objects or in this case series data arrays
                series: [
                    [-8, -7, -6, -4, -1, 1, 2, 4, 5, 4, 3, 2]
                ]
            };

            var options02 = {
                height: 240,
                high: 20,
                low: -20,
                scaleMinSpace: 12,
                onlyInteger: false,
                referenceValue: 0
            };

            var responsive_steps02 = [
                // Show only every second label
                ['screen and (max-width: 768px)', {
                    axisX: {
                        labelInterpolationFnc: function skipLabels(value, index, labels) {
                            return index % 2 === 0 ? value : null;
                        }
                    }
                }],
                // Show only every fourth label
                ['screen and (max-width: 480px)', {
                    axisX: {
                        labelInterpolationFnc: function skipLabels(value, index, labels) {
                            return index % 4 === 0 ? value : null;
                        }
                    }
                }]
            ];

            // Initialize a Bar chart in the container with the ID chart01
            new Chartist.Bar('#chart02', data02, options02, responsive_steps02)
                .on('draw', function(data02) {
                    if (data02.type === 'bar' && data02.value.y < 0) {
                        data02.element.attr({
                            class: 'ct-bar negative'
                        });
                    }
                });


        });

        // Apply necessary changes, functionality when content is loaded
        $(window).on('load', function() {

            // This script is necessary for cross browsers icon sprite support (IE9+, ...)
            svg4everybody();

            // "Timeout" function is not neccessary - important is to hide the preloader overlay
            setTimeout(function() {

                // Hide preloader overlay when content is loaded
                $('#iot-preloader,.card-preloader').fadeOut();
                $("#wrapper").removeClass("hidden");

                // Initialize range sliders
                $('input[type="range"]').rangeslider({
                    polyfill: false,
                    onSlideEnd: function(position, value) {

                        var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};
                        // Update localStorage
                        if (localStorage) {
                            rangeValues[this.$element[0].id] = value;
                            localStorage.setItem("rangeValues", JSON.stringify(rangeValues));
                        }
                    }

                });

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

                        } else {
                            $('[data-unit="' + key + '"]').removeClass("active");
                            $("#" + key).prop('checked', false);
                            $("#" + key).closest("label").removeClass("checked");

                        }
                    }
                });

                // Range Slider values
                var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};

                $.each(rangeValues, function(key, value) {

                    // Apply only if element is included on the page
                    if ($('[data-rangeslider="' + key + '"]').length) {

                        if (key === 'fridge-temp') {
                            // Update Range slider - special case Fridge
                            var temperatureFar = value;
                            var temperatureCel = (temperatureFar - 32) * 5 / 9;
                            var roundCel = Number(Math.round(temperatureCel + 'e2') + 'e-2');
                            $('[data-rangeslider="' + key + '"] #fridge-temp-F').html(temperatureFar);
                            $('[data-rangeslider="' + key + '"] #fridge-temp-C').html(roundCel);

                        } else {
                            // Update Range slider - universal
                            $('[data-rangeslider="' + key + '"] input[type="range"]').val(value);
                            $('[data-rangeslider="' + key + '"] .range-output').html(value);
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

            // Wash machine controls
            $('.wash-control').click(function() {

                var target = $(this).closest('.timer-controls').data('controls');
                var action = $(this).data('action');

                iot.washMachine(target, action);
            });


            // Reposition to center when a modal is shown
            $('.modal.centered').on('show.bs.modal', iot.centerModal);

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

            // Data binding for numeric representation of Fridge range slider
            $(document).on('input', 'input[type="range"]#fridge-temp', function() {
                var temperatureFar = this.value;
                var temperatureCel = (temperatureFar - 32) * 5 / 9;
                var roundCel = Number(Math.round(temperatureCel + 'e2') + 'e-2');
                $('[data-rangeslider="' + this.id + '"] #fridge-temp-F').html(temperatureFar);
                $('[data-rangeslider="' + this.id + '"] #fridge-temp-C').html(roundCel);
            });

            // Data binding for numeric representation of TV Volumee range slider
            $(document).on('input', 'input[type="range"].volume', function() {
                $('[data-rangeslider="' + this.id + '"] .range-output').html(this.value);
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
                duration: '1m10s',
                callback: function() {
                    $('[data-unit="wash-machine"]').removeClass('active');
                    $('[data-unit="wash-machine"] .status').html('OFF');
                }
            });

            $('[data-unit="wash-machine"] .timer-controls button[data-action="pause"]').css("display", "block");

            // "Timeout" function is not neccessary - important is to hide the preloader overlay
            setTimeout(function() {

                // Hide preloader overlay when content is loaded
                $('#iot-preloader,.card-preloader').fadeOut();
                $("#wrapper").removeClass("hidden");

                // Initialize range sliders
                $('input[type="range"]').rangeslider({
                    polyfill: false,
                    onSlideEnd: function(position, value) {

                        var rangeValues = JSON.parse(localStorage.getItem('rangeValues')) || {};
                        // Update localStorage
                        if (localStorage) {
                            rangeValues[this.$element[0].id] = value;
                            localStorage.setItem("rangeValues", JSON.stringify(rangeValues));
                        }
                    }

                });

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



</body>

</html>
