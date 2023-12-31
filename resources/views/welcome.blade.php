<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OUARCHATE AL ASDIQAE') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link id="theme-style" rel="stylesheet" href="{{ asset('assets/css/portal.min.css') }} ">
    {{-- <link rel="stylesheet" href="{{asset('assets/css/select.css')}}"> --}}
</head>

<body>
    <div id="app">
        @include('./layouts/nav')
        <main>
            <div class="container my-5">
                <div class="row p-4 gap-4  p-lg-5  rounded-3 border shadow-sm">
                    @if (Route::has('login'))
                    @auth
                    <h1 >
                        <span  id="welcom"></span> <span class=" text-capitalize" style="text-decoration:underline;text-decoration-style:wavy;text-decoration-color:#C53F3F">{{Auth::user()->name}}</span> </h1>
                    <script>
                        const time = document.querySelector('#welcom');
                        const now = new Date();
                        now.getHours() >= 12
                        ?
                        time.innerText='Bonsoir'
                        :
                        time.innerText='Bonjour'
                    </script>

                        <span class="col-lg-6 row d-flex justify-content-center ">
                            <a href="{{ route('orders.index') }}"
                                class=" col-12  bg-info p-2 p-lg-4 p-lg-5 rounded-5 border hover-card">
                                <h1 class=" text-white align-content-center text-center">Creation des Factures</h1>
                                <span class="d-flex justify-content-center">
                                    <svg class="animated" height='281' id="freepik_stories-printing-invoices"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                        <style>
                                            svg#freepik_stories-printing-invoices:not(.animated) .animable {
                                                opacity: 0;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--Pictures--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--Clock--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--device-2--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--device-1--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--Table--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-printing-invoices.animated #freepik--Character--inject-2 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            @keyframes fadeIn {
                                                0% {
                                                    opacity: 0;
                                                }

                                                100% {
                                                    opacity: 1;
                                                }
                                            }

                                            .animator-hidden {
                                                display: none;
                                            }
                                        </style>
                                        <g id="freepik--background-simple--inject-2" class="animable animator-hidden"
                                            style="transform-origin: 251.603px 233.558px;">
                                            <path
                                                d="M137.32,70.2s-69.7,48.72-98.89,112.87S22.77,322.53,76.12,372.46s139.23,30.36,217,55.83,157,6.91,180.9-73.4-32-101.27-53.09-187.39S303.16-35.56,137.32,70.2Z"
                                                style="fill: #407BFF; transform-origin: 251.603px 233.558px;"
                                                id="elm4ujczf5gn" class="animable"></path>
                                            <g id="el2w7xldq4jv">
                                                <path
                                                    d="M137.32,70.2s-69.7,48.72-98.89,112.87S22.77,322.53,76.12,372.46s139.23,30.36,217,55.83,157,6.91,180.9-73.4-32-101.27-53.09-187.39S303.16-35.56,137.32,70.2Z"
                                                    style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 251.603px 233.558px;"
                                                    class="animable" id="elw96vggwwik"></path>
                                            </g>
                                        </g>
                                        <g id="freepik--Pictures--inject-2" class="animable"
                                            style="transform-origin: 154.5px 184px;">
                                            <rect x="174" y="106" width="78" height="103"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 213px 157.5px;"
                                                id="elu4l2n6qdkai" class="animable"></rect>
                                            <rect x="183.09" y="118" width="59.83" height="79"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 213.005px 157.5px;"
                                                id="eluyrgay0cd2l" class="animable"></rect>
                                            <rect x="57" y="159" width="78" height="103"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96px 210.5px;"
                                                id="elyz115b9prd" class="animable"></rect>
                                            <rect x="66.09" y="171" width="59.83" height="79"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 96.005px 210.5px;"
                                                id="elad5c4k7eij4" class="animable"></rect>
                                        </g>
                                        <g id="freepik--Clock--inject-2" class="animable"
                                            style="transform-origin: 363.96px 140.83px;">
                                            <g id="el12auxgb2avmp">
                                                <circle cx="363.96" cy="140.83" r="45.04"
                                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 363.96px 140.83px; transform: rotate(-5.72deg);"
                                                    class="animable" id="elspwwewf17m"></circle>
                                            </g>
                                            <g id="el3sxzfw5y2id">
                                                <circle cx="363.96" cy="140.83" r="37.32"
                                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 363.96px 140.83px; transform: rotate(-8.46deg);"
                                                    class="animable" id="elweyhjdahhi9"></circle>
                                            </g>
                                            <polyline points="340.15 140.83 363.96 140.83 363.96 175.18"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 352.055px 158.005px;"
                                                id="elres4s398mwp" class="animable"></polyline>
                                        </g>
                                        <g id="freepik--device-2--inject-2" class="animable"
                                            style="transform-origin: 300.755px 303.365px;">
                                            <path
                                                d="M333.7,355.31l15.8,25.45a4.87,4.87,0,0,1-4.14,7.44H313.09a4.87,4.87,0,0,0,4.15-7.42L302,355.88Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 326.117px 371.755px;"
                                                id="elwp6fjy2aiy" class="animable"></path>
                                            <polygon
                                                points="333.7 355.31 301.95 355.88 307.83 365.46 340 365.46 333.7 355.31"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 320.975px 360.385px;"
                                                id="elj3ujs7gejo" class="animable"></polygon>
                                            <g id="elbezxezgvs3s">
                                                <rect x="246.37" y="247" width="134.96" height="113.98"
                                                    rx="2.91"
                                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 313.85px 303.99px; transform: rotate(180deg);"
                                                    class="animable" id="eliiryktpispo"></rect>
                                            </g>
                                            <g id="elt3mkd4k32zj">
                                                <rect x="241.27" y="247" width="134.96" height="113.98"
                                                    rx="2.91"
                                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.75px 303.99px; transform: rotate(180deg);"
                                                    class="animable" id="eln9lqwe98pc"></rect>
                                            </g>
                                            <path
                                                d="M245.81,247H371.7a4.53,4.53,0,0,1,4.53,4.54v89h-135v-89A4.54,4.54,0,0,1,245.81,247Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.73px 293.77px;"
                                                id="elpameptlmv4" class="animable"></path>
                                            <g id="el2wgfki4pjdh">
                                                <rect x="246.94" y="251.54" width="123.62" height="82.79"
                                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 308.75px 292.935px; transform: rotate(180deg);"
                                                    class="animable" id="eld0ptfktkxxo"></rect>
                                            </g>
                                            <path d="M289,260.62h1.48V270H289Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 289.74px 265.31px;"
                                                id="elg7eac0kha6o" class="animable"></path>
                                            <path d="M292.87,263.22V270h-1.33v-9.41h1.86l1.52,5.63v-5.63h1.32V270h-1.52Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 293.89px 265.295px;"
                                                id="el41lab7g0403" class="animable"></path>
                                            <path d="M299.53,268.3l1.13-7.68H302L300.57,270h-2.21l-1.45-9.41h1.49Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 299.455px 265.295px;"
                                                id="eldymyxhmabep" class="animable"></path>
                                            <path
                                                d="M302.57,262.88a2.25,2.25,0,1,1,4.49,0v4.89a2.25,2.25,0,1,1-4.49,0Zm1.48,5c0,.67.3.92.77.92s.76-.25.76-.92v-5.08c0-.68-.29-.93-.76-.93s-.77.25-.77.93Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 304.815px 265.325px;"
                                                id="eldv0mumv3ev9" class="animable"></path>
                                            <path d="M308,260.62h1.48V270H308Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 308.74px 265.31px;"
                                                id="el3z9u8zrtyck" class="animable"></path>
                                            <path
                                                d="M314.86,266.52v1.25c0,1.51-.75,2.37-2.2,2.37a2.07,2.07,0,0,1-2.21-2.37v-4.89a2.07,2.07,0,0,1,2.21-2.37c1.45,0,2.2.86,2.2,2.37v.91h-1.39v-1c0-.68-.3-.93-.77-.93s-.77.25-.77.93v5.08c0,.67.3.91.77.91s.77-.24.77-.91v-1.35Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 312.644px 265.325px;"
                                                id="eljyg0ymeqe1b" class="animable"></path>
                                            <path d="M317.24,264.59h2v1.34h-2v2.76h2.56V270h-4v-9.41h4V262h-2.56Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 317.8px 265.295px;"
                                                id="elqzsmqj5qlz" class="animable"></path>
                                            <rect x="252.08" y="273.75" width="114.1" height="7.06"
                                                style="fill: #407BFF; transform-origin: 309.13px 277.28px;"
                                                id="elqhctnq3u8jm" class="animable"></rect>
                                            <polyline points="252.45 326.52 252.45 285.64 365.44 285.64 365.44 328.01"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 308.945px 306.825px;"
                                                id="el3sqi396itm5" class="animable"></polyline>
                                            <line x1="252.83" y1="299.39" x2="365.07" y2="299.39"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 308.95px 299.39px;"
                                                id="elbsrnabehreq" class="animable"></line>
                                            <line x1="334.22" y1="285.34" x2="334.22" y2="328.01"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 334.22px 306.675px;"
                                                id="eld7vb0b5bcxe" class="animable"></line>
                                            <rect x="187.68" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 189.645px 383.155px;"
                                                id="elq1l5n3konx" class="animable"></rect>
                                            <rect x="192.91" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 194.875px 383.155px;"
                                                id="eli53ycjyctn" class="animable"></rect>
                                            <rect x="198.15" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 200.115px 383.155px;"
                                                id="el5svz5gc4g4v" class="animable"></rect>
                                            <rect x="203.38" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 205.345px 383.155px;"
                                                id="el4o3lf95pu2t" class="animable"></rect>
                                            <rect x="208.62" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 210.585px 383.155px;"
                                                id="elka75o61n68b" class="animable"></rect>
                                            <rect x="213.85" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 215.815px 383.155px;"
                                                id="elpsisnh563u" class="animable"></rect>
                                            <rect x="219.09" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 221.055px 383.155px;"
                                                id="elx34fnoud0ni" class="animable"></rect>
                                            <rect x="224.32" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 226.285px 383.155px;"
                                                id="el2wg64sbrqlo" class="animable"></rect>
                                            <rect x="229.56" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 231.525px 383.155px;"
                                                id="elziy5of6jbq" class="animable"></rect>
                                            <rect x="234.79" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 236.755px 383.155px;"
                                                id="ele75mojsqtn" class="animable"></rect>
                                            <rect x="240.03" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.995px 383.155px;"
                                                id="elaccv8z75jrv" class="animable"></rect>
                                            <rect x="245.26" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 247.225px 383.155px;"
                                                id="elovhoortl949" class="animable"></rect>
                                            <rect x="250.5" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 252.465px 383.155px;"
                                                id="elk7j6y5iv76p" class="animable"></rect>
                                            <rect x="255.73" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 257.695px 383.155px;"
                                                id="el4at4ijmjqgl" class="animable"></rect>
                                            <rect x="260.97" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 262.935px 383.155px;"
                                                id="el8u9ay0l1aob" class="animable"></rect>
                                            <rect x="266.2" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 268.165px 383.155px;"
                                                id="elgdx9z46kzzs" class="animable"></rect>
                                            <rect x="271.44" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 273.405px 383.155px;"
                                                id="elcz1upwpjay" class="animable"></rect>
                                            <rect x="276.67" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 278.635px 383.155px;"
                                                id="eltajjndsb198" class="animable"></rect>
                                            <rect x="281.91" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 283.875px 383.155px;"
                                                id="el22igmb1pub1" class="animable"></rect>
                                            <rect x="287.14" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 289.105px 383.155px;"
                                                id="elvcdckkyyrib" class="animable"></rect>
                                            <rect x="292.38" y="382.5" width="3.93" height="1.31"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 294.345px 383.155px;"
                                                id="elhy8b5g826wn" class="animable"></rect>
                                            <rect x="185.65" y="384" width="113.51" height="4.23"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 242.405px 386.115px;"
                                                id="elaad545vt8hu" class="animable"></rect>
                                            <rect x="271.47" y="384" width="27.69" height="4.23"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 285.315px 386.115px;"
                                                id="el5a3uy34lj7q" class="animable"></rect>
                                            <polygon
                                                points="408.88 292.63 408.88 278 398.38 278 398.38 292.63 391.39 292.63 403.63 313.83 415.86 292.63 408.88 292.63"
                                                style="fill: rgb(38, 50, 56); transform-origin: 403.625px 295.915px;"
                                                id="elypn8k9lqh1f" class="animable"></polygon>
                                            <line x1="328" y1="240.5" x2="328" y2="239"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 328px 239.75px;"
                                                id="el8ihyela2wbs" class="animable"></line>
                                            <path d="M328,236.05V225.5a7,7,0,0,1,7-7h62a7,7,0,0,1,7,7V271"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; stroke-dasharray: 2.94814, 2.94814; transform-origin: 366px 244.75px;"
                                                id="el7e5fn0roeer" class="animable"></path>
                                            <line x1="404" y1="272.5" x2="404" y2="274"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 404px 273.25px;"
                                                id="elj9e6nk6mnrm" class="animable"></line>
                                        </g>
                                        <g id="freepik--device-1--inject-2" class="animable"
                                            style="transform-origin: 379.295px 351.63px;">
                                            <path
                                                d="M367.75,322.5h63.5a6.25,6.25,0,0,1,6.25,6.25v50.51a0,0,0,0,1,0,0h-76a0,0,0,0,1,0,0V328.75A6.25,6.25,0,0,1,367.75,322.5Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 399.5px 350.88px;"
                                                id="eledjfvg4list" class="animable"></path>
                                            <rect x="365.5" y="315.5" width="68" height="63.76"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 399.5px 347.38px;"
                                                id="elxiv8pop084m" class="animable"></rect>
                                            <path
                                                d="M326.86,346.09H446.07a3.82,3.82,0,0,1,3.82,3.82v37.85a0,0,0,0,1,0,0h-123a0,0,0,0,1,0,0V346.09A0,0,0,0,1,326.86,346.09Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 388.375px 366.925px;"
                                                id="elcjwhx7fsjdl" class="animable"></path>
                                            <path
                                                d="M311.06,346.09H429.31a2.39,2.39,0,0,1,2.39,2.39v39.28a0,0,0,0,1,0,0h-123a0,0,0,0,1,0,0V348.48A2.39,2.39,0,0,1,311.06,346.09Z"
                                                style="fill: rgb(99, 99, 99); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 370.2px 366.925px;"
                                                id="els95xpve936l" class="animable"></path>
                                            <path
                                                d="M319.26,346.09H421.12a0,0,0,0,1,0,0v27.28a8.43,8.43,0,0,1-8.43,8.43h-85a8.43,8.43,0,0,1-8.43-8.43V346.09A0,0,0,0,1,319.26,346.09Z"
                                                style="fill: rgb(99, 99, 99); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 370.19px 363.945px;"
                                                id="el3tvkui2mztp" class="animable"></path>
                                            <rect x="338.11" y="346.09" width="64.16" height="41.67"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 370.19px 366.925px;"
                                                id="elk44exyd39m" class="animable"></rect>
                                            <path
                                                d="M343.73,367.77s2.18,10.37-2.74,14.2-29.49,3-29.49,3h80.29s9.83,2.46,9.28-15.29Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 356.296px 376.428px;"
                                                id="el52u7ecn5yul" class="animable"></path>
                                            <polygon
                                                points="392.96 383.42 341.56 383.42 344.37 381.85 394.98 381.85 392.96 383.42"
                                                style="fill: #407BFF; transform-origin: 368.27px 382.635px;"
                                                id="ele75nc257t14" class="animable"></polygon>
                                            <path d="M348.25,371.42c0,6.34-1.5,8.67-1.5,8.67h49.53s2.17-1.33,2.67-8.5"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 372.85px 375.755px;"
                                                id="el05k7zbq24zlg" class="animable"></path>
                                            <line x1="347.59" y1="377.09" x2="397.78" y2="377.09"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 372.685px 377.09px;"
                                                id="el1spuhczlwpy" class="animable"></line>
                                            <line x1="348.09" y1="373.92" x2="398.45" y2="373.92"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 373.27px 373.92px;"
                                                id="elw0k7bfsw5uq" class="animable"></line>
                                            <path d="M380.44,379.92s2.5-2.33,2.33-8.5"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 381.609px 375.67px;"
                                                id="elxt0xzhvrvjp" class="animable"></path>
                                            <rect x="338.11" y="346.09" width="64.16" height="23.91"
                                                style="fill: rgb(99, 99, 99); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 370.19px 358.045px;"
                                                id="elkekb8hc67z" class="animable"></rect>
                                            <rect x="332.29" y="385.02" width="69.97" height="2.74"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 367.275px 386.39px;"
                                                id="eljz5q7a8wio" class="animable"></rect>
                                            <path
                                                d="M335.79,346.09h68.79a0,0,0,0,1,0,0v3.31A6.61,6.61,0,0,1,398,356H342.41a6.61,6.61,0,0,1-6.61-6.61v-3.31A0,0,0,0,1,335.79,346.09Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 370.185px 351.04px;"
                                                id="elp6ta8z7kuxh" class="animable"></path>
                                            <path
                                                d="M427.73,353.53a2.15,2.15,0,1,1-2.15-2.15A2.15,2.15,0,0,1,427.73,353.53Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 425.58px 353.53px;"
                                                id="el661is760w0r" class="animable"></path>
                                            <path
                                                d="M427.73,363.12a2.15,2.15,0,1,1-2.15-2.15A2.15,2.15,0,0,1,427.73,363.12Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 425.58px 363.12px;"
                                                id="elphj4tfu05xn" class="animable"></path>
                                            <path
                                                d="M426.09,384.35h-1.3a1.78,1.78,0,0,1-1.78-1.78h0a1.79,1.79,0,0,1,1.78-1.79h1.3a1.78,1.78,0,0,1,1.78,1.79h0A1.78,1.78,0,0,1,426.09,384.35Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 425.44px 382.565px;"
                                                id="elkqf7vls841q" class="animable"></path>
                                        </g>
                                        <g id="freepik--Table--inject-2" class="animable"
                                            style="transform-origin: 264.5px 415.49px;">
                                            <polyline points="369.02 442.77 369.02 399.26 349.85 399.26 349.85 442.92"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 359.435px 421.09px;"
                                                id="elguahp3gs5uw" class="animable"></polyline>
                                            <rect x="359.44" y="399.26" width="9.59" height="44.05"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.235px 421.285px;"
                                                id="elcfm51enxaz" class="animable"></rect>
                                            <polyline points="454.89 442.77 454.89 399.26 435.71 399.26 435.71 442.92"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 445.3px 421.09px;"
                                                id="el6vny1kj2mjv" class="animable"></polyline>
                                            <rect x="445.3" y="399.26" width="9.59" height="44.05"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 450.095px 421.285px;"
                                                id="elsqup7ahjhp" class="animable"></rect>
                                            <rect x="69" y="391.81" width="391" height="15.18"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 264.5px 399.4px;"
                                                id="eljus7pi79s5g" class="animable"></rect>
                                            <rect x="365.92" y="391.81" width="94.08" height="15.18"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 412.96px 399.4px;"
                                                id="el9wtpdxki8zu" class="animable"></rect>
                                            <rect x="69" y="387.67" width="391" height="5.33"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 264.5px 390.335px;"
                                                id="eldfo9x01ik4u" class="animable"></rect>
                                            <rect x="374.45" y="387.67" width="85.55" height="5.33"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 417.225px 390.335px;"
                                                id="el4autyp5tlv5" class="animable"></rect>
                                        </g>
                                        <g id="freepik--Character--inject-2" class="animable animator-active"
                                            style="transform-origin: 165.75px 294.76px;">
                                            <path
                                                d="M193.56,180.07s.71,6.17.24,8.54-3.08,3.8-2.85,5.46,6.17,10.2,3.32,13.05a14,14,0,0,1-5.22,3.56L187.16,215s-11.39,7.36-15.9,9.26-.48,10.91-.48,10.91l-11.63-2.61L156.31,246s-8.78-8.55-20.65-12.34-16.37-3.32-16.37-3.32a74.75,74.75,0,0,0,4.27-14.72c1.66-8.78,2.61-28.24,2.61-29.66s7.59-23.25,14.24-27.53,33.69.48,47.93,4,8.07,13.76,8.07,13.76Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 158.515px 201.368px;"
                                                id="eluhgkiboruhk" class="animable"></path>
                                            <path
                                                d="M193.09,187.66s-.71-2.61-3.8-1.66-3.8,2.61-2.61,2.61,4-1.42,4.75,0S192.85,189.32,193.09,187.66Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 189.612px 187.582px;"
                                                id="elsywourx32km" class="animable"></path>
                                            <path d="M188.82,196.2l-1.43.72s2.14,1.42,1.19,4.74-1.9,6.17-1.9,6.17"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 187.752px 202.015px;"
                                                id="el7j9cc2mw0q9" class="animable"></path>
                                            <path
                                                d="M180.27,173.66s2.14,9,1.19,10.92-8.07,4.51-8.78,7.12-2.13,16.61-1.66,19.22,1.66,7.12,2.85,7.12,10-6.65,13.29-6.89,1.89,5.7.23,7.6-5,2.37-4.74,4.51,4.51,9.49-.24,15.9-10.2,5-15.9.47-6.64-12.1-5-16.37,4.27-15.43,4.51-20.41-.95-11.39-4.51-10-.71,15.43-3.32,18.51-13.06,11.87-15.9,11.87-18.28-6.88-18.75-7.6,1.42-32.51-.47-45.08,2.61-21.6,17.08-25.87S181,148.27,181,148.27s-2.61-4.27,3.08-6.17,19.22,3.32,20.17,11.87-4,8.78-3.32,11.62,9.73,8.31,5,12.82-12.34,1.66-12.34,1.66l-.95-7.36S187.63,166.54,180.27,173.66Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 164.977px 192.608px;"
                                                id="elgi9j5yd43ih" class="animable"></path>
                                            <path
                                                d="M181.46,191.46l-22.54-.71s-4.75,1.18-5.22,3.79-.95,8.78.47,9,1.43-1.42,1.43-3.56,0-5.46,1.89-6.64a13.93,13.93,0,0,1,5.22-1.43l19.23,1.9,18,1.43v-3.09Z"
                                                style="fill: rgb(94, 94, 94); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 176.583px 197.155px;"
                                                id="elnpdm6smk0xg" class="animable"></path>
                                            <path
                                                d="M165.32,200.71s.72-7.59-3.08-9.73-6.41,3.8-6.64,9,3.32,11.63,7.83,10.44"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 160.482px 200.548px;"
                                                id="eljev9mhnjf7i" class="animable"></path>
                                            <path d="M200,195.26s.47,5.45-1.66,8.06a11,11,0,0,1-2.85,2.38"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 197.767px 200.48px;"
                                                id="ele987gf5xzxd" class="animable"></path>
                                            <path
                                                d="M266.14,239.44l-9.54,33.39-7.15,19.08-7.75,20.56s-21.47-.29-31-2.08S184,302.5,184,302.5A172.9,172.9,0,0,0,203.5,259c4.05-14.16,7.19-25.52,7.19-25.52Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 225.07px 272.975px;"
                                                id="el2n1pj56hfgh" class="animable"></path>
                                            <path
                                                d="M218.36,254.74s-7.14,25.63-10.06,30.82L243,290.75s6.49-11.36,11.36-31.15Z"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 231.33px 272.745px;"
                                                id="elnbz0ry8qed" class="animable"></path>
                                            <line x1="216.41" y1="260.58" x2="252.42" y2="265.44"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 234.415px 263.01px;"
                                                id="elepasgtgd9hi" class="animable"></line>
                                            <line x1="214.79" y1="269.01" x2="249.39" y2="273.6"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 232.09px 271.305px;"
                                                id="elckmlc16h58e" class="animable"></line>
                                            <line x1="211.94" y1="277.58" x2="246.66" y2="282.45"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 229.3px 280.015px;"
                                                id="el9yfm84vcgrd" class="animable"></line>
                                            <polyline points="234.57 280.84 227.76 299.51 238.79 301.78 242.69 288.8"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 235.225px 291.31px;"
                                                id="elup4nr4sn3xm" class="animable"></polyline>
                                            <line x1="195" y1="287.5" x2="209.27" y2="290.1"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 202.135px 288.8px;"
                                                id="eltahw1qdis2" class="animable"></line>
                                            <line x1="194.03" y1="289.45" x2="208.3" y2="292.05"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 201.165px 290.75px;"
                                                id="elik7rnohfxgf" class="animable"></line>
                                            <line x1="193.05" y1="291.4" x2="207.33" y2="293.99"
                                                style="fill: none; stroke: rgb(163, 163, 163); stroke-miterlimit: 10; transform-origin: 200.19px 292.695px;"
                                                id="eley29y43ldft" class="animable"></line>
                                            <polygon
                                                points="212.2 235.81 207.9 250.72 258.1 256.75 262.97 241.83 212.2 235.81"
                                                style="fill: #407BFF; transform-origin: 235.435px 246.28px;"
                                                id="el8watyl913ms" class="animable"></polygon>
                                            <path d="M214,238.75l1.09.11-2,7-1.09-.12Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 213.545px 242.305px;"
                                                id="el3xtmypl4q1f" class="animable"></path>
                                            <path
                                                d="M216.34,241l-1.43,5-1-.1,2-7,1.36.14-.06,4.28,1.18-4.16,1,.1-2,6.95-1.12-.11Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 216.65px 242.555px;"
                                                id="elns4nqivhbv" class="animable"></path>
                                            <path d="M220.18,245.22l2.45-5.59,1,.11-3,6.84-1.63-.17.91-7.06,1.1.11Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 221.315px 242.965px;"
                                                id="eluk2hvxvcn2l" class="animable"></path>
                                            <path
                                                d="M223.56,241.45a1.94,1.94,0,0,1,2.16-1.58c1.07.11,1.47.81,1.15,1.92l-1,3.61a1.92,1.92,0,0,1-2.15,1.58c-1.07-.11-1.48-.8-1.16-1.92Zm0,3.8c-.14.49,0,.7.37.74s.62-.13.76-.63l1.07-3.75c.14-.5,0-.71-.37-.75s-.62.13-.76.63Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 224.716px 243.426px;"
                                                id="elsridze218tm" class="animable"></path>
                                            <path d="M228.05,240.19l1.09.11-2,7-1.09-.11Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 227.595px 243.745px;"
                                                id="elk3nyq27vf1" class="animable"></path>
                                            <path
                                                d="M231.86,245.07l-.27.93a1.89,1.89,0,0,1-2.12,1.58c-1.07-.11-1.44-.81-1.13-1.92l1-3.61a1.91,1.91,0,0,1,2.13-1.59c1.07.11,1.44.81,1.13,1.92l-.2.68-1-.11.21-.75c.15-.49,0-.7-.37-.74s-.61.13-.76.63l-1.07,3.75c-.14.5,0,.7.38.74s.61-.12.75-.62l.29-1Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 230.47px 244.021px;"
                                                id="elm1zpdh4y0fc" class="animable"></path>
                                            <path
                                                d="M234,243.82l1.5.16-.29,1-1.49-.15-.58,2,1.88.2-.28,1-3-.31,2-6.95,3,.31-.28,1-1.89-.2Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 234.24px 244.4px;"
                                                id="elmkphp4qew2g" class="animable"></path>
                                            <path d="M257,246.28a3.76,3.76,0,1,1-3.73-3.3A3.53,3.53,0,0,1,257,246.28Z"
                                                style="fill: rgb(255, 255, 255); transform-origin: 253.268px 246.737px;"
                                                id="elp88rx177m5" class="animable"></path>
                                            <path
                                                d="M221.43,342.58s8.94-21.16,9.83-29.51,1.49-16.1,3.58-18.48,6.86-13.71,7.75-17,3-6.56,5.36-4.18,1.5,8.05.6,10.14-2.09,5.37-2.09,5.37l6.26-6.86,3.88-9.24s3.28,0,3.87,3,4.18,7.45,3.28,10.13a7.16,7.16,0,0,1-3.57,3.88s1.49,7.45,1.19,10.13A15.18,15.18,0,0,1,256,308.9c-3,2.38-11.32,10.13-11.32,10.13s4.17,31.6,0,47.1-11.63,20.27-17,21.17-15.79-11-15.79-11S222.92,370.6,221.43,342.58Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 237.892px 329.972px;"
                                                id="elxyb7nx3mati" class="animable"></path>
                                            <line x1="260.18" y1="289.82" x2="255.41" y2="294.59"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 257.795px 292.205px;"
                                                id="elhr27kx98gyt" class="animable"></line>
                                            <line x1="252.72" y1="282.07" x2="257.49" y2="278.19"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 255.105px 280.13px;"
                                                id="elfkh51gcs535" class="animable"></line>
                                            <path
                                                d="M116,224.33s8.33-2,21,3.34a58.13,58.13,0,0,1,23.67,17.66,51.9,51.9,0,0,1,6.66,12S119,238.67,113.67,238.67h-12S108,225,116,224.33Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 134.5px 240.647px;"
                                                id="elj8q1hq7jao" class="animable"></path>
                                            <path d="M282,443.33c-38.67-34-99-34-99-34l-9-8.66H66.92v43.15"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 174.46px 422.245px;"
                                                id="elly1qqcgapll" class="animable"></path>
                                            <path d="M180.67,411.33s-5,21.67-14.67,31"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 173.335px 426.83px;"
                                                id="elldrp3qhu7kq" class="animable"></path>
                                            <path d="M177.67,409.67a49,49,0,0,1-17.67,21"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 168.835px 420.17px;"
                                                id="ell9r8n5q4l8s" class="animable"></path>
                                            <path
                                                d="M103,234.67s7.33-1.67,21.67,1.33,35.33,15.33,44.66,19.33,16.67,4.34,18.34,10.34,20,62.66,28,69c11.79,9.34,23,25.74,10,39.33-7.67,8-18,8.67-22.67,7s-16-13.33-16-17v-4.67L165,334s4.67,39.67,6.67,45S179,392,179,395.33s-7.67,10-16.67,15.67-18,10.67-38.66,11.67S78.33,420.33,73,413.33s-12-15.33-12.67-27-3-57.66-3-57.66,1.34-37.34,2.34-49.67,3.66-20.33,10-23S98.67,234.67,103,234.67Z"
                                                style="fill: #407BFF; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 144.409px 328.525px;"
                                                id="elikupyjgu3w" class="animable"></path>
                                            <path d="M113.35,311.54a41.23,41.23,0,0,0,3,4.13"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 114.85px 313.605px;"
                                                id="el9ziz8yxj9u" class="animable"></path>
                                            <path d="M98.33,265s3.58,25,12.54,42.23"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 104.6px 286.115px;"
                                                id="el1jvyg5t4f3h" class="animable"></path>
                                            <path d="M100.67,296.33s7.33,23.67,18.66,36"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 110px 314.33px;"
                                                id="elxfw3ae3dnpj" class="animable"></path>
                                            <line x1="148.33" y1="314" x2="165" y2="334"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 156.665px 324px;"
                                                id="el97djwvs9j5" class="animable"></line>
                                            <line x1="143.33" y1="308" x2="145.93" y2="311.11"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 144.63px 309.555px;"
                                                id="el03q6dropv3tu" class="animable"></line>
                                            <line x1="144" y1="317" x2="159.67" y2="328.33"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 151.835px 322.665px;"
                                                id="el8qrh7519n6s" class="animable"></line>
                                            <path d="M166.33,273S150.67,288,151,305.33"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 158.662px 289.165px;"
                                                id="elf1k9vtyigcq" class="animable"></path>
                                            <path
                                                d="M215.67,334.67s5.66,11-2.67,19-26,5.66-26,5.66V364c0,3.67,11.33,15.33,16,17s15,1,22.67-7C238.69,360.41,227.46,344,215.67,334.67Z"
                                                style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 209.248px 358.207px;"
                                                id="elx7gzssqq26l" class="animable"></path>
                                            <line x1="171.67" y1="379" x2="153.67" y2="362"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 162.67px 370.5px;"
                                                id="elwr86e93nlcm" class="animable"></line>
                                            <line x1="143.67" y1="352.33" x2="161.33" y2="365"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 152.5px 358.665px;"
                                                id="elly867ssuz2a" class="animable"></line>
                                            <path d="M118.34,370.17a33.33,33.33,0,0,0,4,2.5"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 120.34px 371.42px;"
                                                id="el8is1a7u0uo6" class="animable"></path>
                                            <path d="M79.67,341s20.06,15.66,32.82,25"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 96.08px 353.5px;"
                                                id="ely14z30id5c9" class="animable"></path>
                                            <path d="M83.67,351s14.66,10.67,17,12"
                                                style="fill: none; stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 92.17px 357px;"
                                                id="el9x66e6v03sm" class="animable"></path>
                                            <path
                                                d="M66.75,358.5h79a9.25,9.25,0,0,1,9.25,9.25v67.5a6.75,6.75,0,0,1-6.75,6.75h-84a6.75,6.75,0,0,1-6.75-6.75v-67.5A9.25,9.25,0,0,1,66.75,358.5Z"
                                                style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 106.25px 400.25px;"
                                                id="el76qpx04h6aq" class="animable"></path>
                                            <path
                                                d="M58.75,358.5h79a9.25,9.25,0,0,1,9.25,9.25v67.5a6.75,6.75,0,0,1-6.75,6.75h-84a6.75,6.75,0,0,1-6.75-6.75v-67.5A9.25,9.25,0,0,1,58.75,358.5Z"
                                                style="fill: rgb(99, 99, 99); stroke: rgb(38, 50, 56); stroke-miterlimit: 10; transform-origin: 98.25px 400.25px;"
                                                id="elyzgvpmmltr" class="animable"></path>
                                            <path d="M68,447.81V383a3,3,0,0,0-6,0v64.81Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 65px 413.905px;"
                                                id="elph12jpo7xa" class="animable"></path>
                                            <path d="M122.5,447.81V383a3,3,0,0,0-6,0v64.81Z"
                                                style="fill: rgb(38, 50, 56); transform-origin: 119.5px 413.905px;"
                                                id="elf9sk9w4ued9" class="animable"></path>
                                        </g>
                                        <defs>
                                            <filter id="active" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <filter id="hover" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                                <feColorMatrix type="matrix"
                                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                                </feColorMatrix>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                            </a>
                        </span>
                        <span class="col-lg-6 row d-flex justify-content-center ">
                            <a href="{{ url('/home') }}"
                                class=" col-12  bg-danger p-2 p-lg-4 p-lg-5 rounded-5 border hover-card">
                                <h1 class="text-white text-center">Gestion des Stocks</h1>
                                <span class="d-flex justify-content-center ">
                                    <svg class="animated" height='281' id="freepik_stories-checking-boxes"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
                                        <style>
                                            svg#freepik_stories-checking-boxes:not(.animated) .animable {
                                                opacity: 0;
                                            }

                                            svg#freepik_stories-checking-boxes.animated #freepik--Cart--inject-13 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-checking-boxes.animated #freepik--Boxes--inject-13 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-checking-boxes.animated #freepik--Character--inject-13 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            svg#freepik_stories-checking-boxes.animated #freepik--speech-bubble--inject-13 {
                                                animation: 1s 1 forwards cubic-bezier(.36, -0.01, .5, 1.38) fadeIn;
                                                animation-delay: 0s;
                                            }

                                            @keyframes fadeIn {
                                                0% {
                                                    opacity: 0;
                                                }

                                                100% {
                                                    opacity: 1;
                                                }
                                            }

                                            .animator-hidden {
                                                display: none;
                                            }
                                        </style>
                                        <g id="freepik--Floor--inject-13" class="animable animator-hidden"
                                            style="transform-origin: 250px 367.69px;">
                                            <ellipse id="freepik--floor--inject-13" cx="250" cy="367.69"
                                                rx="244.94" ry="123.89"
                                                style="fill: rgb(245, 245, 245); transform-origin: 250px 367.69px;"
                                                class="animable"></ellipse>
                                        </g>
                                        <g id="freepik--Shadows--inject-13" class="animable animator-hidden"
                                            style="transform-origin: 252.826px 373.52px;">
                                            <ellipse id="freepik--Shadow--inject-13" cx="110.48" cy="400.09"
                                                rx="71.75" ry="41.43"
                                                style="fill: rgb(224, 224, 224); transform-origin: 110.48px 400.09px;"
                                                class="animable"></ellipse>
                                            <path id="freepik--shadow--inject-13"
                                                d="M465.43,355,347.6,287.17a7.94,7.94,0,0,0-7.2,0L166,387.89c-2,1.14-2,3,0,4.15l117.83,67.83a7.94,7.94,0,0,0,7.2,0L465.43,359.15C467.42,358,467.42,356.14,465.43,355Z"
                                                style="fill: rgb(224, 224, 224); transform-origin: 315.711px 373.52px;"
                                                class="animable"></path>
                                        </g>
                                        <g id="freepik--Cart--inject-13" class="animable"
                                            style="transform-origin: 308.21px 269.801px;">
                                            <g id="freepik--cargo-car--inject-13" class="animable"
                                                style="transform-origin: 308.21px 269.801px;">
                                                <path
                                                    d="M357.14,114.07l70,40.44c5,2.87,9,9.91,9,15.65v138.2l5.94,3.44V169.62c0-8.1-5.74-18-12.75-22.09l-72.52-41.89c-7-4-12.75-.73-12.75,7.37V255.18l6,3.46V118.13C350.1,113.66,353.27,111.83,357.14,114.07Z"
                                                    style="fill: rgb(224, 224, 224); transform-origin: 393.07px 207.867px;"
                                                    id="el1vl50bown96" class="animable"></path>
                                                <path
                                                    d="M303.13,422.9c0-7.28,5.12-16.14,11.43-19.78,3.31-1.92,6.28-2,8.37-.6h0l7.7,4.4-16.38,27.85-7.64-4.4v0C304.48,429.19,303.13,426.62,303.13,422.9Z"
                                                    style="fill: rgb(69, 90, 100); transform-origin: 316.88px 418.166px;"
                                                    id="elwi3hshkqew9" class="animable"></path>
                                                <path
                                                    d="M322.56,407.73c-6.31,3.64-11.43,12.5-11.43,19.78s5.12,10.24,11.43,6.6S334,421.61,334,414.32,328.87,404.08,322.56,407.73Z"
                                                    style="fill: rgb(55, 71, 79); transform-origin: 322.565px 420.916px;"
                                                    id="el6pgiaukk23i" class="animable"></path>
                                                <path
                                                    d="M326.43,418.68c0-2.84-1.74-4.15-3.87-2.92s-3.87,4.54-3.87,7.39,1.73,4.16,3.87,2.92S326.43,421.53,326.43,418.68Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 322.56px 420.918px;"
                                                    id="el9of1svktoze" class="animable"></path>
                                                <path
                                                    d="M309.17,395.57s0,13,6.22,17.65c1.17.87,2.41,1.47,3.14,2.08,1.59,1.32.54,3.74-1.39,4.78-2.8,1.5-18.05-2.56-24.51-15Z"
                                                    style="fill: rgb(240, 240, 240); transform-origin: 305.968px 407.973px;"
                                                    id="elty1ncyc1y3r" class="animable"></path>
                                                <path
                                                    d="M315.09,399s0,13,6.22,17.65c1.17.87,2.41,1.47,3.15,2.08,1.58,1.32.53,3.75-1.4,4.78-2.8,1.5-18.05-2.56-24.51-15Z"
                                                    style="fill: rgb(250, 250, 250); transform-origin: 311.889px 411.403px;"
                                                    id="elq4y4ud5gioq" class="animable"></path>
                                                <path
                                                    d="M322.56,419.65a2.42,2.42,0,0,0-1.1,1.9c0,.7.49,1,1.1.63a2.43,2.43,0,0,0,1.09-1.9C323.65,419.59,323.16,419.3,322.56,419.65Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 322.555px 420.92px;"
                                                    id="elb2awmzhe6n" class="animable"></path>
                                                <path
                                                    d="M427.17,351.29c0-7.29,5.12-16.15,11.43-19.79,3.31-1.91,6.28-2,8.37-.59h0l7.7,4.4-16.38,27.84-7.64-4.39v0C428.52,357.58,427.17,355,427.17,351.29Z"
                                                    style="fill: rgb(69, 90, 100); transform-origin: 440.92px 346.548px;"
                                                    id="elnw1v1ajqk0k" class="animable"></path>
                                                <path
                                                    d="M446.6,336.11c-6.31,3.64-11.43,12.5-11.43,19.79s5.12,10.24,11.43,6.6S458,350,458,342.71,452.91,332.47,446.6,336.11Z"
                                                    style="fill: rgb(55, 71, 79); transform-origin: 446.585px 349.305px;"
                                                    id="elypg1karxi6" class="animable"></path>
                                                <path
                                                    d="M450.47,347.07c0-2.85-1.74-4.16-3.87-2.92s-3.87,4.54-3.87,7.39,1.73,4.15,3.87,2.92S450.47,349.92,450.47,347.07Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 446.6px 349.303px;"
                                                    id="elxyeo5wk1p6s" class="animable"></path>
                                                <path
                                                    d="M433.21,324s0,13,6.22,17.65c1.17.87,2.41,1.47,3.14,2.08,1.59,1.32.54,3.75-1.39,4.78-2.8,1.5-18.05-2.56-24.51-15Z"
                                                    style="fill: rgb(240, 240, 240); transform-origin: 430.008px 336.403px;"
                                                    id="elaj72jj779f" class="animable"></path>
                                                <path
                                                    d="M439.13,327.35s0,13,6.22,17.65c1.17.87,2.41,1.47,3.15,2.09,1.58,1.31.53,3.74-1.4,4.77-2.8,1.5-18.05-2.56-24.51-15Z"
                                                    style="fill: rgb(250, 250, 250); transform-origin: 435.929px 339.753px;"
                                                    id="elmttdowy4e5" class="animable"></path>
                                                <path
                                                    d="M446.6,348a2.42,2.42,0,0,0-1.1,1.9c0,.69.49,1,1.1.63a2.43,2.43,0,0,0,1.09-1.9C447.69,348,447.2,347.69,446.6,348Z"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 446.595px 349.283px;"
                                                    id="elslxtbhzyz2" class="animable"></path>
                                                <polygon
                                                    points="448.13 315.25 338.13 251.73 158.42 355.48 268.41 419.01 448.13 315.25"
                                                    style="fill: rgb(69, 90, 100); transform-origin: 303.275px 335.37px;"
                                                    id="el51fn2e4uzs6" class="animable"></polygon>
                                                <polygon
                                                    points="448.13 315.25 448.13 322.16 268.41 425.92 268.41 419.01 448.13 315.25"
                                                    style="fill: rgb(55, 71, 79); transform-origin: 358.27px 370.585px;"
                                                    id="elszf8mqrt38" class="animable"></polygon>
                                                <polygon
                                                    points="158.42 355.48 158.42 362.39 268.41 425.92 268.41 419.01 158.42 355.48"
                                                    style="fill: rgb(38, 50, 56); transform-origin: 213.415px 390.7px;"
                                                    id="elqu7llpnq8h" class="animable"></polygon>
                                            </g>
                                        </g>
                                        <g id="freepik--Boxes--inject-13" class="animable"
                                            style="transform-origin: 299.425px 262.625px;">
                                            <g id="freepik--Box--inject-13" class="animable"
                                                style="transform-origin: 336.86px 285.415px;">
                                                <g id="freepik--shadow--inject-13">
                                                    <polygon
                                                        points="432.14 315.55 337.8 370.04 241.58 314.56 336.18 260.21 432.14 315.55"
                                                        style="opacity: 0.1; transform-origin: 336.86px 315.125px;"
                                                        class="animable" id="ellusx01oqboh"></polygon>
                                                </g>
                                                <g id="freepik--box--inject-13" class="animable"
                                                    style="transform-origin: 340.075px 282.395px;">
                                                    <polygon
                                                        points="428.93 250.76 342.53 200.79 251.22 253.64 337.62 303.61 428.93 250.76"
                                                        style="fill: #C53F3F; transform-origin: 340.075px 252.2px;"
                                                        id="elt3yq6tl9jk" class="animable"></polygon>
                                                    <g id="elbjbvbs3ji9">
                                                        <polygon
                                                            points="428.93 250.76 342.53 200.79 251.22 253.64 337.62 303.61 428.93 250.76"
                                                            style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 340.075px 252.2px;"
                                                            class="animable" id="elt3o4ooufcg"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="337.62 364 428.93 311.16 428.93 250.76 337.62 303.61 337.62 364"
                                                        style="fill: #C53F3F; transform-origin: 383.275px 307.38px;"
                                                        id="eli2sxx6i1a9" class="animable"></polygon>
                                                    <g id="elh3t6hbzwvy">
                                                        <polygon
                                                            points="337.62 364 428.93 311.16 428.93 250.76 337.62 303.61 337.62 364"
                                                            style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 383.275px 307.38px;"
                                                            class="animable" id="el64g5c1ejl3s"></polygon>
                                                    </g>
                                                    <path
                                                        d="M347.7,344a1.56,1.56,0,0,1-.79-.21,2.39,2.39,0,0,1-1-2.17v-6.4h0v-.47l.33.06,5-2.95V339a5.77,5.77,0,0,1-2.47,4.67A2.18,2.18,0,0,1,347.7,344Zm-1-8.3v5.92a1.67,1.67,0,0,0,.57,1.48,1.16,1.16,0,0,0,1.09-.12,5.08,5.08,0,0,0,2.07-4v-.52h-1.86l-.36-2.51Zm2.57,2h1.16v-4.42l-3,1.76,1.48.27Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 348.57px 337.93px;"
                                                        id="elxkyadmxhzd" class="animable"></path>
                                                    <path
                                                        d="M348.6,349.07a.4.4,0,0,1-.4-.4v-5.38a.4.4,0,1,1,.8,0v5.38A.4.4,0,0,1,348.6,349.07Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 348.6px 345.98px;"
                                                        id="elsxen4hq03aa" class="animable"></path>
                                                    <path
                                                        d="M346.27,350.42a.39.39,0,0,1-.35-.2.4.4,0,0,1,.14-.55l4.68-2.7a.4.4,0,0,1,.55.15.41.41,0,0,1-.15.55l-4.67,2.7A.53.53,0,0,1,346.27,350.42Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 348.602px 348.668px;"
                                                        id="elz8tqul2dhpk" class="animable"></path>
                                                    <path
                                                        d="M362.92,341.16a1,1,0,0,1-.45-.11,1.08,1.08,0,0,1-.48-1V339a.41.41,0,0,1,.81,0v1.1c0,.17,0,.25.08.27s.12,0,.26-.07a2.39,2.39,0,0,0,.75-1.82v-7.15a.4.4,0,0,1,.8,0v7.15a3.06,3.06,0,0,1-1.14,2.51A1.23,1.23,0,0,1,362.92,341.16Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 363.339px 336.047px;"
                                                        id="elbah61f9mqh6" class="animable"></path>
                                                    <path
                                                        d="M358.68,334.91v-.7a11.38,11.38,0,0,1,5.14-8.91,3.4,3.4,0,0,1,5.55,3.2v.23Zm7.55-9.54a4.06,4.06,0,0,0-2,.63,10.63,10.63,0,0,0-4.7,7.5l9-5.23a3,3,0,0,0-1.24-2.62A2.11,2.11,0,0,0,366.23,325.37Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 364.053px 329.699px;"
                                                        id="elprj5tnd9h8e" class="animable"></path>
                                                    <path
                                                        d="M377.36,332.92a.4.4,0,0,1-.4-.4V318.83a.41.41,0,0,1,.81,0v13.69A.4.4,0,0,1,377.36,332.92Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 377.365px 325.702px;"
                                                        id="elhc7hce94ldo" class="animable"></path>
                                                    <path
                                                        d="M376.19,322a.41.41,0,0,1-.16,0,.4.4,0,0,1-.21-.53l1.43-3.31,1.6,1.85a.4.4,0,0,1-.61.52l-.76-.87-.92,2.13A.41.41,0,0,1,376.19,322Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 377.365px 320.084px;"
                                                        id="elfpfvg5xypcg" class="animable"></path>
                                                    <path
                                                        d="M381.09,330.8a.4.4,0,0,1-.41-.4V316.71a.41.41,0,1,1,.81,0V330.4A.4.4,0,0,1,381.09,330.8Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 381.085px 323.518px;"
                                                        id="elszzoswc812n" class="animable"></path>
                                                    <path
                                                        d="M379.91,319.83a.41.41,0,0,1-.16,0,.4.4,0,0,1-.21-.53L381,316l1.6,1.84a.4.4,0,1,1-.61.53l-.76-.88-.92,2.14A.41.41,0,0,1,379.91,319.83Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 381.103px 317.919px;"
                                                        id="elvcgv0hv0nff" class="animable"></path>
                                                    <polygon
                                                        points="337.62 364 251.22 314.04 251.22 253.64 337.62 303.61 337.62 364"
                                                        style="fill: #C53F3F; transform-origin: 294.42px 308.82px;"
                                                        id="elrdpr0g2fj0i" class="animable"></polygon>
                                                    <g id="els9u3yt8t57e">
                                                        <polygon
                                                            points="337.62 364 251.22 314.04 251.22 253.64 337.62 303.61 337.62 364"
                                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 294.42px 308.82px;"
                                                            class="animable" id="elzgj527tj3fp"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="287.49 283.76 293.41 287.17 293.41 277.99 287.49 274.58 287.49 283.76"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 290.45px 280.875px;"
                                                        id="elb0yyinwjjho" class="animable"></polygon>
                                                    <polygon
                                                        points="293.41 278 384.72 225.15 378.8 221.73 287.49 274.58 293.41 278"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 336.105px 249.865px;"
                                                        id="elywt0eozarzl" class="animable"></polygon>
                                                    <polygon
                                                        points="290.17 273.02 296.08 276.44 299.38 274.54 293.47 271.12 290.17 273.02"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 294.775px 273.78px;"
                                                        id="eluk31pmrjwe" class="animable"></polygon>
                                                    <path
                                                        d="M385,232.85l-24.19,13.93c-.44.26-.32.73.26,1.07l27.31,15.77a2.12,2.12,0,0,0,1.85.15l24.19-13.94c.44-.25.32-.73-.26-1.07L386.8,233A2.09,2.09,0,0,0,385,232.85Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 387.615px 248.314px;"
                                                        id="el6mau54kiq5r" class="animable"></path>
                                                    <path
                                                        d="M397.17,256.56a.5.5,0,0,0,.43-.25.5.5,0,0,0-.18-.68l-22.68-13.09a.5.5,0,0,0-.5.86l22.68,13.09A.43.43,0,0,0,397.17,256.56Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 385.85px 249.528px;"
                                                        id="elez2fhpzk74l" class="animable"></path>
                                                    <path
                                                        d="M394.65,258a.5.5,0,0,0,.25-.93L372.23,244a.51.51,0,0,0-.69.18.52.52,0,0,0,.19.69l22.67,13.08A.45.45,0,0,0,394.65,258Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 383.312px 250.967px;"
                                                        id="eluwgv1trnwu" class="animable"></path>
                                                    <path
                                                        d="M392.13,259.44a.5.5,0,0,0,.25-.93l-22.67-13.09a.5.5,0,0,0-.5.87l22.67,13.09A.57.57,0,0,0,392.13,259.44Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 380.792px 252.397px;"
                                                        id="elthy2r36igc" class="animable"></path>
                                                    <path
                                                        d="M389.61,260.89a.51.51,0,0,0,.44-.25.52.52,0,0,0-.19-.69l-22.67-13.08a.5.5,0,1,0-.5.86l22.67,13.09A.47.47,0,0,0,389.61,260.89Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 378.254px 253.832px;"
                                                        id="el4ow03q5jtc7" class="animable"></path>
                                                    <polygon
                                                        points="412.09 249.2 411.2 248.69 400.88 254.65 401.76 255.16 412.09 249.2"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 406.485px 251.925px;"
                                                        id="el9cwhecujn56" class="animable"></polygon>
                                                    <polygon
                                                        points="408.5 247.13 406.97 246.25 396.64 252.22 398.17 253.09 408.5 247.13"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 402.57px 249.67px;"
                                                        id="elrhrqi12a28" class="animable"></polygon>
                                                    <polygon
                                                        points="404.91 245.05 404.03 244.54 393.7 250.51 394.58 251.01 404.91 245.05"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 399.305px 247.775px;"
                                                        id="elebkyf42dvov" class="animable"></polygon>
                                                    <polygon
                                                        points="402.22 243.48 400.44 242.47 390.11 248.43 391.89 249.44 402.22 243.48"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 396.165px 245.955px;"
                                                        id="eljizd85aa8y8" class="animable"></polygon>
                                                    <polygon
                                                        points="397.73 240.91 396.85 240.4 386.52 246.36 387.4 246.87 397.73 240.91"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 392.125px 243.635px;"
                                                        id="el0ahyrpsapqx" class="animable"></polygon>
                                                    <polygon
                                                        points="395.17 239.4 393.26 238.32 382.93 244.29 384.84 245.37 395.17 239.4"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 389.05px 241.845px;"
                                                        id="ellcxle8z544f" class="animable"></polygon>
                                                    <polygon
                                                        points="390.56 236.76 389.67 236.25 379.35 242.22 380.23 242.72 390.56 236.76"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 384.955px 239.485px;"
                                                        id="el6z9o7qks5rq" class="animable"></polygon>
                                                    <polygon
                                                        points="388.52 235.57 388.08 235.32 377.75 241.28 378.19 241.54 388.52 235.57"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 383.135px 238.43px;"
                                                        id="elflnly0sdugu" class="animable"></polygon>
                                                    <polygon
                                                        points="392.14 237.74 391.7 237.48 381.37 243.44 381.81 243.7 392.14 237.74"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 386.755px 240.59px;"
                                                        id="elogiya32zlff" class="animable"></polygon>
                                                    <polygon
                                                        points="399.41 241.89 398.97 241.63 388.64 247.6 389.08 247.85 399.41 241.89"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 394.025px 244.74px;"
                                                        id="ele2o3jkfyf3" class="animable"></polygon>
                                                    <polygon
                                                        points="403.36 244.18 402.92 243.92 392.59 249.89 393.03 250.14 403.36 244.18"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 397.975px 247.03px;"
                                                        id="elb5846ridvyq" class="animable"></polygon>
                                                    <polygon
                                                        points="406.16 245.85 405.72 245.59 395.39 251.56 395.83 251.81 406.16 245.85"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 400.775px 248.7px;"
                                                        id="elhuwblx7qsc" class="animable"></polygon>
                                                    <polygon
                                                        points="410.09 248.03 409.65 247.78 399.32 253.74 399.76 253.99 410.09 248.03"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 404.705px 250.885px;"
                                                        id="elm8lsszd0bco" class="animable"></polygon>
                                                    <polygon
                                                        points="386.97 234.69 386.08 234.18 375.76 240.14 376.64 240.65 386.97 234.69"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 381.365px 237.415px;"
                                                        id="elgexfoyikup" class="animable"></polygon>
                                                    <path
                                                        d="M400.88,305.15V320.3c0,.58.41.82.92.53l23.65-13.66a2,2,0,0,0,.91-1.58V290.43c0-.58-.41-.82-.91-.53l-23.65,13.67A2,2,0,0,0,400.88,305.15Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 413.62px 305.365px;"
                                                        id="elxi7kcsmtgnp" class="animable"></path>
                                                    <polygon
                                                        points="424.89 292.07 424.13 292.51 424.13 306.28 424.89 305.84 424.89 292.07"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 424.51px 299.175px;"
                                                        id="elykmozxyhmvi" class="animable"></polygon>
                                                    <polygon
                                                        points="421.78 293.87 420.46 294.64 420.46 308.41 421.78 307.64 421.78 293.87"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 421.12px 301.14px;"
                                                        id="el0fstprahq8q9" class="animable"></polygon>
                                                    <polygon
                                                        points="418.67 295.66 417.91 296.1 417.91 309.87 418.67 309.43 418.67 295.66"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 418.29px 302.765px;"
                                                        id="elejvyhu2u7ya" class="animable"></polygon>
                                                    <polygon
                                                        points="416.33 296.99 414.8 297.89 414.8 311.67 416.33 310.76 416.33 296.99"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 415.565px 304.33px;"
                                                        id="elfk0tt5w8ntd" class="animable"></polygon>
                                                    <polygon
                                                        points="412.45 299.25 411.69 299.69 411.69 313.46 412.45 313.02 412.45 299.25"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 412.07px 306.355px;"
                                                        id="elt2lz0khiky" class="animable"></polygon>
                                                    <polygon
                                                        points="410.22 300.51 408.58 301.48 408.58 315.25 410.22 314.28 410.22 300.51"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 409.4px 307.88px;"
                                                        id="elvfwn8n6rci" class="animable"></polygon>
                                                    <polygon
                                                        points="406.24 302.83 405.48 303.28 405.48 317.05 406.24 316.61 406.24 302.83"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 405.86px 309.94px;"
                                                        id="elgtn6ytwu67f" class="animable"></polygon>
                                                    <polygon
                                                        points="404.46 303.84 404.08 304.06 404.08 317.83 404.46 317.62 404.46 303.84"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 404.27px 310.835px;"
                                                        id="elnbomsucij8" class="animable"></polygon>
                                                    <polygon
                                                        points="407.66 302.08 407.27 302.31 407.27 316.08 407.66 315.86 407.66 302.08"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 407.465px 309.08px;"
                                                        id="elj6fcvx0izoh" class="animable"></polygon>
                                                    <polygon
                                                        points="413.92 298.42 413.54 298.64 413.54 312.41 413.92 312.19 413.92 298.42"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 413.73px 305.415px;"
                                                        id="el3pqyjqeyyno" class="animable"></polygon>
                                                    <polygon
                                                        points="417.35 296.45 416.96 296.67 416.96 310.44 417.35 310.22 417.35 296.45"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 417.155px 303.445px;"
                                                        id="elq55pcolnbpi" class="animable"></polygon>
                                                    <polygon
                                                        points="419.81 295.09 419.43 295.31 419.43 309.08 419.81 308.86 419.81 295.09"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 419.62px 302.085px;"
                                                        id="elvxnb4f5lg" class="animable"></polygon>
                                                    <polygon
                                                        points="423.15 293.06 422.77 293.28 422.77 307.05 423.15 306.83 423.15 293.06"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 422.96px 300.055px;"
                                                        id="elw17m85yqwce" class="animable"></polygon>
                                                    <polygon
                                                        points="403.13 304.63 402.37 305.07 402.37 318.84 403.13 318.4 403.13 304.63"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 402.75px 311.735px;"
                                                        id="elexv2w651cf" class="animable"></polygon>
                                                </g>
                                            </g>
                                            <g id="freepik--box--inject-13" class="animable"
                                                style="transform-origin: 335.655px 216.22px;">
                                                <g id="freepik--shadow--inject-13">
                                                    <polygon
                                                        points="423.06 249.48 339.23 297.93 250.56 246.63 334.38 198.18 423.06 249.48"
                                                        style="opacity: 0.1; transform-origin: 336.81px 248.055px;"
                                                        class="animable" id="el4d0r70nh9p3"></polygon>
                                                </g>
                                                <g id="freepik--box--inject-13" class="animable"
                                                    style="transform-origin: 333.955px 214.29px;">
                                                    <polygon
                                                        points="248.25 181.02 328.67 134.51 419.66 187.16 339.25 233.67 248.25 181.02"
                                                        style="fill: #C53F3F; transform-origin: 333.955px 184.09px;"
                                                        id="elxuj2nk3k6go" class="animable"></polygon>
                                                    <g id="el4gejrrm626c">
                                                        <polygon
                                                            points="248.25 181.02 328.67 134.51 419.66 187.16 339.25 233.67 248.25 181.02"
                                                            style="fill: rgb(255, 255, 255); opacity: 0.3; transform-origin: 333.955px 184.09px;"
                                                            class="animable" id="elv0dchas4e3f"></polygon>
                                                    </g>
                                                    <path
                                                        d="M286.79,164.55,311,178.48c.44.25.32.73-.26,1.07l-27.31,15.76a2.09,2.09,0,0,1-1.85.16l-24.19-13.94c-.44-.26-.32-.73.26-1.07L285,164.7A2,2,0,0,1,286.79,164.55Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 284.195px 180.01px;"
                                                        id="elrvx8amhze5e" class="animable"></path>
                                                    <path
                                                        d="M274.58,188.26a.52.52,0,0,1-.44-.25.5.5,0,0,1,.19-.68L297,174.24a.5.5,0,1,1,.5.86l-22.67,13.09A.47.47,0,0,1,274.58,188.26Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 285.935px 181.202px;"
                                                        id="elkn98apv1m2" class="animable"></path>
                                                    <path
                                                        d="M277.09,189.7a.5.5,0,0,1-.43-.25.5.5,0,0,1,.18-.68l22.68-13.09a.5.5,0,1,1,.5.86l-22.68,13.09A.43.43,0,0,1,277.09,189.7Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 288.454px 182.642px;"
                                                        id="eluqf6zzf2qmr" class="animable"></path>
                                                    <path
                                                        d="M279.61,191.14a.5.5,0,0,1-.25-.93L302,177.12a.49.49,0,0,1,.68.18.51.51,0,0,1-.18.69l-22.67,13.09A.54.54,0,0,1,279.61,191.14Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 290.931px 184.095px;"
                                                        id="eljdreadn67ck" class="animable"></path>
                                                    <path
                                                        d="M282.13,192.58a.48.48,0,0,1-.43-.25.5.5,0,0,1,.18-.68l22.67-13.09a.5.5,0,0,1,.5.87l-22.67,13.09A.57.57,0,0,1,282.13,192.58Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 293.468px 185.537px;"
                                                        id="elsni0w5evzui" class="animable"></path>
                                                    <polygon
                                                        points="259.66 180.9 260.54 180.39 270.87 186.35 269.98 186.86 259.66 180.9"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 265.265px 183.625px;"
                                                        id="elzn8lhv0sma" class="animable"></polygon>
                                                    <polygon
                                                        points="263.25 178.82 264.77 177.95 275.1 183.91 273.57 184.79 263.25 178.82"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 269.175px 181.37px;"
                                                        id="elf903ri8cz9f" class="animable"></polygon>
                                                    <polygon
                                                        points="266.83 176.75 267.72 176.24 278.04 182.2 277.16 182.71 266.83 176.75"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.435px 179.475px;"
                                                        id="elzljiju2tjb" class="animable"></polygon>
                                                    <polygon
                                                        points="269.52 175.18 271.3 174.17 281.63 180.13 279.85 181.14 269.52 175.18"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 275.575px 177.655px;"
                                                        id="eloi3att3gmpm" class="animable"></polygon>
                                                    <polygon
                                                        points="274.01 172.6 274.89 172.1 285.22 178.06 284.34 178.57 274.01 172.6"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 279.615px 175.335px;"
                                                        id="el0plsame75z2" class="animable"></polygon>
                                                    <polygon
                                                        points="276.57 171.1 278.48 170.02 288.81 175.99 286.9 177.06 276.57 171.1"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 282.69px 173.54px;"
                                                        id="el38lbrufnvkb" class="animable"></polygon>
                                                    <polygon
                                                        points="281.19 168.46 282.07 167.95 292.4 173.91 291.51 174.42 281.19 168.46"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 286.795px 171.185px;"
                                                        id="el952u36wgzb" class="animable"></polygon>
                                                    <polygon
                                                        points="283.23 167.27 283.67 167.02 293.99 172.98 293.55 173.23 283.23 167.27"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 288.61px 170.125px;"
                                                        id="elk70hnzr78bf" class="animable"></polygon>
                                                    <polygon
                                                        points="279.6 169.43 280.04 169.18 290.37 175.14 289.93 175.4 279.6 169.43"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 284.985px 172.29px;"
                                                        id="elro6zruiiwls" class="animable"></polygon>
                                                    <polygon
                                                        points="272.33 173.59 272.77 173.33 283.1 179.29 282.66 179.55 272.33 173.59"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 277.715px 176.44px;"
                                                        id="elipfe4npp7wi" class="animable"></polygon>
                                                    <polygon
                                                        points="268.38 175.88 268.82 175.62 279.15 181.59 278.71 181.84 268.38 175.88"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 273.765px 178.73px;"
                                                        id="el3i15hsitdn" class="animable"></polygon>
                                                    <polygon
                                                        points="265.58 177.55 266.03 177.29 276.35 183.25 275.91 183.51 265.58 177.55"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 270.965px 180.4px;"
                                                        id="eliv1w7n0l5x" class="animable"></polygon>
                                                    <polygon
                                                        points="261.65 179.73 262.1 179.47 272.42 185.44 271.98 185.69 261.65 179.73"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 267.035px 182.58px;"
                                                        id="elt2p2ujy0n8a" class="animable"></polygon>
                                                    <polygon
                                                        points="284.78 166.39 285.66 165.88 295.99 171.84 295.1 172.35 284.78 166.39"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 290.385px 169.115px;"
                                                        id="elukwqjlbcyof" class="animable"></polygon>
                                                    <polygon
                                                        points="339.25 294.07 248.25 241.42 248.25 181.02 339.25 233.67 339.25 294.07"
                                                        style="fill: #C53F3F; transform-origin: 293.75px 237.545px;"
                                                        id="elf33hcvc95rq" class="animable"></polygon>
                                                    <polygon
                                                        points="339.25 294.07 419.66 247.56 419.66 187.16 339.25 233.67 339.25 294.07"
                                                        style="fill: #C53F3F; transform-origin: 379.455px 240.615px;"
                                                        id="elcjc0plqer7v" class="animable"></polygon>
                                                    <g id="eltjahth2waf">
                                                        <polygon
                                                            points="339.25 294.07 419.66 247.56 419.66 187.16 339.25 233.67 339.25 294.07"
                                                            style="opacity: 0.1; transform-origin: 379.455px 240.615px;"
                                                            class="animable" id="elxvvz6ofkemo"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="383.39 217.28 377.48 220.69 377.48 211.51 383.39 208.1 383.39 217.28"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 380.435px 214.395px;"
                                                        id="el76aihvq6ale" class="animable"></polygon>
                                                    <polygon
                                                        points="377.48 211.52 286.48 158.87 292.39 155.45 383.39 208.1 377.48 211.52"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 334.935px 183.485px;"
                                                        id="elotj7yu1gnmr" class="animable"></polygon>
                                                    <path
                                                        d="M305.89,265.18a5,5,0,0,1-2.11-4v-6.12l4.29,2.52.28,0V258h0v5.47a2,2,0,0,1-.84,1.85,1.29,1.29,0,0,1-.67.18A2,2,0,0,1,305.89,265.18Zm.48-6.59-.31,2.15h-1.59v.45a4.32,4.32,0,0,0,1.77,3.39.94.94,0,0,0,.93.11,1.41,1.41,0,0,0,.49-1.26v-5.07Zm-.61-.59,1.27-.22-2.56-1.51v3.78h1Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 306.071px 260.28px;"
                                                        id="el5clnuzkizq8" class="animable"></path>
                                                    <path
                                                        d="M306.07,269.82a.34.34,0,0,0,.34-.34v-4.6a.34.34,0,0,0-.34-.34.35.35,0,0,0-.35.34v4.6A.35.35,0,0,0,306.07,269.82Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 306.065px 267.18px;"
                                                        id="elryfrlnrabkl" class="animable"></path>
                                                    <path
                                                        d="M308.06,271a.34.34,0,0,0,.18-.64l-4-2.31a.34.34,0,1,0-.34.6l4,2.3A.3.3,0,0,0,308.06,271Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 306.073px 269.503px;"
                                                        id="elx7nxqwpj31f" class="animable"></path>
                                                    <path
                                                        d="M320,278.07a.82.82,0,0,0,.38-.09.93.93,0,0,0,.41-.83v-.94a.35.35,0,0,0-.34-.35.35.35,0,0,0-.35.35v.94a.34.34,0,0,1-.06.23.32.32,0,0,1-.23-.06,2,2,0,0,1-.64-1.55v-6.11a.35.35,0,0,0-.34-.35.35.35,0,0,0-.35.35v6.11a2.61,2.61,0,0,0,1,2.14A1,1,0,0,0,320,278.07Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.635px 273.69px;"
                                                        id="el7vi7mfv8jy7" class="animable"></path>
                                                    <path
                                                        d="M314.51,267.45v-.2a2.92,2.92,0,0,1,4.75-2.74,9.74,9.74,0,0,1,4.39,7.62v.6Zm1.76-2.64a2.56,2.56,0,0,0-1.07,2.25l7.73,4.46a9.07,9.07,0,0,0-4-6.41,3.51,3.51,0,0,0-1.71-.53A1.89,1.89,0,0,0,316.27,264.81Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.058px 268.28px;"
                                                        id="elluyfktvr5l8" class="animable"></path>
                                                    <path
                                                        d="M333.86,285.78a.34.34,0,0,0,.34-.34v-11.7a.34.34,0,0,0-.34-.34.35.35,0,0,0-.35.34v11.7A.35.35,0,0,0,333.86,285.78Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 333.855px 279.59px;"
                                                        id="eltacm2artgp" class="animable"></path>
                                                    <path
                                                        d="M334.86,276.41a.35.35,0,0,0,.32-.48L334,273.1l-1.36,1.58a.34.34,0,0,0,0,.48.36.36,0,0,0,.49,0l.65-.75.79,1.82A.34.34,0,0,0,334.86,276.41Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 333.873px 274.755px;"
                                                        id="elel058xjcquq" class="animable"></path>
                                                    <path
                                                        d="M330.67,284a.35.35,0,0,0,.35-.34v-11.7a.35.35,0,0,0-.35-.35.35.35,0,0,0-.34.35v11.7A.34.34,0,0,0,330.67,284Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 330.675px 277.805px;"
                                                        id="elb40r46wjenh" class="animable"></path>
                                                    <path
                                                        d="M331.68,274.59a.34.34,0,0,0,.14,0,.36.36,0,0,0,.18-.46l-1.23-2.82-1.36,1.57a.34.34,0,1,0,.52.45l.65-.75.79,1.83A.33.33,0,0,0,331.68,274.59Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 330.675px 272.954px;"
                                                        id="elbxgf8u6sy8" class="animable"></path>
                                                    <path
                                                        d="M276,236V251.1c0,.58-.41.82-.92.53L251.47,238a2.06,2.06,0,0,1-.91-1.59V221.23c0-.58.41-.82.92-.52l23.64,13.66A2,2,0,0,1,276,236Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 263.28px 236.167px;"
                                                        id="el491x4kmy17s" class="animable"></path>
                                                    <polygon
                                                        points="252.03 222.88 252.79 223.32 252.79 237.09 252.03 236.65 252.03 222.88"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 252.41px 229.985px;"
                                                        id="elheknpw3lt15" class="animable"></polygon>
                                                    <polygon
                                                        points="255.13 224.67 256.45 225.44 256.45 239.21 255.13 238.44 255.13 224.67"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 255.79px 231.94px;"
                                                        id="eltxoo7z9x6fh" class="animable"></polygon>
                                                    <polygon
                                                        points="258.24 226.46 259 226.9 259 240.67 258.24 240.23 258.24 226.46"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 258.62px 233.565px;"
                                                        id="elul2ofmlilh" class="animable"></polygon>
                                                    <polygon
                                                        points="260.58 227.79 262.11 228.7 262.11 242.47 260.58 241.56 260.58 227.79"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 261.345px 235.13px;"
                                                        id="elwmy59967b8b" class="animable"></polygon>
                                                    <polygon
                                                        points="264.46 230.05 265.22 230.49 265.22 244.26 264.46 243.82 264.46 230.05"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 264.84px 237.155px;"
                                                        id="elpb50jg3z3up" class="animable"></polygon>
                                                    <polygon
                                                        points="266.7 231.31 268.33 232.28 268.33 246.06 266.7 245.08 266.7 231.31"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 267.515px 238.685px;"
                                                        id="elrefy14luju" class="animable"></polygon>
                                                    <polygon
                                                        points="270.68 233.64 271.44 234.08 271.44 247.85 270.68 247.41 270.68 233.64"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 271.06px 240.745px;"
                                                        id="elo0qxsrgz2k8" class="animable"></polygon>
                                                    <polygon
                                                        points="272.45 234.65 272.83 234.87 272.83 248.64 272.45 248.42 272.45 234.65"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.64px 241.645px;"
                                                        id="el17hsuoz43bz" class="animable"></polygon>
                                                    <polygon
                                                        points="269.26 232.89 269.64 233.11 269.64 246.88 269.26 246.66 269.26 232.89"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 269.45px 239.885px;"
                                                        id="el0lsw7677m3u" class="animable"></polygon>
                                                    <polygon
                                                        points="263 229.22 263.38 229.44 263.38 243.21 263 242.99 263 229.22"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 263.19px 236.215px;"
                                                        id="eleuliwz8gahi" class="animable"></polygon>
                                                    <polygon
                                                        points="259.57 227.25 259.95 227.47 259.95 241.24 259.57 241.02 259.57 227.25"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 259.76px 234.245px;"
                                                        id="elr1vuw2jn83m" class="animable"></polygon>
                                                    <polygon
                                                        points="257.1 225.89 257.49 226.11 257.49 239.88 257.1 239.66 257.1 225.89"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 257.295px 232.885px;"
                                                        id="elsaudqy3gjnf" class="animable"></polygon>
                                                    <polygon
                                                        points="253.76 223.87 254.15 224.09 254.15 237.85 253.76 237.63 253.76 223.87"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 253.955px 230.86px;"
                                                        id="elfwa6m69wdl" class="animable"></polygon>
                                                    <polygon
                                                        points="273.78 235.43 274.55 235.87 274.55 249.64 273.78 249.2 273.78 235.43"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 274.165px 242.535px;"
                                                        id="elt1gtvri5b6" class="animable"></polygon>
                                                </g>
                                            </g>
                                            <g id="freepik--box--inject-13" class="animable"
                                                style="transform-origin: 322.515px 170.535px;">
                                                <g id="freepik--shadow--inject-13">
                                                    <polygon
                                                        points="246.81 180.19 333.96 230.62 402.25 191.19 314.95 140.78 246.81 180.19"
                                                        style="opacity: 0.1; transform-origin: 324.53px 185.7px;"
                                                        class="animable" id="el7m260soxnhi"></polygon>
                                                </g>
                                                <g id="freepik--box--inject-13" class="animable"
                                                    style="transform-origin: 321.99px 170.255px;">
                                                    <polygon
                                                        points="242.78 152.66 315.9 110.45 401.2 159.7 328.08 201.91 242.78 152.66"
                                                        style="fill: #C53F3F; transform-origin: 321.99px 156.18px;"
                                                        id="el3e8ztrx5r48" class="animable"></polygon>
                                                    <g id="els64q0b1smfq">
                                                        <polygon
                                                            points="242.78 152.66 315.9 110.45 401.2 159.7 328.08 201.91 242.78 152.66"
                                                            style="opacity: 0.1; transform-origin: 321.99px 156.18px;"
                                                            class="animable" id="el5fqd2ze4r74"></polygon>
                                                    </g>
                                                    <path
                                                        d="M281.33,136.19l24.18,13.93c.44.26.32.73-.26,1.07L277.94,167a2.12,2.12,0,0,1-1.85.15L251.9,153.17c-.44-.25-.32-.73.26-1.07l27.32-15.76A2.09,2.09,0,0,1,281.33,136.19Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 278.705px 151.668px;"
                                                        id="ely4m5q99zvkk" class="animable"></path>
                                                    <path
                                                        d="M269.11,159.9a.5.5,0,0,1-.25-.93l22.67-13.09a.5.5,0,1,1,.5.86l-22.67,13.09A.47.47,0,0,1,269.11,159.9Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 280.47px 152.842px;"
                                                        id="elsbr0zlmyld" class="animable"></path>
                                                    <path
                                                        d="M271.63,161.34a.5.5,0,0,1-.25-.93l22.67-13.09a.5.5,0,0,1,.68.18.51.51,0,0,1-.18.69l-22.67,13.08A.47.47,0,0,1,271.63,161.34Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 282.966px 154.297px;"
                                                        id="elgmnzciz1hzw" class="animable"></path>
                                                    <path
                                                        d="M274.14,162.78a.5.5,0,0,1-.25-.93l22.67-13.09a.5.5,0,1,1,.5.87l-22.67,13.09A.54.54,0,0,1,274.14,162.78Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 285.478px 155.737px;"
                                                        id="elqcp8cgwe9c" class="animable"></path>
                                                    <path
                                                        d="M276.66,164.23a.5.5,0,0,1-.43-.25.51.51,0,0,1,.18-.69l22.67-13.08a.5.5,0,1,1,.5.86l-22.67,13.09A.47.47,0,0,1,276.66,164.23Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 288.018px 157.172px;"
                                                        id="el7o345rkmhwl" class="animable"></path>
                                                    <polygon
                                                        points="254.19 152.54 255.07 152.03 265.4 157.99 264.51 158.5 254.19 152.54"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 259.795px 155.265px;"
                                                        id="elry8spq9w59" class="animable"></polygon>
                                                    <polygon
                                                        points="257.77 150.47 259.31 149.59 269.63 155.56 268.1 156.43 257.77 150.47"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 263.7px 153.01px;"
                                                        id="elhiiyd9kmrbb" class="animable"></polygon>
                                                    <polygon
                                                        points="261.36 148.39 262.25 147.88 272.57 153.85 271.69 154.35 261.36 148.39"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 266.965px 151.115px;"
                                                        id="elj677bo6vko" class="animable"></polygon>
                                                    <polygon
                                                        points="264.05 146.82 265.83 145.81 276.16 151.77 274.38 152.78 264.05 146.82"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 270.105px 149.295px;"
                                                        id="elvejarqugpaj" class="animable"></polygon>
                                                    <polygon
                                                        points="268.54 144.25 269.42 143.74 279.75 149.7 278.87 150.21 268.54 144.25"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 274.145px 146.975px;"
                                                        id="elw6rljj7uydm" class="animable"></polygon>
                                                    <polygon
                                                        points="271.1 142.74 273.01 141.66 283.34 147.63 281.43 148.71 271.1 142.74"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 277.22px 145.185px;"
                                                        id="elox21d0ajox" class="animable"></polygon>
                                                    <polygon
                                                        points="275.72 140.1 276.6 139.59 286.93 145.56 286.05 146.06 275.72 140.1"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 281.325px 142.825px;"
                                                        id="elhlf8q3dq9cf" class="animable"></polygon>
                                                    <polygon
                                                        points="277.75 138.91 278.2 138.66 288.52 144.62 288.08 144.88 277.75 138.91"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 283.135px 141.77px;"
                                                        id="el1d863zkayym" class="animable"></polygon>
                                                    <polygon
                                                        points="274.13 141.08 274.57 140.82 284.9 146.78 284.46 147.04 274.13 141.08"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 279.515px 143.93px;"
                                                        id="el3uy97315yyl" class="animable"></polygon>
                                                    <polygon
                                                        points="266.86 145.23 267.31 144.97 277.63 150.94 277.19 151.19 266.86 145.23"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.245px 148.08px;"
                                                        id="elykbi1cpd2y" class="animable"></polygon>
                                                    <polygon
                                                        points="262.91 147.52 263.36 147.26 273.68 153.23 273.24 153.48 262.91 147.52"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 268.295px 150.37px;"
                                                        id="elfk9n9ch2z16" class="animable"></polygon>
                                                    <polygon
                                                        points="260.12 149.19 260.56 148.93 270.88 154.9 270.44 155.15 260.12 149.19"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 265.5px 152.04px;"
                                                        id="elyyx0h0oajm" class="animable"></polygon>
                                                    <polygon
                                                        points="256.19 151.37 256.63 151.12 266.95 157.08 266.51 157.33 256.19 151.37"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 261.57px 154.225px;"
                                                        id="elfevkvjrlfop" class="animable"></polygon>
                                                    <polygon
                                                        points="279.31 138.03 280.19 137.52 290.52 143.48 289.63 143.99 279.31 138.03"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 284.915px 140.755px;"
                                                        id="ellqvdcvdorwg" class="animable"></polygon>
                                                    <polygon
                                                        points="328.08 230.06 242.78 180.81 242.78 152.66 328.08 201.91 328.08 230.06"
                                                        style="fill: #C53F3F; transform-origin: 285.43px 191.36px;"
                                                        id="el2oeeot8n4nj" class="animable"></polygon>
                                                    <g id="ell9tm8yntajj">
                                                        <g style="opacity: 0.2; transform-origin: 285.43px 191.36px;"
                                                            class="animable" id="elyo44s8rjgcf">
                                                            <polygon
                                                                points="328.08 230.06 242.78 180.81 242.78 152.66 328.08 201.91 328.08 230.06"
                                                                id="el5sq216s29o4" class="animable"
                                                                style="transform-origin: 285.43px 191.36px;"></polygon>
                                                        </g>
                                                    </g>
                                                    <polygon
                                                        points="328.08 230.06 401.2 187.84 401.2 159.7 328.08 201.91 328.08 230.06"
                                                        style="fill: #C53F3F; transform-origin: 364.64px 194.88px;"
                                                        id="elnof8109ecg" class="animable"></polygon>
                                                    <g id="elysbqgalrpep">
                                                        <polygon
                                                            points="328.08 230.06 401.2 187.84 401.2 159.7 328.08 201.91 328.08 230.06"
                                                            style="opacity: 0.3; transform-origin: 364.64px 194.88px;"
                                                            class="animable" id="el57el4km12yh"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="372.23 185.52 366.31 188.93 366.31 179.76 372.23 176.34 372.23 185.52"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 369.27px 182.635px;"
                                                        id="elx6dmljenz6r" class="animable"></polygon>
                                                    <polygon
                                                        points="366.31 179.76 281.01 130.51 286.92 127.09 372.23 176.34 366.31 179.76"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 326.62px 153.425px;"
                                                        id="elv1yfwdlq49s" class="animable"></polygon>
                                                    <path
                                                        d="M294.73,201.16a4.94,4.94,0,0,1-2.11-4v-6.11l4.29,2.52.28-.05v.4h0v5.47a2.06,2.06,0,0,1-.84,1.86,1.31,1.31,0,0,1-.67.17A1.88,1.88,0,0,1,294.73,201.16Zm.48-6.58-.32,2.14h-1.58v.45a4.34,4.34,0,0,0,1.77,3.4.94.94,0,0,0,.92.1,1.39,1.39,0,0,0,.5-1.26v-5.06Zm-.61-.59,1.27-.23-2.56-1.5V196h1Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.91px 196.235px;"
                                                        id="elewmnh8srw4v" class="animable"></path>
                                                    <path
                                                        d="M294.9,205.8a.35.35,0,0,0,.35-.34v-4.59a.35.35,0,0,0-.35-.35.35.35,0,0,0-.34.35v4.59A.34.34,0,0,0,294.9,205.8Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.905px 203.16px;"
                                                        id="elhpcjdzxvy5h" class="animable"></path>
                                                    <path
                                                        d="M296.9,207a.33.33,0,0,0,.3-.18.35.35,0,0,0-.13-.47l-4-2.3a.34.34,0,0,0-.47.13.33.33,0,0,0,.12.46l4,2.31A.34.34,0,0,0,296.9,207Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.897px 205.502px;"
                                                        id="elj0arklxzoaj" class="animable"></path>
                                                    <path
                                                        d="M308.87,214.06a.79.79,0,0,0,.37-.1.9.9,0,0,0,.42-.83v-.94a.35.35,0,0,0-.35-.34.34.34,0,0,0-.34.34v.94c0,.14,0,.22-.07.23s-.1,0-.22-.06a2,2,0,0,1-.64-1.55v-6.11a.34.34,0,0,0-.34-.34.35.35,0,0,0-.35.34v6.11a2.62,2.62,0,0,0,1,2.15A1.12,1.12,0,0,0,308.87,214.06Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 308.505px 209.68px;"
                                                        id="el5130nxspjod" class="animable"></path>
                                                    <path
                                                        d="M303.35,203.44v-.2a2.91,2.91,0,0,1,4.74-2.74,9.73,9.73,0,0,1,4.4,7.62v.6Zm1.75-2.64A2.56,2.56,0,0,0,304,203l7.73,4.46a9,9,0,0,0-4-6.4,3.46,3.46,0,0,0-1.72-.54A1.84,1.84,0,0,0,305.1,200.8Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 307.897px 204.267px;"
                                                        id="elzctizppwo2h" class="animable"></path>
                                                    <path
                                                        d="M322.69,221.77a.35.35,0,0,0,.35-.34V209.72a.35.35,0,0,0-.35-.34.34.34,0,0,0-.34.34v11.71A.34.34,0,0,0,322.69,221.77Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 322.695px 215.575px;"
                                                        id="elha747l85hno" class="animable"></path>
                                                    <path
                                                        d="M323.7,212.39a.31.31,0,0,0,.13,0,.33.33,0,0,0,.18-.45l-1.22-2.82-1.37,1.57a.35.35,0,0,0,0,.49.34.34,0,0,0,.48,0l.65-.75.79,1.83A.36.36,0,0,0,323.7,212.39Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 322.681px 210.759px;"
                                                        id="elyajsnz2e0zm" class="animable"></path>
                                                    <path
                                                        d="M319.51,220a.35.35,0,0,0,.35-.35v-11.7a.35.35,0,0,0-.35-.34.34.34,0,0,0-.34.34v11.7A.35.35,0,0,0,319.51,220Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.515px 213.805px;"
                                                        id="elbo3x9909hu9" class="animable"></path>
                                                    <path
                                                        d="M320.52,210.58a.31.31,0,0,0,.13,0,.33.33,0,0,0,.18-.45l-1.22-2.83-1.37,1.58a.35.35,0,0,0,0,.48.33.33,0,0,0,.48,0l.65-.75.79,1.82A.36.36,0,0,0,320.52,210.58Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.503px 208.943px;"
                                                        id="elgvflo4yfnua" class="animable"></path>
                                                    <path
                                                        d="M270.57,175.34v15.15c0,.58-.41.82-.91.53L246,177.36a2,2,0,0,1-.92-1.58V160.62c0-.58.41-.82.92-.53l23.64,13.66A2,2,0,0,1,270.57,175.34Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 257.825px 175.555px;"
                                                        id="elwn9t37u96fg" class="animable"></path>
                                                    <polygon
                                                        points="246.56 162.26 247.32 162.7 247.32 176.47 246.56 176.03 246.56 162.26"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 246.94px 169.365px;"
                                                        id="el546w6n9132c" class="animable"></polygon>
                                                    <polygon
                                                        points="249.66 164.06 250.98 164.83 250.98 178.6 249.66 177.82 249.66 164.06"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 250.32px 171.33px;"
                                                        id="elfg9t1mx59o6" class="animable"></polygon>
                                                    <polygon
                                                        points="252.77 165.85 253.54 166.29 253.54 180.06 252.77 179.62 252.77 165.85"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 253.155px 172.955px;"
                                                        id="el2ogkgwd3ox5" class="animable"></polygon>
                                                    <polygon
                                                        points="255.12 167.18 256.64 168.08 256.64 181.85 255.12 180.95 255.12 167.18"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 255.88px 174.515px;"
                                                        id="elxckyn2bgwjh" class="animable"></polygon>
                                                    <polygon
                                                        points="258.99 169.44 259.75 169.88 259.75 183.65 258.99 183.21 258.99 169.44"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 259.37px 176.545px;"
                                                        id="el0iz7xtc1aqa" class="animable"></polygon>
                                                    <polygon
                                                        points="261.23 170.7 262.86 171.67 262.86 185.44 261.23 184.47 261.23 170.7"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 262.045px 178.07px;"
                                                        id="elbrmnz94cd7" class="animable"></polygon>
                                                    <polygon
                                                        points="265.21 173.02 265.97 173.47 265.97 187.24 265.21 186.79 265.21 173.02"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 265.59px 180.13px;"
                                                        id="elkood2fiapi" class="animable"></polygon>
                                                    <polygon
                                                        points="266.98 174.03 267.36 174.25 267.36 188.02 266.98 187.8 266.98 174.03"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 267.17px 181.025px;"
                                                        id="eluwghj65k1h9" class="animable"></polygon>
                                                    <polygon
                                                        points="263.79 172.27 264.17 172.5 264.17 186.26 263.79 186.04 263.79 172.27"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 263.98px 179.265px;"
                                                        id="elergih1q5jt" class="animable"></polygon>
                                                    <polygon
                                                        points="257.53 168.61 257.91 168.83 257.91 182.6 257.53 182.38 257.53 168.61"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 257.72px 175.605px;"
                                                        id="el2gqy1x5jwoh" class="animable"></polygon>
                                                    <polygon
                                                        points="254.1 166.64 254.48 166.86 254.48 180.63 254.1 180.41 254.1 166.64"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 254.29px 173.635px;"
                                                        id="elw6qd2pa7al9" class="animable"></polygon>
                                                    <polygon
                                                        points="251.64 165.28 252.02 165.5 252.02 179.27 251.64 179.05 251.64 165.28"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 251.83px 172.275px;"
                                                        id="elqe1tdkyh8y" class="animable"></polygon>
                                                    <polygon
                                                        points="248.3 163.25 248.68 163.47 248.68 177.24 248.3 177.02 248.3 163.25"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 248.49px 170.245px;"
                                                        id="elca2ie4bxyha" class="animable"></polygon>
                                                    <polygon
                                                        points="268.31 174.82 269.08 175.26 269.08 189.03 268.31 188.59 268.31 174.82"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 268.695px 181.925px;"
                                                        id="elkzyrb7gu2lf" class="animable"></polygon>
                                                </g>
                                            </g>
                                            <g id="freepik--box--inject-13" class="animable"
                                                style="transform-origin: 225.12px 289.68px;">
                                                <g id="freepik--shadow--inject-13">
                                                    <polygon
                                                        points="283.53 344.76 216.72 383.29 166.71 354.38 233.68 315.94 283.53 344.76"
                                                        style="opacity: 0.1; transform-origin: 225.12px 349.615px;"
                                                        class="animable" id="el0gfms9xv0u1g"></polygon>
                                                </g>
                                                <g id="freepik--box--inject-13" class="animable"
                                                    style="transform-origin: 225.62px 287.54px;">
                                                    <polygon
                                                        points="172.81 231.24 233.74 196.07 278.43 221.86 217.5 257.04 172.81 231.24"
                                                        style="fill: #C53F3F; transform-origin: 225.62px 226.555px;"
                                                        id="el3shayqjjye8" class="animable"></polygon>
                                                    <g id="elvk1c9nhgcz">
                                                        <polygon
                                                            points="172.81 231.24 233.74 196.07 278.43 221.86 217.5 257.04 172.81 231.24"
                                                            style="opacity: 0.1; transform-origin: 225.62px 226.555px;"
                                                            class="animable" id="el70ooz5ynkvd"></polygon>
                                                    </g>
                                                    <path
                                                        d="M233.15,201.12l-18.7,10.77c-.34.2-.25.57.2.83l21.12,12.19a1.62,1.62,0,0,0,1.42.12l18.71-10.78c.34-.2.25-.56-.2-.83l-21.12-12.18A1.64,1.64,0,0,0,233.15,201.12Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 235.175px 213.075px;"
                                                        id="el5vmxir3bzov" class="animable"></path>
                                                    <path
                                                        d="M242.6,219.45a.37.37,0,0,0,.33-.19.39.39,0,0,0-.14-.53l-17.53-10.12a.4.4,0,0,0-.53.15.39.39,0,0,0,.14.52L242.4,219.4A.35.35,0,0,0,242.6,219.45Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 233.832px 214.007px;"
                                                        id="elt3d968vo4u" class="animable"></path>
                                                    <path
                                                        d="M240.65,220.57a.39.39,0,0,0,.33-.19.38.38,0,0,0-.14-.53l-17.53-10.12a.37.37,0,0,0-.52.14.38.38,0,0,0,.14.53l17.53,10.12A.41.41,0,0,0,240.65,220.57Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 231.885px 215.123px;"
                                                        id="elmqry30hotp8" class="animable"></path>
                                                    <path
                                                        d="M238.7,221.68a.39.39,0,0,0,.2-.72l-17.53-10.12a.4.4,0,0,0-.53.14.39.39,0,0,0,.14.53l17.53,10.12A.34.34,0,0,0,238.7,221.68Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 229.935px 216.236px;"
                                                        id="elcpsr0oe0b" class="animable"></path>
                                                    <path
                                                        d="M236.76,222.8a.39.39,0,0,0,.33-.19.38.38,0,0,0-.14-.53L219.42,212a.37.37,0,0,0-.52.14.38.38,0,0,0,.14.53l17.52,10.12A.49.49,0,0,0,236.76,222.8Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 227.995px 217.375px;"
                                                        id="elgzvpi7nm6j8" class="animable"></path>
                                                    <polygon
                                                        points="254.13 213.76 253.45 213.37 245.47 217.98 246.15 218.37 254.13 213.76"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 249.8px 215.87px;"
                                                        id="elp0lzd2qeyk" class="animable"></polygon>
                                                    <polygon
                                                        points="251.36 212.16 250.17 211.49 242.19 216.1 243.37 216.77 251.36 212.16"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 246.775px 214.13px;"
                                                        id="elrcjryahcgzf" class="animable"></polygon>
                                                    <polygon
                                                        points="248.58 210.56 247.9 210.16 239.92 214.77 240.6 215.17 248.58 210.56"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 244.25px 212.665px;"
                                                        id="elpat5b1gz9o" class="animable"></polygon>
                                                    <polygon
                                                        points="246.5 209.34 245.13 208.56 237.14 213.17 238.52 213.95 246.5 209.34"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 241.82px 211.255px;"
                                                        id="elyrcwg8xcjr" class="animable"></polygon>
                                                    <polygon
                                                        points="243.03 207.35 242.35 206.96 234.37 211.57 235.05 211.96 243.03 207.35"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 238.7px 209.46px;"
                                                        id="elv8amxoi5vvq" class="animable"></polygon>
                                                    <polygon
                                                        points="241.05 206.19 239.58 205.36 231.59 209.97 233.07 210.8 241.05 206.19"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 236.32px 208.08px;"
                                                        id="els4jznn6ifj" class="animable"></polygon>
                                                    <polygon
                                                        points="237.48 204.15 236.8 203.75 228.82 208.36 229.5 208.76 237.48 204.15"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 233.15px 206.255px;"
                                                        id="eltwbnn7zmbvf" class="animable"></polygon>
                                                    <polygon
                                                        points="235.91 203.23 235.57 203.03 227.59 207.64 227.93 207.84 235.91 203.23"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 231.75px 205.435px;"
                                                        id="eln9bzaqrig3b" class="animable"></polygon>
                                                    <polygon
                                                        points="238.71 204.9 238.37 204.7 230.38 209.31 230.73 209.51 238.71 204.9"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 234.545px 207.105px;"
                                                        id="elc0tdvzbex8p" class="animable"></polygon>
                                                    <polygon
                                                        points="244.33 208.11 243.99 207.91 236 212.52 236.35 212.72 244.33 208.11"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 240.165px 210.315px;"
                                                        id="elb8i00otla4d" class="animable"></polygon>
                                                    <polygon
                                                        points="247.38 209.88 247.04 209.69 239.06 214.29 239.4 214.49 247.38 209.88"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 243.22px 212.09px;"
                                                        id="eldr08ntkpzhg" class="animable"></polygon>
                                                    <polygon
                                                        points="249.55 211.17 249.21 210.97 241.22 215.59 241.56 215.78 249.55 211.17"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 245.385px 213.375px;"
                                                        id="el3triey9vbpo" class="animable"></polygon>
                                                    <polygon
                                                        points="252.59 212.86 252.25 212.66 244.26 217.27 244.6 217.47 252.59 212.86"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 248.425px 215.065px;"
                                                        id="elt5icfu75pff" class="animable"></polygon>
                                                    <polygon
                                                        points="234.71 202.54 234.03 202.15 226.04 206.76 226.72 207.16 234.71 202.54"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 230.375px 204.655px;"
                                                        id="elblog8lq6oy" class="animable"></polygon>
                                                    <polygon
                                                        points="217.5 379.01 172.81 353.21 172.81 231.24 217.5 257.04 217.5 379.01"
                                                        style="fill: #C53F3F; transform-origin: 195.155px 305.125px;"
                                                        id="elng3r3igsmb" class="animable"></polygon>
                                                    <g id="elxipji2rrbk">
                                                        <g style="opacity: 0.2; transform-origin: 195.155px 305.125px;"
                                                            class="animable" id="el5g6t6vjgnsd">
                                                            <polygon
                                                                points="217.5 379.01 172.81 353.21 172.81 231.24 217.5 257.04 217.5 379.01"
                                                                id="ely8s3qj0jc3n" class="animable"
                                                                style="transform-origin: 195.155px 305.125px;"></polygon>
                                                        </g>
                                                    </g>
                                                    <polygon
                                                        points="217.5 379.01 278.43 343.83 278.43 221.86 217.5 257.04 217.5 379.01"
                                                        style="fill: #C53F3F; transform-origin: 247.965px 300.435px;"
                                                        id="elw1py83shb3" class="animable"></polygon>
                                                    <g id="el6h9s88hlfa9">
                                                        <polygon
                                                            points="217.5 379.01 278.43 343.83 278.43 221.86 217.5 257.04 217.5 379.01"
                                                            style="opacity: 0.3; transform-origin: 247.965px 300.435px;"
                                                            class="animable" id="elbh8kwaxz5yl"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="249.99 247.46 244.08 250.87 244.08 241.69 249.99 238.28 249.99 247.46"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 247.035px 244.575px;"
                                                        id="elax2dnmcfk4" class="animable"></polygon>
                                                    <polygon
                                                        points="244.08 241.69 199.4 215.9 205.31 212.48 249.99 238.28 244.08 241.69"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 224.695px 227.085px;"
                                                        id="elvrjq9ayf32q" class="animable"></polygon>
                                                    <path
                                                        d="M184.14,350.12a5,5,0,0,1-2.11-4V340l4.29,2.52.28,0v.41h0v5.47a2,2,0,0,1-.84,1.85,1.29,1.29,0,0,1-.67.18A2,2,0,0,1,184.14,350.12Zm.48-6.59-.31,2.15h-1.59v.45a4.32,4.32,0,0,0,1.77,3.39.94.94,0,0,0,.93.11,1.42,1.42,0,0,0,.49-1.26V343.3Zm-.61-.59,1.27-.22-2.56-1.51V345h1Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 184.321px 345.215px;"
                                                        id="elm31pzdblie" class="animable"></path>
                                                    <path
                                                        d="M184.32,354.76a.34.34,0,0,0,.34-.34v-4.6a.34.34,0,0,0-.34-.34.35.35,0,0,0-.35.34v4.6A.35.35,0,0,0,184.32,354.76Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 184.315px 352.12px;"
                                                        id="eluecdk8iitwp" class="animable"></path>
                                                    <path
                                                        d="M186.31,355.91a.34.34,0,0,0,.17-.64l-4-2.31a.34.34,0,1,0-.34.6l4,2.3A.26.26,0,0,0,186.31,355.91Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 184.311px 354.412px;"
                                                        id="eliia2h3v376" class="animable"></path>
                                                    <path
                                                        d="M198.28,363a.82.82,0,0,0,.38-.09.93.93,0,0,0,.41-.83v-.94a.35.35,0,1,0-.69,0v.94a.34.34,0,0,1-.06.23.32.32,0,0,1-.23-.06,2,2,0,0,1-.64-1.55V354.6a.35.35,0,0,0-.34-.35.35.35,0,0,0-.35.35v6.11a2.61,2.61,0,0,0,1,2.14A1,1,0,0,0,198.28,363Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 197.917px 358.625px;"
                                                        id="elsr87c9eey1j" class="animable"></path>
                                                    <path
                                                        d="M192.76,352.39v-.2a2.92,2.92,0,0,1,4.75-2.74,9.74,9.74,0,0,1,4.39,7.62v.6Zm1.76-2.64a2.56,2.56,0,0,0-1.07,2.25l7.73,4.46a9.07,9.07,0,0,0-4-6.41,3.54,3.54,0,0,0-1.71-.53A1.89,1.89,0,0,0,194.52,349.75Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 197.308px 353.22px;"
                                                        id="el1748vrreaid" class="animable"></path>
                                                    <path
                                                        d="M212.1,370.72a.35.35,0,0,0,.35-.34v-11.7a.35.35,0,0,0-.35-.34.34.34,0,0,0-.34.34v11.7A.34.34,0,0,0,212.1,370.72Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 212.105px 364.53px;"
                                                        id="el0zw9tnunurr" class="animable"></path>
                                                    <path
                                                        d="M213.11,361.35a.35.35,0,0,0,.14,0,.34.34,0,0,0,.17-.45L212.2,358l-1.36,1.58a.34.34,0,0,0,0,.48.36.36,0,0,0,.49,0l.64-.75.79,1.82A.36.36,0,0,0,213.11,361.35Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 212.095px 359.679px;"
                                                        id="elrk8l559edgs" class="animable"></path>
                                                    <path
                                                        d="M208.92,368.91a.35.35,0,0,0,.35-.34v-11.7a.35.35,0,0,0-.35-.35.35.35,0,0,0-.34.35v11.7A.34.34,0,0,0,208.92,368.91Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 208.925px 362.715px;"
                                                        id="elobeo37myi4" class="animable"></path>
                                                    <path
                                                        d="M209.93,359.53a.34.34,0,0,0,.14,0,.36.36,0,0,0,.18-.46L209,356.23l-1.36,1.57a.34.34,0,1,0,.52.45l.64-.75.79,1.83A.35.35,0,0,0,209.93,359.53Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 208.916px 357.884px;"
                                                        id="elk2q70aa3j" class="animable"></path>
                                                    <path
                                                        d="M213.43,333.38v15.14c0,.59-.41.82-.91.53L188.87,335.4a2,2,0,0,1-.92-1.59V318.66c0-.59.4-.82.91-.53l23.65,13.66A2,2,0,0,1,213.43,333.38Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 200.69px 333.59px;"
                                                        id="elf4m7xucu96q" class="animable"></path>
                                                    <polygon
                                                        points="189.42 320.3 190.18 320.74 190.18 334.51 189.42 334.07 189.42 320.3"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 189.8px 327.405px;"
                                                        id="elly1qbwdksg" class="animable"></polygon>
                                                    <polygon
                                                        points="192.53 322.09 193.84 322.87 193.84 336.64 192.53 335.86 192.53 322.09"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 193.185px 329.365px;"
                                                        id="elmvtyvw106z" class="animable"></polygon>
                                                    <polygon
                                                        points="195.64 323.89 196.4 324.33 196.4 338.1 195.64 337.66 195.64 323.89"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 196.02px 330.995px;"
                                                        id="elbw7e03h972b" class="animable"></polygon>
                                                    <polygon
                                                        points="197.98 325.21 199.51 326.12 199.51 339.89 197.98 338.99 197.98 325.21"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 198.745px 332.55px;"
                                                        id="elnrwul3gj6" class="animable"></polygon>
                                                    <polygon
                                                        points="201.85 327.47 202.62 327.92 202.62 341.69 201.85 341.25 201.85 327.47"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 202.235px 334.58px;"
                                                        id="elsx3k1hhxtfc" class="animable"></polygon>
                                                    <polygon
                                                        points="204.09 328.74 205.72 329.71 205.72 343.48 204.09 342.51 204.09 328.74"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 204.905px 336.11px;"
                                                        id="elll2jv4u9ob" class="animable"></polygon>
                                                    <polygon
                                                        points="208.07 331.06 208.83 331.5 208.83 345.27 208.07 344.83 208.07 331.06"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 208.45px 338.165px;"
                                                        id="el5n0r249sk1h" class="animable"></polygon>
                                                    <polygon
                                                        points="209.84 332.07 210.22 332.29 210.22 346.06 209.84 345.84 209.84 332.07"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 210.03px 339.065px;"
                                                        id="elhtxmhu2nn2" class="animable"></polygon>
                                                    <polygon
                                                        points="206.65 330.31 207.03 330.53 207.03 344.3 206.65 344.08 206.65 330.31"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 206.84px 337.305px;"
                                                        id="elmfx3wzmq7ek" class="animable"></polygon>
                                                    <polygon
                                                        points="200.39 326.64 200.77 326.87 200.77 340.63 200.39 340.42 200.39 326.64"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 200.58px 333.635px;"
                                                        id="elbarhiktsaq" class="animable"></polygon>
                                                    <polygon
                                                        points="196.96 324.68 197.34 324.9 197.34 338.67 196.96 338.45 196.96 324.68"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 197.15px 331.675px;"
                                                        id="elr4o71hcrje" class="animable"></polygon>
                                                    <polygon
                                                        points="194.5 323.32 194.88 323.54 194.88 337.31 194.5 337.09 194.5 323.32"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 194.69px 330.315px;"
                                                        id="elltazpn183wj" class="animable"></polygon>
                                                    <polygon
                                                        points="191.16 321.29 191.54 321.51 191.54 335.28 191.16 335.06 191.16 321.29"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 191.35px 328.285px;"
                                                        id="elkbi57w4l6k" class="animable"></polygon>
                                                    <polygon
                                                        points="211.18 332.86 211.94 333.3 211.94 347.07 211.18 346.63 211.18 332.86"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 211.56px 339.965px;"
                                                        id="els6zg6mzea5" class="animable"></polygon>
                                                </g>
                                            </g>
                                            <g id="freepik--box--inject-13" class="animable"
                                                style="transform-origin: 279.115px 352.62px;">
                                                <g id="freepik--shadow--inject-13">
                                                    <polygon
                                                        points="338.17 376.27 271.36 414.8 220.06 385.26 287.02 346.82 338.17 376.27"
                                                        style="opacity: 0.1; transform-origin: 279.115px 380.81px;"
                                                        class="animable" id="elqamnvj6947r"></polygon>
                                                </g>
                                                <g id="freepik--box--inject-13" class="animable"
                                                    style="transform-origin: 280.62px 350.605px;">
                                                    <polygon
                                                        points="227.81 325.62 288.75 290.44 333.43 316.24 272.5 351.42 227.81 325.62"
                                                        style="fill: #C53F3F; transform-origin: 280.62px 320.93px;"
                                                        id="elohoskxyce8l" class="animable"></polygon>
                                                    <g id="eltw4xrcub9th">
                                                        <g style="opacity: 0.3; transform-origin: 280.62px 320.93px;"
                                                            class="animable" id="elp2a7ka76fm">
                                                            <polygon
                                                                points="227.81 325.62 288.75 290.44 333.43 316.24 272.5 351.42 227.81 325.62"
                                                                style="fill: rgb(255, 255, 255); transform-origin: 280.62px 320.93px;"
                                                                id="eljy9vijphlt" class="animable"></polygon>
                                                        </g>
                                                    </g>
                                                    <path
                                                        d="M288.15,295.5l-18.7,10.77c-.34.2-.25.57.2.83l21.12,12.19a1.6,1.6,0,0,0,1.43.11l18.7-10.77c.34-.2.25-.57-.2-.83l-21.12-12.18A1.57,1.57,0,0,0,288.15,295.5Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 290.175px 307.45px;"
                                                        id="elmzecml7vg" class="animable"></path>
                                                    <path
                                                        d="M297.6,313.83a.39.39,0,0,0,.33-.19.38.38,0,0,0-.14-.53L280.26,303a.39.39,0,0,0-.38.67l17.52,10.12A.49.49,0,0,0,297.6,313.83Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 288.859px 308.403px;"
                                                        id="el6vs67q6p72" class="animable"></path>
                                                    <path
                                                        d="M295.65,315a.39.39,0,0,0,.34-.2.4.4,0,0,0-.15-.53L278.32,304.1a.39.39,0,0,0-.53.15.38.38,0,0,0,.14.52l17.53,10.12A.35.35,0,0,0,295.65,315Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 286.887px 309.525px;"
                                                        id="el81omz1arjqr" class="animable"></path>
                                                    <path
                                                        d="M293.71,316.06a.39.39,0,0,0,.19-.72l-17.53-10.12a.39.39,0,0,0-.53.14.4.4,0,0,0,.14.53L293.51,316A.46.46,0,0,0,293.71,316.06Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 284.937px 310.614px;"
                                                        id="el4el4tu7jg2a" class="animable"></path>
                                                    <path
                                                        d="M291.76,317.18a.38.38,0,0,0,.33-.2.38.38,0,0,0-.14-.53l-17.53-10.11a.38.38,0,1,0-.38.66l17.53,10.12A.33.33,0,0,0,291.76,317.18Z"
                                                        style="fill: rgb(224, 224, 224); transform-origin: 282.996px 311.734px;"
                                                        id="elkb35zsigngt" class="animable"></path>
                                                    <polygon
                                                        points="309.13 308.14 308.45 307.74 300.47 312.36 301.15 312.75 309.13 308.14"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 304.8px 310.245px;"
                                                        id="elxm7o2sywu2" class="animable"></polygon>
                                                    <polygon
                                                        points="306.36 306.54 305.18 305.86 297.19 310.47 298.38 311.15 306.36 306.54"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 301.775px 308.505px;"
                                                        id="elqzes373n21" class="animable"></polygon>
                                                    <polygon
                                                        points="303.58 304.93 302.9 304.54 294.92 309.15 295.6 309.54 303.58 304.93"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 299.25px 307.04px;"
                                                        id="el5d6e2dcv78a" class="animable"></polygon>
                                                    <polygon
                                                        points="301.51 303.72 300.13 302.94 292.14 307.55 293.52 308.33 301.51 303.72"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 296.825px 305.635px;"
                                                        id="el6tk1vbe0o57" class="animable"></polygon>
                                                    <polygon
                                                        points="298.04 301.73 297.35 301.33 289.37 305.94 290.05 306.34 298.04 301.73"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 293.705px 303.835px;"
                                                        id="elrzqngwktvn" class="animable"></polygon>
                                                    <polygon
                                                        points="296.05 300.56 294.58 299.73 286.6 304.34 288.07 305.18 296.05 300.56"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 291.325px 302.455px;"
                                                        id="eleyq76g3ar1l" class="animable"></polygon>
                                                    <polygon
                                                        points="292.49 298.52 291.81 298.13 283.82 302.74 284.5 303.13 292.49 298.52"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 288.155px 300.63px;"
                                                        id="elnq81uiedw8" class="animable"></polygon>
                                                    <polygon
                                                        points="290.91 297.61 290.57 297.41 282.59 302.02 282.93 302.21 290.91 297.61"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 286.75px 299.81px;"
                                                        id="eluf73i1x3p2" class="animable"></polygon>
                                                    <polygon
                                                        points="293.71 299.28 293.37 299.08 285.39 303.69 285.73 303.89 293.71 299.28"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 289.55px 301.485px;"
                                                        id="el6ohqly2p1yj" class="animable"></polygon>
                                                    <polygon
                                                        points="299.33 302.49 298.99 302.29 291.01 306.9 291.35 307.1 299.33 302.49"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 295.17px 304.695px;"
                                                        id="el8rm7wjpl8ge" class="animable"></polygon>
                                                    <polygon
                                                        points="302.39 304.26 302.05 304.06 294.06 308.67 294.4 308.87 302.39 304.26"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 298.225px 306.465px;"
                                                        id="elo5xgjni7lu" class="animable"></polygon>
                                                    <polygon
                                                        points="304.55 305.55 304.21 305.35 296.23 309.96 296.56 310.16 304.55 305.55"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 300.39px 307.755px;"
                                                        id="elygguwigxcwa" class="animable"></polygon>
                                                    <polygon
                                                        points="307.59 307.24 307.25 307.04 299.26 311.65 299.6 311.85 307.59 307.24"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 303.425px 309.445px;"
                                                        id="el11l2t5mxtt9" class="animable"></polygon>
                                                    <polygon
                                                        points="289.71 296.92 289.03 296.53 281.05 301.14 281.73 301.53 289.71 296.92"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 285.38px 299.03px;"
                                                        id="el6swmqktgj1y" class="animable"></polygon>
                                                    <polygon
                                                        points="272.5 410.77 227.81 384.97 227.81 325.62 272.5 351.42 272.5 410.77"
                                                        style="fill: #C53F3F; transform-origin: 250.155px 368.195px;"
                                                        id="elz3f9cds9aw" class="animable"></polygon>
                                                    <polygon
                                                        points="272.5 410.77 227.81 384.97 227.81 325.62 272.5 351.42 272.5 410.77"
                                                        style="fill: #C53F3F; transform-origin: 250.155px 368.195px;"
                                                        id="eloam9qf6jjna" class="animable"></polygon>
                                                    <polygon
                                                        points="272.5 410.77 333.43 375.59 333.43 316.24 272.5 351.42 272.5 410.77"
                                                        style="fill: #C53F3F; transform-origin: 302.965px 363.505px;"
                                                        id="ellcpv7jr1sq" class="animable"></polygon>
                                                    <g id="el8slaz4cot09">
                                                        <polygon
                                                            points="272.5 410.77 333.43 375.59 333.43 316.24 272.5 351.42 272.5 410.77"
                                                            style="opacity: 0.1; transform-origin: 302.965px 363.505px;"
                                                            class="animable" id="elcgypxd9n09q"></polygon>
                                                    </g>
                                                    <polygon
                                                        points="304.99 341.83 299.08 345.25 299.08 336.07 304.99 332.66 304.99 341.83"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 302.035px 338.955px;"
                                                        id="elebbmtlrpdmh" class="animable"></polygon>
                                                    <polygon
                                                        points="299.08 336.07 254.4 310.27 260.31 306.86 304.99 332.66 299.08 336.07"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 279.695px 321.465px;"
                                                        id="elsxkb027ffnf" class="animable"></polygon>
                                                    <path
                                                        d="M327.79,369.88a1,1,0,0,1-.44-.11,1.36,1.36,0,0,1-.55-1.23v-3.6h0v-.26l.18,0,2.83-1.66v4a3.26,3.26,0,0,1-1.39,2.63A1.32,1.32,0,0,1,327.79,369.88Zm-.54-4.67v3.33a.92.92,0,0,0,.33.83.61.61,0,0,0,.61-.07,2.84,2.84,0,0,0,1.16-2.23v-.3h-1l-.21-1.41Zm1.45,1.11h.65v-2.49l-1.68,1,.83.15Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 328.302px 366.45px;"
                                                        id="elz2v6twwfll" class="animable"></path>
                                                    <path
                                                        d="M328.3,372.75a.22.22,0,0,1-.22-.22v-3a.23.23,0,1,1,.45,0v3A.22.22,0,0,1,328.3,372.75Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 328.305px 371.001px;"
                                                        id="elzutpe6ai91" class="animable"></path>
                                                    <path
                                                        d="M327,373.51a.23.23,0,0,1-.2-.11.23.23,0,0,1,.08-.31l2.63-1.52a.23.23,0,0,1,.31.08.22.22,0,0,1-.08.31l-2.63,1.52A.23.23,0,0,1,327,373.51Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 328.312px 372.525px;"
                                                        id="eli4li84sutp" class="animable"></path>
                                                    <path
                                                        d="M319.1,378.19a.54.54,0,0,1-.25-.06.61.61,0,0,1-.27-.55V377a.23.23,0,0,1,.23-.23.24.24,0,0,1,.23.23v.62c0,.1,0,.14,0,.15s.07,0,.15,0a1.34,1.34,0,0,0,.42-1v-4a.23.23,0,1,1,.45,0v4a1.73,1.73,0,0,1-.64,1.41A.63.63,0,0,1,319.1,378.19Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.322px 375.349px;"
                                                        id="eln67nk9zjzin" class="animable"></path>
                                                    <path
                                                        d="M316.72,374.67v-.39a6.39,6.39,0,0,1,2.89-5,1.92,1.92,0,0,1,3.13,1.8v.13ZM321,369.3a2.33,2.33,0,0,0-1.13.35,6,6,0,0,0-2.65,4.22l5.09-2.94a1.65,1.65,0,0,0-.7-1.47A1.13,1.13,0,0,0,321,369.3Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 319.745px 371.748px;"
                                                        id="eltvzrebwg8pq" class="animable"></path>
                                                    <path
                                                        d="M310,383.27a.22.22,0,0,1-.22-.22v-7.71a.23.23,0,1,1,.45,0v7.71A.22.22,0,0,1,310,383.27Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 310.005px 379.166px;"
                                                        id="elf1gavlpc76d" class="animable"></path>
                                                    <path
                                                        d="M309.33,377.09h-.09a.25.25,0,0,1-.12-.3l.81-1.86.9,1a.23.23,0,0,1-.34.3l-.43-.49-.52,1.2A.23.23,0,0,1,309.33,377.09Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 309.986px 376.01px;"
                                                        id="elbklxr5khh3" class="animable"></path>
                                                    <path
                                                        d="M312.09,382.08a.23.23,0,0,1-.23-.23v-7.71a.24.24,0,0,1,.23-.23.23.23,0,0,1,.23.23v7.71A.23.23,0,0,1,312.09,382.08Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 312.09px 377.995px;"
                                                        id="elh3jj08s4z8i" class="animable"></path>
                                                    <path
                                                        d="M311.43,375.9l-.09,0a.22.22,0,0,1-.12-.3l.81-1.86.89,1a.22.22,0,0,1,0,.32.23.23,0,0,1-.32,0l-.42-.5-.53,1.2A.21.21,0,0,1,311.43,375.9Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 312.094px 374.821px;"
                                                        id="el4otbywlc0s" class="animable"></path>
                                                    <path
                                                        d="M277.3,386.24v15.15c0,.58.41.82.91.53l23.65-13.65a2,2,0,0,0,.92-1.59V371.52c0-.58-.41-.82-.92-.52l-23.65,13.66A2,2,0,0,0,277.3,386.24Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 290.04px 386.457px;"
                                                        id="el5ufjvsdvnho" class="animable"></path>
                                                    <polygon
                                                        points="301.31 373.17 300.55 373.61 300.55 387.38 301.31 386.94 301.31 373.17"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 300.93px 380.275px;"
                                                        id="ellrx3shysp1" class="animable"></polygon>
                                                    <polygon
                                                        points="298.2 374.96 296.89 375.73 296.89 389.5 298.2 388.73 298.2 374.96"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 297.545px 382.23px;"
                                                        id="elg87537z4zgt" class="animable"></polygon>
                                                    <polygon
                                                        points="295.1 376.75 294.33 377.19 294.33 390.96 295.1 390.52 295.1 376.75"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.715px 383.855px;"
                                                        id="elrpxmxz9mztf" class="animable"></polygon>
                                                    <polygon
                                                        points="292.75 378.08 291.22 378.99 291.22 392.76 292.75 391.85 292.75 378.08"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 291.985px 385.42px;"
                                                        id="elnk4tcsdd8o" class="animable"></polygon>
                                                    <polygon
                                                        points="288.88 380.34 288.12 380.78 288.12 394.55 288.88 394.11 288.88 380.34"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 288.5px 387.445px;"
                                                        id="el2ie6tl0ragq" class="animable"></polygon>
                                                    <polygon
                                                        points="286.64 381.6 285.01 382.57 285.01 396.35 286.64 395.37 286.64 381.6"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 285.825px 388.975px;"
                                                        id="elh4wybp1dftl" class="animable"></polygon>
                                                    <polygon
                                                        points="282.66 383.93 281.9 384.37 281.9 398.14 282.66 397.7 282.66 383.93"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 282.28px 391.035px;"
                                                        id="elakp83wngk3n" class="animable"></polygon>
                                                    <polygon
                                                        points="280.89 384.94 280.51 385.16 280.51 398.93 280.89 398.71 280.89 384.94"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 280.7px 391.935px;"
                                                        id="elix1f1a2fdu" class="animable"></polygon>
                                                    <polygon
                                                        points="284.08 383.18 283.7 383.4 283.7 397.17 284.08 396.95 284.08 383.18"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 283.89px 390.175px;"
                                                        id="elcdfrtvtt7jf" class="animable"></polygon>
                                                    <polygon
                                                        points="290.34 379.51 289.96 379.73 289.96 393.5 290.34 393.28 290.34 379.51"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 290.15px 386.505px;"
                                                        id="elc1rwd5025ga" class="animable"></polygon>
                                                    <polygon
                                                        points="293.77 377.54 293.39 377.76 293.39 391.53 293.77 391.31 293.77 377.54"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 293.58px 384.535px;"
                                                        id="elaijhzced8lu" class="animable"></polygon>
                                                    <polygon
                                                        points="296.23 376.18 295.85 376.4 295.85 390.17 296.23 389.95 296.23 376.18"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 296.04px 383.175px;"
                                                        id="el1758a9ugpdt" class="animable"></polygon>
                                                    <polygon
                                                        points="299.57 374.15 299.19 374.38 299.19 388.15 299.57 387.93 299.57 374.15"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 299.38px 381.15px;"
                                                        id="elnwmy76ug2rg" class="animable"></polygon>
                                                    <polygon
                                                        points="279.55 385.72 278.79 386.16 278.79 399.93 279.55 399.49 279.55 385.72"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 279.17px 392.825px;"
                                                        id="el75nfj0sogsm" class="animable"></polygon>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="freepik--Character--inject-13" class="animable"
                                            style="transform-origin: 147.07px 223.778px;">
                                            <g id="freepik--character--inject-13" class="animable"
                                                style="transform-origin: 147.07px 223.778px;">
                                                <g id="freepik--Botom--inject-13" class="animable"
                                                    style="transform-origin: 117.083px 301.425px;">
                                                    <path
                                                        d="M137.41,362.25c.33-5.31,3.18-58.8,3.18-58.8l-26,18.34c4.54,30.57,5.54,39.79,5.73,44.89h0a4.33,4.33,0,0,0-.12,1.31c.14,6.06,7.4,9.23,13.09,13.19a106,106,0,0,0,15.35,9.2c4.12,1.89,12.4,1.95,13.38-.56-6.92-4.86-14.93-10.17-20.47-15.75C138.92,371.4,137,368.62,137.41,362.25Z"
                                                        style="fill: rgb(255, 168, 167); transform-origin: 138.305px 347.603px;"
                                                        id="el6725le7bwoy" class="animable"></path>
                                                    <path
                                                        d="M173.81,396.17c.35,0,.94,3.66-.93,5.25-2.16,1.83-8.55,4.87-17.08,3.95s-13.2-3.37-16.66-6-8.3-6.42-12.17-7.17c-3.59-.7-7.51-2.18-8.67-3.22s-1.1-5.71-1.1-5.71Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 145.691px 394.405px;"
                                                        id="elxjmyfc6yhq" class="animable"></path>
                                                    <path
                                                        d="M120.26,365.2a1.35,1.35,0,0,0-1.27,1.11c-.24,1.3-.45,5.05-1,7.17-.73,2.95-1.14,9-.63,11.37s6.38,4,10.14,5.26a48.19,48.19,0,0,1,12.21,7.08c4.06,3.08,12.54,6.11,18.09,6.1,8.47,0,13.92-2.26,15.56-5.18,2-3.61.35-5.66-9.47-9.81-1.86-.79-8.4-4.34-10.64-5.63-6-3.48-12-8.37-14.91-14.65a3.53,3.53,0,0,0-1.43-1.92A3.23,3.23,0,0,0,135,366a16.75,16.75,0,0,0-4.66,1.41c-1.3.61-3.14,1.32-3.08,2.91a5.14,5.14,0,0,0,.4,1.62c.12.32.22.75-.07.95s-.66,0-.92-.23a25.94,25.94,0,0,1-2.68-3,9.12,9.12,0,0,0-1.57-1.47,18.78,18.78,0,0,1-1.69-1C120.17,366.64,120.3,366,120.26,365.2Z"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 145.62px 384.245px;"
                                                        id="eljyonl11na6r" class="animable"></path>
                                                    <path
                                                        d="M165.5,389c-12.25,1-16,8.24-16.41,12.7a29.94,29.94,0,0,0,8.74,1.61c8.47,0,14.27-2.26,15.91-5.18C175.65,394.7,174.26,392,165.5,389Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 161.79px 396.155px;"
                                                        id="elkn6tbvbcz9" class="animable"></path>
                                                    <path
                                                        d="M147.11,389.36a.68.68,0,0,1-.38-.12.56.56,0,0,1-.1-.8,14.79,14.79,0,0,1,11-4.32.58.58,0,0,1,.54.62.59.59,0,0,1-.65.52,13.67,13.67,0,0,0-10,3.89A.57.57,0,0,1,147.11,389.36Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 152.339px 386.735px;"
                                                        id="eljq1vf29nvg" class="animable"></path>
                                                    <path
                                                        d="M141.78,386.51a.64.64,0,0,1-.38-.12.54.54,0,0,1-.1-.8,14.69,14.69,0,0,1,11-4.32.58.58,0,0,1,.54.62.6.6,0,0,1-.65.52,13.58,13.58,0,0,0-10,3.89A.64.64,0,0,1,141.78,386.51Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 147.004px 383.884px;"
                                                        id="elug9de0vlhct" class="animable"></path>
                                                    <path
                                                        d="M136.82,383.24a.66.66,0,0,1-.38-.12.55.55,0,0,1-.1-.8,14.73,14.73,0,0,1,11-4.32.57.57,0,1,1-.11,1.13,13.68,13.68,0,0,0-10,3.89A.61.61,0,0,1,136.82,383.24Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 142.059px 380.615px;"
                                                        id="elnx6b7bppplo" class="animable"></path>
                                                    <path
                                                        d="M132,380a.56.56,0,0,1-.37-.11.55.55,0,0,1-.12-.8c2.3-2.86,7.57-4.79,12-4.39a.58.58,0,0,1,.54.62.59.59,0,0,1-.65.51c-4-.35-8.94,1.42-11,3.95A.59.59,0,0,1,132,380Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 137.72px 377.324px;"
                                                        id="el718wtv5rm1n" class="animable"></path>
                                                    <path
                                                        d="M94.58,319.21l-27.1-5.86c-.71,16.77-.28,39.47-.85,55.21-.11,3-1.65,23-.79,29.14,1.28,9.24,13.67,8.64,14.69,3.2s1.92-28.69,2.13-31.1c.57-10.09,6.33-27,10.36-45C93.22,323.93,94.39,320.07,94.58,319.21Z"
                                                        style="fill: rgb(255, 168, 167); transform-origin: 80.08px 359.099px;"
                                                        id="elme9mqzx0p3" class="animable"></path>
                                                    <path
                                                        d="M84.91,405c-.11,5.39-.89,9-2.91,12.22s-6,4.37-10.22,3.6-9.58-3-11-7.63-1.3-7.78-.59-12.8Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 72.2932px 410.72px;"
                                                        id="eln0wd1bqyva" class="animable"></path>
                                                    <path
                                                        d="M66.69,366.63c-1.7.19-1.87,7.42-2.52,14.68-.7,7.79-3.17,11.09-3.82,17.47-.74,7.3-.16,10.53,2.92,14.81s13.49,8.2,18.23,1.73c3.86-5.27,3.77-11,3.07-18.19-.74-7.48-1.32-12.73-1.23-18.43.08-5.44,1-10.51-.49-11.06-.07.8-.14,1.82-.22,2.6-.07.61-.1,3.56-1,3.62a10,10,0,0,1-.12-2.05,2.22,2.22,0,0,0-.54-1.73,6.59,6.59,0,0,0-2.68-.89c-1.69-.23-3.39-.43-5.1-.5-.85,0-1.7,0-2.55,0a7.8,7.8,0,0,0-2.15.35,1.44,1.44,0,0,0-.88.77,2,2,0,0,0,0,.84,5.35,5.35,0,0,1-.15,1.49c0,.22-.21.49-.45.44s-.29-.25-.3-.42c0-.88,0-1.52,0-2.54,0-.47.06-1.12,0-1.59S66.67,367.1,66.69,366.63Z"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 72.5033px 392.688px;"
                                                        id="elpt5f2oqepzr" class="animable"></path>
                                                    <path
                                                        d="M60.07,403c-.09,4.51.34,7.59,2.76,10.94,3.08,4.28,14.31,8.19,19,1.72,2.36-3.22,2.86-6.94,3-10.73C81.67,400.21,64.63,398.71,60.07,403Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 72.4446px 409.777px;"
                                                        id="elt598wee1xai" class="animable"></path>
                                                    <path
                                                        d="M80.18,397.22a.8.8,0,0,1-.21-.05,28.06,28.06,0,0,0-14.75-.79.64.64,0,0,1-.77-.39.54.54,0,0,1,.44-.68,28.82,28.82,0,0,1,15.58.84.53.53,0,0,1,.33.73A.66.66,0,0,1,80.18,397.22Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 72.6393px 395.918px;"
                                                        id="elbzx86tvnfpr" class="animable"></path>
                                                    <path
                                                        d="M65.39,391a.62.62,0,0,1-.55-.36.53.53,0,0,1,.36-.72c7.53-2.56,15.22.58,15.55.72a.53.53,0,0,1,.3.74.67.67,0,0,1-.84.26c-.08,0-7.55-3.07-14.56-.68A.75.75,0,0,1,65.39,391Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 72.9527px 390.308px;"
                                                        id="elv66xzwg64qb" class="animable"></path>
                                                    <path
                                                        d="M65.59,385.84a.65.65,0,0,1-.55-.34.55.55,0,0,1,.35-.73,21.92,21.92,0,0,1,15.86.66.52.52,0,0,1,.25.76.68.68,0,0,1-.86.22,20.84,20.84,0,0,0-14.77-.61A.55.55,0,0,1,65.59,385.84Z"
                                                        style="fill: rgb(240, 240, 240); transform-origin: 73.2901px 385.038px;"
                                                        id="elhvk7pep5e1" class="animable"></path>
                                                    <path
                                                        d="M65.85,380.09a.63.63,0,0,1-.55-.33.54.54,0,0,1,.34-.73c7.74-2.89,15.65.65,16,.81a.52.52,0,0,1,.26.75.68.68,0,0,1-.85.24c-.08,0-7.71-3.46-14.9-.78A.55.55,0,0,1,65.85,380.09Z"
                                                        style="fill: rgb(235, 235, 235); transform-origin: 73.6144px 379.396px;"
                                                        id="elbuyc2zzofwk" class="animable"></path>
                                                    <path
                                                        d="M78.86,181.8c-.64,30.52-6.09,98.31-6.09,98.31-.46,3.75-5.89,19.69-6.09,33.25-.31,21.27-.77,37.38-.77,37.38s11.89,4.71,20.62,1.45c0,0,11.35-45.22,14.54-59.33,3.79-16.81,13.25-48.06,13.25-48.06l-.69,44.42a122.09,122.09,0,0,0-.35,26.86c1,9,4.64,33.91,4.64,33.91s10.94,2.21,20.42-.6c0,0,5.71-53.58,6.18-61.82.54-9.4,3.44-103.94,3.44-103.94Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 106.935px 267.57px;"
                                                        id="elnovnzb6ds1" class="animable"></path>
                                                    <path
                                                        d="M114.32,244.8l4.25-28.32s10.37-.41,17.48-7.07c0,0-.89,6.65-13.86,10.65l-4.91,23.88-3.8,44.45Z"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 124.765px 248.9px;"
                                                        id="eloiuqr93gtal" class="animable"></path>
                                                </g>
                                                <g id="freepik--Top--inject-13" class="animable"
                                                    style="transform-origin: 147.07px 127.046px;">
                                                    <path
                                                        d="M132.83,92.82c5.51-.29,15.77-.64,23.15,8.44,5.18,6.38,19.31,21.73,27.32,31.87,5.37-5.59,18.38-19.13,20.52-23.09a62.54,62.54,0,0,0,4.86-11.65,41.36,41.36,0,0,0,1.71-7.27,39.63,39.63,0,0,0,.15-9.11c-.06-2.75,4-1.34,5.6,3a23.86,23.86,0,0,1,1.19,7.48c1.52-.72,5.93-2.89,6.61-3.2,2.4-1.12,10-3.79,10.74.5.17,1-.14,2,.28,2.89a6.42,6.42,0,0,0,.84,1.12,4.9,4.9,0,0,1,.59,5,3.9,3.9,0,0,0-.41,2.28,6.23,6.23,0,0,1,.1,2.47,9.81,9.81,0,0,1-1,1.77,7.57,7.57,0,0,0-.66,2.53,9.71,9.71,0,0,1-.58,2.56c-.84,1.9-3.14,2.34-4.91,3A84.05,84.05,0,0,0,221,116.5c-4.24,2.8-15.69,23.5-27.28,36.76-4,4.55-7.53,7.39-11.3,6.9l0,0c-3.05-.07-6.82-2.83-10.45-6-11.55-10-30.1-29.58-30.1-29.58C134.13,115.19,132,99.12,132.83,92.82Z"
                                                        style="fill: rgb(255, 168, 167); transform-origin: 184.741px 120.407px;"
                                                        id="elwaiggen2yhm" class="animable"></path>
                                                    <path
                                                        d="M138,91.28c3.66.57,6.18.46,10.84,3.11,4.1,2.32,5.57,4.29,10.32,9.6s16.1,19.11,16.1,19.11-4.83,11.55-19.79,15.74l-16.56-16.06Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 156.63px 115.06px;"
                                                        id="elqgeaqmlr3a" class="animable"></path>
                                                    <path
                                                        d="M220.4,92.93c-2.36.83-3,2.43-2.78,5.85.1,2-.38,5.8-2.54,7.38a5.24,5.24,0,0,0,2.84-1.34c1-1.11,1.29-1.24,1.88-.64a3.82,3.82,0,0,0,1.56.82,2.65,2.65,0,0,0-.15,3.15c1.12,1.73,5.88,1.61,9.71-.53,0,0-6.26,2.17-7.79.21s1.74-4.59,4.21-5.35c0,0-6.06,1.65-7.06-.33s1.48-3.57,5-4.6c0,0-5,1.08-5.94-.61C218.27,94.89,219.76,93.63,220.4,92.93Z"
                                                        style="fill: rgb(242, 143, 143); transform-origin: 223px 101.138px;"
                                                        id="elaqyhuf1pjhl" class="animable"></path>
                                                    <path
                                                        d="M81.75,94.41s-5.87,5.16-7.37,10.74c-.74,2.74-1.41,5,.91,20.25,2.21,14.53,2.2,18.88,2.71,30.2L78.57,186c8.7,10.18,50.87,15.72,71.17,2,0,0,.12-52.62-1.32-70-1-11.78-4.58-22.84-8.64-26.46-5.51-1-10.82-1.6-10.82-1.6l-20.3-1.18Z"
                                                        style="fill: #C53F3F; transform-origin: 111.714px 142.469px;"
                                                        id="eldj6y21dc90a" class="animable"></path>
                                                    <g id="freepik--Head--inject-13" class="animable"
                                                        style="transform-origin: 114.912px 67.3026px;">
                                                        <path
                                                            d="M139.17,52.22c2.71-6.2.06-14.43-3.17-18.29-4.67-5.58-11.94-8-22.9-7.31-8.33.52-16.53,4-18.09,12.53-6.7,2-5.93,13-4.27,17.85,3.38,9.84,10,18.41,10.14,23.45Z"
                                                            style="fill: rgb(55, 71, 79); transform-origin: 114.943px 53.4776px;"
                                                            id="elrppnytzi3m" class="animable"></path>
                                                        <path
                                                            d="M139.17,75.38c-1.32,4.75-4.07,8.24-8.47,8.93a37.13,37.13,0,0,1-6.94,0l.18,6.06c5.91,5.06,3.74,11.71-.2,17.7-4.91-5.45-10.52-7.39-15.42-9.55a15.72,15.72,0,0,1-7.14-6.92l-.63-20.44s-2.69,3.06-7.12.17a9.67,9.67,0,0,1-3-11.85c2.19-4.63,6.59-2.72,8-1.31s2.93,4.06,4.06,3.69a4.11,4.11,0,0,0,2.73-2.78,25,25,0,0,0,1.43-9A12.08,12.08,0,0,0,110,47.46a11.1,11.1,0,0,0,3-6.88c9.5-3,20.43-1.57,24.38,1.49,2.27,4,2.35,13.3,2.73,18.66C140.53,66.55,140.27,71.41,139.17,75.38Z"
                                                            style="fill: rgb(255, 168, 167); transform-origin: 114.912px 73.4976px;"
                                                            id="elje9vit0fr7n" class="animable"></path>
                                                        <path
                                                            d="M123.76,84.34c-4.86-.27-14.64-2.54-17.24-5.26s-3.71-8.26-3.71-8.26.39,7,2.4,10.1,7.1,4.45,10.19,5.21a76.27,76.27,0,0,0,8.45,1.29Z"
                                                            style="fill: rgb(242, 143, 143); transform-origin: 113.33px 79.12px;"
                                                            id="elut4zz1i78f" class="animable"></path>
                                                        <path
                                                            d="M123.73,108.1c-2.54-1.56-8.15-7.93-11-5s-4.29,3.78-6.13,3.23-5.92-4.57-8.58-7.51a17.06,17.06,0,0,1-3.5-7.16,48.72,48.72,0,0,0,3.75-5.22c1.26-2.24,1-2.87,2.61-3l.14,4.23s1,2.31,5.6,5.43S120.45,100.91,123.73,108.1Z"
                                                            style="fill: rgb(69, 90, 100); transform-origin: 109.125px 95.77px;"
                                                            id="elb7s1n5cf8o" class="animable"></path>
                                                        <path
                                                            d="M123.73,108.1c1.52-1.38,4-7.83,4.64-7.64,1,.28,2.71,4.73,3.55,3.69,1.33-1.64.92-9.12-1.29-11.84s-5.15-5.62-6.81-5.9l.12,4a16.11,16.11,0,0,1,1.64,6.44C125.56,99.1,124.05,105.93,123.73,108.1Z"
                                                            style="fill: rgb(69, 90, 100); transform-origin: 128.205px 97.255px;"
                                                            id="elpk550vyb3i8" class="animable"></path>
                                                        <path d="M120.69,57.62a2,2,0,1,1-2-2A2,2,0,0,1,120.69,57.62Z"
                                                            style="fill: rgb(38, 50, 56); transform-origin: 118.69px 57.62px;"
                                                            id="elyttjr7y9me7" class="animable"></path>
                                                        <path
                                                            d="M117.94,51.34,114,54a2.51,2.51,0,0,1,.67-3.42A2.35,2.35,0,0,1,117.94,51.34Z"
                                                            style="fill: rgb(38, 50, 56); transform-origin: 115.769px 52.106px;"
                                                            id="elj0e3y6azu1" class="animable"></path>
                                                        <path
                                                            d="M137,53.18l-4.37-2.09a2.33,2.33,0,0,1,3.16-1.19A2.53,2.53,0,0,1,137,53.18Z"
                                                            style="fill: rgb(38, 50, 56); transform-origin: 134.92px 51.4239px;"
                                                            id="elxwkygl51jjh" class="animable"></path>
                                                        <path d="M135.54,57.5a2,2,0,1,1-2-2A2,2,0,0,1,135.54,57.5Z"
                                                            style="fill: rgb(38, 50, 56); transform-origin: 133.54px 57.5px;"
                                                            id="elujw9hiky4li" class="animable"></path>
                                                        <polygon points="125.2 53.4 126.62 67.53 134.21 65.24 125.2 53.4"
                                                            style="fill: rgb(242, 143, 143); transform-origin: 129.705px 60.465px;"
                                                            id="elzh80pv5kbpn" class="animable"></polygon>
                                                        <path
                                                            d="M120.68,70.82l8.13,1.8a4.09,4.09,0,0,1-4.88,3.3A4.35,4.35,0,0,1,120.68,70.82Z"
                                                            style="fill: rgb(177, 102, 104); transform-origin: 124.701px 73.4147px;"
                                                            id="elqjq5byuebf" class="animable"></path>
                                                        <path
                                                            d="M123.93,75.92a3,3,0,0,0,.51.06,3.78,3.78,0,0,0-3.78-3.69A4.3,4.3,0,0,0,123.93,75.92Z"
                                                            style="fill: rgb(242, 143, 143); transform-origin: 122.55px 74.135px;"
                                                            id="elwmh4p1fbedr" class="animable"></path>
                                                    </g>
                                                    <polygon
                                                        points="189.56 139.52 136.41 149.92 116.79 213.79 167.42 202.56 189.56 139.52"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 153.175px 176.655px;"
                                                        id="elayu4k8epqpg" class="animable"></polygon>
                                                    <g id="elmanoibc9pk">
                                                        <path
                                                            d="M145.24,187.6a12.24,12.24,0,0,1-8.61,8.87c-7,1.84-14.26-.84-14.26-.84l1.64-5.34Z"
                                                            style="opacity: 0.15; transform-origin: 133.805px 192.358px;"
                                                            class="animable" id="elfco1ctk3i2"></path>
                                                    </g>
                                                    <g id="el0ldptkmch2ja">
                                                        <path
                                                            d="M173.65,147.93l.56-2c.31-1.08-2.75-1.33-6.84-.54l-7.83,1.5c-4.09.78-7.66,2.3-8,3.38l-.56,2Z"
                                                            style="opacity: 0.15; transform-origin: 162.606px 148.599px;"
                                                            class="animable" id="eldket6wujrv"></path>
                                                    </g>
                                                    <path
                                                        d="M177.76,140.64c.2-.67-1-.94-2.75-.58l-3.1.65s1.19-4.26-5.68-3.19-8.66,5.88-8.66,5.88l-3.31.71c-1.83.4-3.53,1.26-3.78,1.93l-.47,1.22,27.38-5.36S177.57,141.32,177.76,140.64Z"
                                                        style="fill: #C53F3F; transform-origin: 163.896px 142.304px;"
                                                        id="elgfia7kaeq6t" class="animable"></path>
                                                    <g id="el2ruuuaqesu5">
                                                        <path
                                                            d="M177.76,140.64c.2-.67-1-.94-2.75-.58l-3.1.65s1.19-4.26-5.68-3.19-8.66,5.88-8.66,5.88l-3.31.71c-1.83.4-3.53,1.26-3.78,1.93l-.47,1.22,27.38-5.36S177.57,141.32,177.76,140.64Z"
                                                            style="opacity: 0.3; transform-origin: 163.896px 142.304px;"
                                                            class="animable" id="elzjy3bncyic8"></path>
                                                    </g>
                                                    <path
                                                        d="M151.89,150.51c.26-.9,2.77-2.1,6-2.92,0-.12.06-.23.09-.32.24-1-.13-1.55-2.06-1.17l-.11-.77,19-3.55-.83.78c-2.51.43-3.56.7-4,2.37l-.11.38c3-.34,5,0,4.75.86l-.56,2-22.64,4.34Z"
                                                        style="fill: #C53F3F; transform-origin: 163.115px 147.145px;"
                                                        id="elt1m7qo7w9bp" class="animable"></path>
                                                    <g id="elnmv2tm0a5sq">
                                                        <path
                                                            d="M151.89,150.51c.26-.9,2.77-2.1,6-2.92,0-.12.06-.23.09-.32.24-1-.13-1.55-2.06-1.17l-.11-.77,19-3.55-.83.78c-2.51.43-3.56.7-4,2.37l-.11.38c3-.34,5,0,4.75.86l-.56,2-22.64,4.34Z"
                                                            style="opacity: 0.4; transform-origin: 163.115px 147.145px;"
                                                            class="animable" id="el13pykzi9571"></path>
                                                    </g>
                                                    <path
                                                        d="M128.2,176.66c6.5,2.18,13,2.34,19.76,2.33,1.65,0,2.9.25,3.39,1.82.17.56.4,1.33-1.73,2a3,3,0,0,0-1.66.86c-.49.78-.25,1.56-.38,2.47a6.91,6.91,0,0,1-2,3.45,16.19,16.19,0,0,1-3.34,3.12c-4.12,2.59-10.47,2.91-15.16,2.15a50.92,50.92,0,0,1-9.35-2.76c-2.87-1.06-20.3-6.2-22.37-6.92-15.39-5.37-36.55-12-37.8-19.25s2.67-30,5.47-48.54c2.26-15,8.33-20.3,18.16-22.35,10.78,12.24,4,33.45,4,33.45l-3.92,28.26c1.66,1.38,26.84,15.51,31.19,16.92,1.57.51,4.53-.11,6.1-.65,4.2-1.43,7.09-1.31,11.16-1.13"
                                                        style="fill: rgb(255, 168, 167); transform-origin: 104.387px 145.13px;"
                                                        id="el1xvvfqps1dd" class="animable"></path>
                                                    <path
                                                        d="M81.75,94.41C71.3,95.84,65.12,101.19,63,111.31c-1.77,8.5-5.06,35.95-5.06,35.95,6.94,6.12,18.33,5.79,24.5,3.65l3.18-22C88.19,123.22,92.21,106.39,81.75,94.41Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 73.2557px 123.361px;"
                                                        id="eldu05wimjwrv" class="animable"></path>
                                                    <path
                                                        d="M75,183.58l-5.27,2.92a2.56,2.56,0,0,0-1.2,2c-.13,4.72-.51,20.95.24,29.84a2.87,2.87,0,0,0,1.28,2c3,1.69,11.14,6.15,14.87,7.18a4.62,4.62,0,0,0,2.54-.28l3.76-1.5a2.14,2.14,0,0,0,1.22-1.83c0-9.43,1.67-19.81,3.23-30.09a1.91,1.91,0,0,0-1-1.89L77.4,183.52A2.9,2.9,0,0,0,75,183.58Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 81.9995px 205.438px;"
                                                        id="el7821szfvddr" class="animable"></path>
                                                    <path
                                                        d="M68.81,218.31c-.75-8.89-.37-25.11-.24-29.84a.78.78,0,0,1,1.23-.74l16.11,8A2.1,2.1,0,0,1,87,197.65a253.39,253.39,0,0,0-.79,28.7A1,1,0,0,1,85,227.46c-3.73-1-11.85-5.49-14.87-7.18A2.87,2.87,0,0,1,68.81,218.31Z"
                                                        style="fill: rgb(55, 71, 79); transform-origin: 77.6797px 207.533px;"
                                                        id="elw1q8s0jaqo" class="animable"></path>
                                                    <path
                                                        d="M85.16,227.49a4.74,4.74,0,0,0,2.34-.31l3.76-1.51a2.18,2.18,0,0,0,1.21-1.82c.74-9.69,1.67-19.81,3.24-30.09a1.65,1.65,0,0,0-.19-1l-8.72,4a1.85,1.85,0,0,1,.19.94,248.77,248.77,0,0,0-.79,28.71A1,1,0,0,1,85.16,227.49Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 90.4415px 210.142px;"
                                                        id="el68xpskmrnum" class="animable"></path>
                                                    <path
                                                        d="M71.7,191.82l11.83,5.72-.62,9.64L71.37,202.1S71.45,195.9,71.7,191.82Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 77.45px 199.5px;"
                                                        id="elf9r2ik0zpz" class="animable"></path>
                                                    <path d="M83,206.44,72,201.63s.07-5.47.29-9.51l11.21,5.42Z"
                                                        style="fill: #C53F3F; transform-origin: 77.75px 199.28px;"
                                                        id="eltr9979vkpy" class="animable"></path>
                                                    <g id="elgy679fl5u75">
                                                        <path d="M83,206.44,72,201.63s.07-5.47.29-9.51l11.21,5.42Z"
                                                            style="opacity: 0.4; transform-origin: 77.75px 199.28px;"
                                                            class="animable" id="elqrnwgvz6snl"></path>
                                                    </g>
                                                    <polygon
                                                        points="88.5 191.21 85.56 192.62 74.96 187.43 77.82 185.99 88.5 191.21"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 81.73px 189.305px;"
                                                        id="elrlwwx3wkc4j" class="animable"></polygon>
                                                    <polygon
                                                        points="88.06 191.42 85.56 192.62 75.41 187.64 77.83 186.42 88.06 191.42"
                                                        style="fill: #C53F3F; transform-origin: 81.735px 189.52px;"
                                                        id="elb6ih5l1a5c" class="animable"></polygon>
                                                    <g id="elk3081j8tuj">
                                                        <polygon
                                                            points="88.06 191.42 85.56 192.62 75.41 187.64 77.83 186.42 88.06 191.42"
                                                            style="opacity: 0.4; transform-origin: 81.735px 189.52px;"
                                                            class="animable" id="elt2l8bmqwp9"></polygon>
                                                    </g>
                                                    <g id="el5ofbsp3f7uc">
                                                        <polygon
                                                            points="86.55 190.68 84.03 191.86 83.71 191.71 86.22 190.52 86.55 190.68"
                                                            style="opacity: 0.4; transform-origin: 85.13px 191.19px;"
                                                            class="animable" id="el5p3jo0wmlne"></polygon>
                                                    </g>
                                                    <g id="elkkk3c3raxvt">
                                                        <polygon
                                                            points="84.29 189.57 81.8 190.77 81.43 190.59 83.95 189.41 84.29 189.57"
                                                            style="opacity: 0.4; transform-origin: 82.86px 190.09px;"
                                                            class="animable" id="elmvg1ph4pvdh"></polygon>
                                                    </g>
                                                    <g id="el5e41v19euwl">
                                                        <polygon
                                                            points="82.04 188.48 79.53 189.66 79.21 189.51 81.71 188.32 82.04 188.48"
                                                            style="opacity: 0.4; transform-origin: 80.625px 188.99px;"
                                                            class="animable" id="el22ylvkie2dm"></polygon>
                                                    </g>
                                                    <g id="elj897c4wz1w">
                                                        <polygon
                                                            points="79.99 187.48 77.48 188.66 77.16 188.5 79.66 187.31 79.99 187.48"
                                                            style="opacity: 0.4; transform-origin: 78.575px 187.985px;"
                                                            class="animable" id="elceji43biumg"></polygon>
                                                    </g>
                                                    <path
                                                        d="M83.42,210.47l-.09,1.18a.45.45,0,0,1-.66.41l-2.14-.87a1,1,0,0,1-.57-.92l.07-1.22a.44.44,0,0,1,.65-.4l2.17.9A1,1,0,0,1,83.42,210.47Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 81.69px 210.354px;"
                                                        id="ellfc34jfm79" class="animable"></path>
                                                    <path
                                                        d="M83.44,214.34l-.07,1.19a.45.45,0,0,1-.65.42l-2.15-.85a1,1,0,0,1-.59-.9L80,213a.44.44,0,0,1,.64-.42l2.19.87A1,1,0,0,1,83.44,214.34Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 81.71px 214.264px;"
                                                        id="eljapmeeh738" class="animable"></path>
                                                    <path
                                                        d="M83.46,218.21l0,1.19a.45.45,0,0,1-.65.43L80.6,219a1,1,0,0,1-.6-.9l0-1.22a.44.44,0,0,1,.64-.42l2.19.83A1,1,0,0,1,83.46,218.21Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 81.7299px 218.144px;"
                                                        id="eld9si9hqb0pa" class="animable"></path>
                                                    <path
                                                        d="M83.48,222.08l0,1.19a.45.45,0,0,1-.64.44l-2.18-.78a1,1,0,0,1-.62-.88l0-1.22a.44.44,0,0,1,.63-.44l2.21.8A1,1,0,0,1,83.48,222.08Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 81.7595px 222.049px;"
                                                        id="els8a5yc0rxu" class="animable"></path>
                                                    <path
                                                        d="M78.63,208.28l-.07,1.24a.43.43,0,0,1-.64.41l-2.13-.88a1,1,0,0,1-.59-.92l.06-1.27a.42.42,0,0,1,.63-.4l2.16.9A1,1,0,0,1,78.63,208.28Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 76.915px 208.194px;"
                                                        id="el2w9ei4b3j4c" class="animable"></path>
                                                    <path
                                                        d="M78.61,212.13l-.06,1.23a.44.44,0,0,1-.64.42l-2.13-.87a1,1,0,0,1-.59-.92l0-1.27a.43.43,0,0,1,.64-.4l2.16.89A1,1,0,0,1,78.61,212.13Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 76.8996px 212.047px;"
                                                        id="els5i6onpgz1" class="animable"></path>
                                                    <path
                                                        d="M78.59,216l0,1.24a.43.43,0,0,1-.64.41l-2.14-.86a1,1,0,0,1-.59-.91l0-1.27a.43.43,0,0,1,.63-.41l2.17.89A1,1,0,0,1,78.59,216Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 76.9052px 215.928px;"
                                                        id="elqxuc4guj8bm" class="animable"></path>
                                                    <path
                                                        d="M78.58,219.81l0,1.24a.44.44,0,0,1-.64.42l-2.14-.85a1,1,0,0,1-.6-.91l0-1.27a.43.43,0,0,1,.63-.41l2.17.87A1,1,0,0,1,78.58,219.81Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 76.8899px 219.749px;"
                                                        id="el03no1eu3nhex" class="animable"></path>
                                                    <path
                                                        d="M73.83,206.1l0,1.29a.42.42,0,0,1-.63.4l-2.11-.88a1,1,0,0,1-.6-.92l0-1.32a.42.42,0,0,1,.62-.4l2.15.9A1,1,0,0,1,73.83,206.1Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 72.1602px 206.033px;"
                                                        id="elvhc1awc3rpb" class="animable"></path>
                                                    <path
                                                        d="M73.85,209.84l0,1.29a.42.42,0,0,1-.63.4l-2.11-.88a1,1,0,0,1-.6-.92l0-1.32a.42.42,0,0,1,.63-.4l2.14.9A1.06,1.06,0,0,1,73.85,209.84Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 72.18px 209.77px;"
                                                        id="elazzkxvko7bi" class="animable"></path>
                                                    <path
                                                        d="M73.86,213.57l0,1.29a.43.43,0,0,1-.64.41l-2.11-.88a1,1,0,0,1-.59-.92l0-1.32a.41.41,0,0,1,.62-.4l2.14.9A1.05,1.05,0,0,1,73.86,213.57Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 72.1892px 213.508px;"
                                                        id="el9ydclx6krdb" class="animable"></path>
                                                    <path
                                                        d="M73.87,217.31l0,1.29a.42.42,0,0,1-.63.41l-2.11-.88a1,1,0,0,1-.6-.92l0-1.32a.42.42,0,0,1,.63-.4l2.14.9A1,1,0,0,1,73.87,217.31Z"
                                                        style="fill: rgb(38, 50, 56); transform-origin: 72.2006px 217.25px;"
                                                        id="el40i21db4o9i" class="animable"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="freepik--speech-bubble--inject-13" class="animable animator-active"
                                            style="transform-origin: 283.315px 64.8302px;">
                                            <g id="freepik--speech-bubble--inject-13" class="animable"
                                                style="transform-origin: 283.315px 64.8302px;">
                                                <g id="freepik--speech-bubble--inject-13" class="animable"
                                                    style="transform-origin: 283.315px 64.8302px;">
                                                    <path
                                                        d="M288,89.08l-12.37,7.17,4.91,11a1.14,1.14,0,0,0,.47.52l4.25,2.46a1.14,1.14,0,0,0,1.66-.66l5.33-18.07Z"
                                                        style="fill: #C53F3F; transform-origin: 283.94px 99.7309px;"
                                                        id="elclr0gnstqfs" class="animable"></path>
                                                    <g id="elxhmomy35fb">
                                                        <path
                                                            d="M288,89.08l-12.37,7.17,4.91,11a1.14,1.14,0,0,0,.47.52l4.25,2.46a1.14,1.14,0,0,0,1.66-.66l5.33-18.07Z"
                                                            style="opacity: 0.15; transform-origin: 283.94px 99.7309px;"
                                                            class="animable" id="el5u7bk5jmu52"></path>
                                                    </g>
                                                    <path d="M279.92,98.7l4.91,11a1.13,1.13,0,0,0,2.12-.14l5.33-18.07Z"
                                                        style="fill: #C53F3F; transform-origin: 286.1px 100.933px;"
                                                        id="eliwe46qxoax7" class="animable"></path>
                                                    <path
                                                        d="M303.6,19.52,257,46.45a2.36,2.36,0,0,0-1.07,1.85v57.88A2.35,2.35,0,0,0,257,108l3.84,2.15a2.39,2.39,0,0,0,2.15,0l46.63-26.93a2.34,2.34,0,0,0,1.07-1.85V23.5a2.35,2.35,0,0,0-1.07-1.84l-3.84-2.15A2.4,2.4,0,0,0,303.6,19.52Z"
                                                        style="fill: #C53F3F; transform-origin: 283.31px 64.8293px;"
                                                        id="elwb0epu2h03d" class="animable"></path>
                                                    <g id="el275izhin1tf">
                                                        <path
                                                            d="M310.64,23.31c-.08-.54-.52-.73-1.06-.42L263,49.81a2.17,2.17,0,0,0-.76.8l-6-3.4a2.16,2.16,0,0,1,.74-.76L303.6,19.52a2.37,2.37,0,0,1,2.14,0l3.84,2.15A2.34,2.34,0,0,1,310.64,23.31Z"
                                                            style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 283.44px 34.9374px;"
                                                            class="animable" id="el8j6j2qhqsvn"></path>
                                                    </g>
                                                    <path
                                                        d="M261.88,109.54V51.67A2.34,2.34,0,0,1,263,49.81l46.63-26.92c.6-.34,1.07-.07,1.07.61V81.38a2.34,2.34,0,0,1-1.07,1.85L263,110.16C262.35,110.5,261.88,110.22,261.88,109.54Z"
                                                        style="fill: #C53F3F; transform-origin: 286.29px 66.524px;"
                                                        id="el66yfuuhivzy" class="animable"></path>
                                                    <g id="elp2kpu140wqb">
                                                        <path
                                                            d="M263,110.16a2.46,2.46,0,0,1-2.15,0L257,108a2.33,2.33,0,0,1-1.07-1.84V48.3a2.14,2.14,0,0,1,.34-1.09l6,3.4a2.11,2.11,0,0,0-.32,1.06v57.87C261.88,110.16,262.32,110.52,263,110.16Z"
                                                            style="opacity: 0.15; transform-origin: 259.465px 78.8087px;"
                                                            class="animable" id="elsmscazar0br"></path>
                                                    </g>
                                                </g>
                                                <g id="freepik--check-list--inject-13" class="animable"
                                                    style="transform-origin: 286.495px 68.158px;">
                                                    <path
                                                        d="M266.87,67.78a.53.53,0,0,1-.54-.53V57.17a.52.52,0,0,1,.27-.46l8.73-5a.51.51,0,0,1,.53,0,.52.52,0,0,1,.27.46V62.21a.53.53,0,0,1-.26.46l-8.73,5A.54.54,0,0,1,266.87,67.78Zm.54-10.3v8.84l7.65-4.42V53.06Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 271.23px 59.7079px;"
                                                        id="elxzefkf6p18j" class="animable"></path>
                                                    <path id="freepik--Check--inject-13"
                                                        d="M276.62,49.61a1.06,1.06,0,0,0-1.39.56l-4,9.52-1-.93a1.06,1.06,0,1,0-1.48,1.52l2.07,2a1.07,1.07,0,0,0,.74.3l.21,0a1.06,1.06,0,0,0,.76-.63L277.18,51A1,1,0,0,0,276.62,49.61Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.857px 56.0527px;"
                                                        class="animable"></path>
                                                    <path
                                                        d="M283,51.37l22.26-12.85c.77-.45,1.4-.13,1.4.71a3,3,0,0,1-1.4,2.33L283,54.41c-.77.44-1.39.12-1.39-.72A3,3,0,0,1,283,51.37Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.135px 46.4617px;"
                                                        id="el5v371clzh8a" class="animable"></path>
                                                    <path
                                                        d="M266.87,82.9a.5.5,0,0,1-.27-.07.55.55,0,0,1-.27-.47V72.29a.53.53,0,0,1,.27-.47l8.73-5a.55.55,0,0,1,.53,0,.55.55,0,0,1,.27.47V77.32a.53.53,0,0,1-.27.47l-8.72,5A.54.54,0,0,1,266.87,82.9Zm.53-10.3v8.83L275.06,77V68.18Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 271.23px 74.8261px;"
                                                        id="elkmipf4s7rgf" class="animable"></path>
                                                    <path id="freepik--check--inject-13"
                                                        d="M276.62,64.72a1.07,1.07,0,0,0-1.39.57l-4,9.52-1-.93a1.06,1.06,0,0,0-1.5,0,1.08,1.08,0,0,0,0,1.5l2.07,2a1,1,0,0,0,.74.3.75.75,0,0,0,.21,0,1,1,0,0,0,.76-.62l4.6-11A1.06,1.06,0,0,0,276.62,64.72Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.808px 71.1637px;"
                                                        class="animable"></path>
                                                    <path
                                                        d="M283,66.44l22.26-12.85c.77-.45,1.4-.13,1.4.71a3,3,0,0,1-1.4,2.32L283,69.48c-.77.44-1.39.12-1.39-.72A3,3,0,0,1,283,66.44Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.135px 61.5317px;"
                                                        id="elt7pytld6md" class="animable"></path>
                                                    <path
                                                        d="M266.87,98a.5.5,0,0,1-.27-.08.52.52,0,0,1-.27-.46V87.4a.52.52,0,0,1,.27-.46l8.73-5a.51.51,0,0,1,.53,0,.52.52,0,0,1,.27.46V92.44a.52.52,0,0,1-.27.46l-8.72,5A.56.56,0,0,1,266.87,98Zm.53-10.31v8.84l7.66-4.42V83.29Z"
                                                        style="fill: rgb(250, 250, 250); transform-origin: 271.23px 89.9329px;"
                                                        id="el5q1s2vzrnv" class="animable"></path>
                                                    <path id="freepik--check--inject-13"
                                                        d="M276.62,79.84a1.06,1.06,0,0,0-1.39.56l-4,9.52-1-.93a1.06,1.06,0,0,0-1.48,1.52l2.07,2a1.07,1.07,0,0,0,.74.3l.21,0a1.06,1.06,0,0,0,.76-.63l4.6-11A1,1,0,0,0,276.62,79.84Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 272.826px 86.2827px;"
                                                        class="animable"></path>
                                                    <path
                                                        d="M283,81.51l22.26-12.86c.77-.44,1.4-.12,1.4.72a3,3,0,0,1-1.4,2.32L283,84.54c-.77.45-1.39.13-1.39-.71A3,3,0,0,1,283,81.51Z"
                                                        style="fill: rgb(69, 90, 100); transform-origin: 294.135px 76.5983px;"
                                                        id="elq54djdky4x8" class="animable"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <defs>
                                            <filter id="active" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                            </filter>
                                            <filter id="hover" height="200%">
                                                <feMorphology in="SourceAlpha" result="DILATED" operator="dilate"
                                                    radius="2"></feMorphology>
                                                <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK">
                                                </feFlood>
                                                <feComposite in="PINK" in2="DILATED" operator="in"
                                                    result="OUTLINE"></feComposite>
                                                <feMerge>
                                                    <feMergeNode in="OUTLINE"></feMergeNode>
                                                    <feMergeNode in="SourceGraphic"></feMergeNode>
                                                </feMerge>
                                                <feColorMatrix type="matrix"
                                                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                                </feColorMatrix>
                                            </filter>
                                        </defs>
                                    </svg>
                                </span>
                            </a>
                        </span>
                        @else
                        @if (Route::has('register'))
                        <div class=" px-4 mb-3 d-flex align-items-center justify-content-lg-between">
                            <div>
                                <h1 class="fw-bold mb-3 "><span class=" text-warning">STE.</span>OUARCHATE <br>AL <span  style="text-decoration:underline;text-decoration-style:wavy;text-decoration-color:#C53F3F">ASDIQAE<span class=" text-warning">.SARL</span></span></h1>
                                <p  class=" m-0 mt-3 mb-5  fs-5">TOLIER/ENTRETIEN ET REPARATION DES VEHICULES ET NEGOCIANT </p>
                                <div class="mt-5">
                                    <a href="{{ route('login')}}" class="btn app-btn-secondary rounded-5 px-4">Login</a>
                                    <a href="{{ route('register')}}" class="btn btn-info text-white rounded-5 px-4">Register</a>
                                </div>
                            </div>
                            <img  class="text-center rounded-5 border-5" height="500" src="{{asset('assets/images/background/background-6.jpg')}}" alt="">
                        </div>
                        @endif
                        @endauth
                        @endif



                </div>
            </div>
        </div>
        </main>
    </div>
    {{-- <script src="{{ asset("assets/js/Createfacture/bootstrap.bundle.min.js") }}" ></script> --}}
</body>


</html>
