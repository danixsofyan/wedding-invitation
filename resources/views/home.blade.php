<?php
foreach ($detail as $item) {
    $finalDate = date_format(date_create($item->date), "F j, Y H:i:s");
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <base href="{{ asset('/') }}">
    <!--- basic page needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Undangan Online / Wedding Invitations" />
    <meta name="keywords" content="undangan online, wedding invitation, undangan digital" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="danixsofyan" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Wedding Invitations" />
    <meta property="og:site_name" content="Wedding Invitations" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    @foreach ($wedding as $item)
    <title>{{ $item->name }}</title>
    @endforeach

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="assets/undangan/css/vendor.css">
    <link rel="stylesheet" href="assets/undangan/css/styles.css">
    <link rel="stylesheet" href="assets/undangan/css/gallery-grid.css">

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="https://www.favicon.cc/logo3d/377601.png" />
    @livewireStyles
</head>

<body id="top" class="ss-preload theme-slides">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- intro
    ================================================== -->
    <section id="intro" class="s-intro">
        @foreach ($wedding as $item)
        <div class="s-intro__slider swiper-container">
            <div class="swiper-wrapper">
                <div class="s-intro__slide swiper-slide" style="background-image: url('{{ url('/storage/' . $item->hero1) }}');"></div>
                <div class="bg-opacity-50 s-intro__slide swiper-slide" style="background-image: url('{{ url('/storage/' . $item->hero2) }}');"></div>
                <div class="s-intro__slide swiper-slide bg-opacity-10"style="background-image: url('{{ url('/storage/' . $item->hero3) }}');"></div>
            </div>
        </div>

        <div class="row s-intro__content">
            <div class="column">

                <div class="text-pretitle">
                    The Wedding
                </div>

                
                <h1 class="text-huge-title">
                    {{ $item->name }}
                </h1>

                <div class="text-pretitle">
                    Dear: <span style="text-color:white; font-weight: bold;">{{ $to }}</span>
                    <br>We are inviting you to the wedding
                    <br>
                    <br>
                    <button href="#hidden" class="btn--stroke2 btn--small smoothscroll" style="text-color:white !important;">
                        Open Invitation
                    </button>
                    <!-- <a href="#hidden" class="btn btn--primary smoothscroll">Open Invitation</a> -->
                </div>
                @endforeach

                <div class="s-intro__content-bottom">

                    <div class="s-intro__content-bottom-block">
                        <h5>Save the date</h5>

                        <div class="counter">
                            <div class="counter__time">
                                <span class="ss-days">000</span>
                                <span>D</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-hours">00</span>
                                <span>H</span>
                            </div>
                            <div class="counter__time minutes">
                                <span class="ss-minutes">00</span>
                                <span>M</span>
                            </div>
                            <div class="counter__time">
                                <span class="ss-seconds">00</span>
                                <span>S</span>
                            </div>
                        </div> <!-- end counter -->

                    </div> <!-- end s-intro-content__bottom-block -->

                    <div class="s-intro__content-bottom-block">



                    </div> <!-- end s-intro-content__bottom-block -->

                </div>

            </div>
        </div> <!-- s-intro__content -->

        <div class="s-intro__scroll">
            <a href="#hidden" class="smoothscroll">
                Scroll For More
            </a>
        </div> <!-- s-intro__scroll -->

    </section> <!-- end s-intro -->


    <!-- hidden element
    ================================================== -->
    <div id="hidden" aria-hidden="true" style="opacity: 0;"></div>


    <!-- details
    ================================================== -->
    <section id="details" class="s-details">

        <div class="row">
            <div class="column">

                {{-- <p class="text-center desc-bride">We are inviting you to the wedding</p>
                <h1 class="text-center text-huge-title">
                    {{ $to }}
                </h1> --}}

                <nav class="tab-nav">
                    <ul class="tab-nav__list">
                        <li class="active" data-id="tab-couple">
                            <a href="#0">
                                <span>Bride & Groom</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-event">
                                <span>Event</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-gallery">
                                <span>Gallery</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-wishes">
                                <span>Wishes</span>
                            </a>
                        </li>
                        <li>
                            <a href="#tab-gift">
                                <span>Gift</span>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end tab-nav -->

                <div class="tab-content">

                    <!-- 01 - tab couple -->
                    <div id="tab-couple" class='text-center tab-content__item '>

                        <div class="row">
                            <div class="column">

                                <div class="row">
                                    @foreach ($bride as $item)
                                    <div class="column lg-6 tab-12">
                                        <p class="name-bride">{{ $item->name }}</p>
                                        <a href="{{ $item->instagram }}" target="_blank">
                                            <p class="desc-bride">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                                </svg>
                                                <b>instagram</b>
                                            </p>
                                        </a>
                                        <br>
                                        <img src="{{ url('/storage/') }}/{{ $item->photo }}" style="height:500px; widht:auto;">
                                        <p class="desc-bride">
                                            {{ $item->child }}
                                        </p>
                                        <p>
                                            {{ $item->name_mother }}
                                            &<br>
                                            {{ $item->name_father }}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div> <!-- end 01 - tab couple -->

                    <!-- 02 - tab event -->
                    <div id="tab-event" class='tab-content__item'>

                        <div class="row tab-content__item-header">
                            <div class="column">
                                <h2>Save the date</h2>
                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <p class="desc">
                                    Kami sangat berharap anda dapat hadir di moment bahagia ini
                                </p>
                            </div>
                        </div>

                        <div class="row services-list block-lg-one-half block-md-one-half block-tab-whole">
                            @foreach ($detail as $item)
                            <div class="column services-list__item">
                                <div class="services-list__item-content">
                                    <h4 class="item-title">{{ $item->type }}</h4>
                                    <p class="desc-bride">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                            <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                            <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                        {{ date_format(date_create($item->date),"d F Y");  }}
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                                        </svg>
                                        {{ date_format(date_create($item->date),"H:i:s");  }}
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        </svg>
                                        {{ $item->address }}
                                        <br>
                                        <br>
                                        <a href="{{ $item->maps }}" class="btn btn--stroke u-fullwidth" target="_blank">View Maps</a>
                                        <a href="{{ $item->calendar }}" class="btn btn--stroke u-fullwidth" target="_blank">Add to calendar</a>
                                    </p>
                                </div>
                            </div>
                            @endforeach

                        </div> <!-- end services-list -->

                    </div> <!-- end 02 - tab event -->

                    <!-- 03 - tab gallery -->
                    @foreach ($galery as $item)
                    <div id="tab-gallery" class="tab-content__item">
                        <div class="tz-gallery">

                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery1 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery1 }}">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery2 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery2 }}">
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery3 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery3 }}">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery4 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery4 }}">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery5 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery5 }}">
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <a class="lightbox" href="{{ url('/storage/') }}/{{ $item->gallery6 }}">
                                        <img src="{{ url('/storage/') }}/{{ $item->gallery6 }}">
                                    </a>
                                </div>
                            </div>
                            @if (isset($item->video) && $item->video !== '-')
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $item->video }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    <!-- end 03 - tab gallery -->

                    <!-- 04 - tab wishes -->
                    <div id="tab-wishes" class="tab-content__item">
                        @foreach ($thank as $item)
                        <p>{{ $item->note }}</p>
                        @endforeach
                        <br>

                        <div class="row">

                            <div class="column lg-6 tab-12">
                                <livewire:create-wish>
                            </div>

                            <div class="column lg-6 tab-12" style=" height: 500px; overflow: auto;">
                                <p><b>Ucapan & Doa</p></b>
                                <livewire:list-wish>
                            </div>

                        </div>

                    </div> <!-- end 04 - tab wishes -->

                    <!-- 05 - tab gift -->
                    <div id="tab-gift" class="tab-content__item">
                        <p>Tanpa mengurangi rasa hormat, bagi anda yang ingin memberikan tanda kasih untuk mempelai dapat melalui: </p>

                        <div class="row">
                            <div class="column">
                                <div class="row">
                                    @foreach ($gift as $item)
                                    <div class="column lg-6 tab-12">
                                        <h4>Alamat</h4>
                                        <p class="desc">
                                            {{ $item->address }}
                                            <br>
                                            @if(!$item->note) @else Patokan : {{ $item->note }} @endif
                                            <a href="{{ $item->maps }}" target="_blank">{{ $item->maps }}</a>
                                        </p>

                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="column">
                                <div class="row">
                                    @foreach ($bank as $item)
                                    <div class="column lg-6 tab-12">
                                        <h4>{{ $item->name }}</h4>
                                        <img src="{{ url('/storage/') }}/{{ $item->logo }}" style="height:30px; widht:auto;">
                                        <p class="desc">
                                            {{ $item->acc_number }}
                                            <br>a/n {{ $item->acc_name }}
                                        </p>

                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>

                    </div> <!-- end 05 - tab gift -->

                </div> <!-- end tab content -->

                <!-- footer  -->
                <footer>
                    <div class="ss-copyright">
                        @foreach ($wedding as $item)
                        <span>© Copyright {{ $item->name }} {{date("Y")}}</span>
                        @endforeach
                        <span>Developed by <a href="https://wa.me/6287823327307" target="_blank">danixsofyan</a></span>
                    </div>
                </footer>

            </div>
        </div>

        <div class="ss-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top">
                <span>Back to Top</span>
                <svg viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                    <path d="M7.5 1.5l.354-.354L7.5.793l-.354.353.354.354zm-.354.354l4 4 .708-.708-4-4-.708.708zm0-.708l-4 4 .708.708 4-4-.708-.708zM7 1.5V14h1V1.5H7z" fill="currentColor"></path>
                </svg>
            </a>
        </div> <!-- end ss-go-top -->

    </section> <!-- end s-details -->


    <!-- Java Script
    ================================================== -->
    <script src="assets/undangan/js/plugins.js"></script>
    <script src="assets/undangan/js/main.js"></script>
    <Script>
        (function(html) {

            'use strict';

            html.className = html.className.replace(/\bno-js\b/g, '') + 'js';

            const cfg = {

                // Countdown Timer Final Date
                finalDate: '<?php echo $finalDate; ?>',
                // MailChimp URL
                mailChimpURL: 'https://facebook.us1.list-manage.com/subscribe/post?u=1abf75f6981256963a47d197a&amp;id=37c6d8f4d6'

            };

            /* Countdown Timer
             * ------------------------------------------------------ */
            const ssCountdown = function() {

                const finalDate = new Date(cfg.finalDate).getTime();
                const daysSpan = document.querySelector('.counter .ss-days');
                const hoursSpan = document.querySelector('.counter .ss-hours');
                const minutesSpan = document.querySelector('.counter .ss-minutes');
                const secondsSpan = document.querySelector('.counter .ss-seconds');
                let timeInterval;

                if (!(daysSpan && hoursSpan && minutesSpan && secondsSpan)) return;

                function timer() {

                    const now = new Date().getTime();
                    let diff = finalDate - now;

                    if (diff <= 0) {
                        if (timeInterval) {
                            clearInterval(timeInterval);
                        }
                        return;
                    }

                    let days = Math.floor(diff / (1000 * 60 * 60 * 24));
                    let hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
                    let minutes = Math.floor((diff / 1000 / 60) % 60);
                    let seconds = Math.floor((diff / 1000) % 60);

                    if (days <= 99) {
                        if (days <= 9) {
                            days = '00' + days;
                        } else {
                            days = '0' + days;
                        }
                    }

                    hours <= 9 ? hours = '0' + hours : hours;
                    minutes <= 9 ? minutes = '0' + minutes : minutes;
                    seconds <= 9 ? seconds = '0' + seconds : seconds;

                    daysSpan.textContent = days;
                    hoursSpan.textContent = hours;
                    minutesSpan.textContent = minutes;
                    secondsSpan.textContent = seconds;

                }

                timer();
                timeInterval = setInterval(timer, 1000);
            };

            /* Initialize
             * ------------------------------------------------------ */
            (function ssInit() {
                ssCountdown();

            })();

        })(document.documentElement);
    </Script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    @include('sweetalert::alert')
    @livewireScripts
</body>

</html>