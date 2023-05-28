<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">


    <title>@yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <link rel="icon" type="image/x-icon" href="{{  asset('/img/kimaya-logo.png') }}" />
    <link rel="stylesheet" href="{{  asset('/css/styles.css') }}">
    <link rel="stylesheet" href="{{  asset('/css/navbar.css') }}">
    @stack('styles')


</head>

<body>
    <div class="custom-container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="main-nav navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{'/'}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('master-data*')) ? 'active' : '' }}" href="{{'/master-data'}}">Master Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('scoring*')) ? 'active' : '' }}" href="{{'scoring'}}">Scoring</a>
                        </li>
                    </ul>
                    <!-- <div class="searchBar">
                        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                        <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.3333 17.4167L16.6666 15.8333M9.58329 16.625C10.6229 16.625 11.6524 16.4305 12.6129 16.0525C13.5734 15.6746 14.4461 15.1206 15.1812 14.4222C15.9164 13.7238 16.4995 12.8947 16.8973 11.9823C17.2952 11.0698 17.5 10.0918 17.5 9.10418C17.5 8.11653 17.2952 7.13855 16.8973 6.22608C16.4995 5.31361 15.9164 4.48452 15.1812 3.78614C14.4461 3.08777 13.5734 2.53379 12.6129 2.15583C11.6524 1.77788 10.6229 1.58334 9.58329 1.58334C7.48366 1.58334 5.47003 2.37571 3.98536 3.78614C2.5007 5.19657 1.66663 7.10953 1.66663 9.10418C1.66663 11.0988 2.5007 13.0118 3.98536 14.4222C5.47003 15.8326 7.48366 16.625 9.58329 16.625V16.625Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div> -->
                    <!-- make notif icon and profile icon -->
                    <div class="icons">
                        <a href="#" id="news" class="btn mt-20">
                            <svg width="33" height="39" viewBox="0 0 33 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.25 26.8438V17.0521C28.25 11.04 25.058 6.00708 19.4375 4.67542V3.34375C19.4375 1.71833 18.1255 0.40625 16.5 0.40625C14.8746 0.40625 13.5625 1.71833 13.5625 3.34375V4.67542C7.96171 6.00708 4.75004 11.0204 4.75004 17.0521V26.8438L0.833374 30.7604V32.7188H32.1667V30.7604L28.25 26.8438ZM16.5 38.5938C18.6542 38.5938 20.4167 36.8312 20.4167 34.6771H12.5834C12.5834 36.8312 14.3459 38.5938 16.5 38.5938ZM8.66671 28.8021H24.3334V17.0521C24.3334 12.1954 21.3763 8.23958 16.5 8.23958C11.6238 8.23958 8.66671 12.1954 8.66671 17.0521V28.8021Z" fill="black" fill-opacity="0.54" />
                            </svg>
                            <span class="icon-button__badge">2</span>
                        </a>

                        <div style="display:none" class="alert_list">
                            <ul class="unstyled">
                                <li data-alert_id="1" class="alert_li"><a href="#" class="alert_message">Messaggio di notifica un po più lungo del normale</a> <br /><a href="#" class="turn_off_alert">turn off</a>
                                    <div class="clearfix"></div>
                                </li>
                                <li data-alert_id="2" class="alert_li"><a href="#">Messaggio di notifica 2 un po più lungo del normale</a> <br /><a href="#" class="turn_off_alert">turn off</a>
                                    <div class="clearfix"></div>
                                </li>
                                <li data-alert_id="3" class="alert_li"><a href="#">Messaggio di notifica un po più lungo del normale</a> <br /><a href="#" class="turn_off_alert">turn off</a>
                                    <div class="clearfix"></div>
                                </li>
                            </ul>
                        </div>

                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset('img/profile.png') }}" width="40px" alt="profile" />
                            <span class="username">
                                {{ Auth::user()->nama }}
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="#" class="dropdown-item">
                                <img src="{{'/img/upload-img.svg'}}" alt="">
                                Upload Picture</a>
                            <a href="{{'/add-user'}}" class="dropdown-item">
                                <img src="{{'/img/add-user.svg'}}" alt="">
                                Add User</a>
                            <a href="{{'logout'}}" class="dropdown-item">
                                <img src="{{'/img/logout.svg'}}" alt="">
                                Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <script>
        $("#news").popover({
            'title': 'Notifiche',
            'html': true,
            'placement': 'bottom',
            'content': $(".alert_list").html()
        });

        $('.turn_off_alert').live('click', function(event) {
            var alert = $(this).parent();
            var alert_id = alert.data("alert_id");
            alert.hide("fast");

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    @stack('scripts')

</body>

</html>