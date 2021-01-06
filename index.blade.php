@extends('layout.default')

@section('breadcrumb')
    <li>
        <a href="{{ route('donations.index') }}" itemprop="url" class="l-breadcrumb-item-link">
            <span itemprop="title" class="l-breadcrumb-item-link-title">{{ config('other.title') }} Donate</span>
        </a>
    </li>
@endsection

@section('content')
    <div class="container box text-center" style="margin-bottom: 10px;">
        @php $currentMonth = date('m'); @endphp
        @php $currentYear = date('Y'); @endphp
        @php $data = App\Models\Donation::where('status', '=', 1)->whereMonth('created_at', '=',$currentMonth)->whereYear('created_at', '=',$currentYear)->sum('cost'); @endphp
        <h3 style="margin-top: 20px;">$200 Monthly Goal</h3>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar"
                 aria-valuenow="{{ $data / 2 }}" aria-valuemin="0" aria-valuemax="{{ $data / 2 }}" style="width:{{ $data / 2 }}%">
                ${{ $data }}
            </div>
        </div>
    </div>

    <style>
        body .container .card {
            margin: 0 auto;
            display: inline-block;
            -webkit-transform: scale(0);
            transform: scale(0);
            width: 280px;
            text-align: center;
            position: relative;
            -webkit-transition: all .2s;
            transition: all .2s;
            cursor: pointer;
            opacity: 0.5;
            height: 470px;
            border-radius: 14px;
        }
        body .container .card:nth-of-type(1) {
            -webkit-animation: intro 1s 0.1s forwards;
            animation: intro 1s 0.1s forwards;
        }
        body .container .card:nth-of-type(2) {
            -webkit-animation: intro 1s 0.2s forwards;
            animation: intro 1s 0.2s forwards;
        }
        body .container .card:nth-of-type(3) {
            -webkit-animation: intro 1s 0.3s forwards;
            animation: intro 1s 0.3s forwards;
        }
        body .container .card:nth-of-type(4) {
            -webkit-animation: intro 1s 0.4s forwards;
            animation: intro 1s 0.3s forwards;
        }
        body .container .card:nth-of-type(1) {
            background: -webkit-linear-gradient(45deg, #c96881 0%, #f7b695 100%);
        }
        body .container .card:nth-of-type(2) {
            background: -webkit-linear-gradient(45deg, #6B6ECC 0%, #89BFDF 100%);
        }
        body .container .card:nth-of-type(3) {
            background: -webkit-linear-gradient(45deg, #81B77B 0%, #A3E3C3 100%);
        }
        body .container .card:nth-of-type(4) {
            background: -webkit-linear-gradient(45deg, #b7ad7b 0%, #e3d5a3 100%);
        }
        body .container .card:hover .card_inner__header img {
            left: -50px;
            -webkit-transition: all 3.4s linear;
            transition: all 3.4s linear;
        }
        body .container .card:hover .card_inner__cta button {
            -webkit-transform: scale(1);
            transform: scale(1);
        }
        body .container .card:nth-of-type(1):hover .card_inner__circle img {
            -webkit-animation: launch 1s forwards;
            animation: launch 1s forwards;
        }
        body .container .card:nth-of-type(1) .card_inner__circle img {
            top: 22px;
            left: 1px;
        }
        body .container .card:nth-of-type(2):hover .card_inner__circle img {
            -webkit-animation: launch 1s forwards;
            animation: launch 1s forwards;
        }
        body .container .card:nth-of-type(2) .card_inner__circle img {
            top: 22px;
        }
        body .container .card:nth-of-type(3):hover .card_inner__circle img {
            -webkit-animation: launch 1s forwards;
            animation: launch 1s forwards;
        }
        body .container .card:nth-of-type(3) .card_inner__circle img {
            top: 22px;
            left: 1px;
        }
        body .container .card:nth-of-type(4):hover .card_inner__circle img {
            -webkit-animation: launch 1s forwards;
            animation: launch 1s forwards;
        }
        body .container .card:nth-of-type(4) .card_inner__circle img {
            top: 22px;
            left: 1px;
        }
        body .container .card:hover {
            opacity: 1;
        }
        body .container .card_inner__circle {
            overflow: hidden;
            width: 70px;
            position: absolute;
            background: #F1F0ED;
            z-index: 10;
            height: 70px;
            border-radius: 100px;
            left: 0;
            -webkit-box-shadow: 0px 7px 20px rgba(0, 0, 0, 0.28);
            box-shadow: 0px 7px 20px rgba(0, 0, 0, 0.28);
            right: 0;
            margin: auto;
            border: 4px solid white;
            top: 82px;
        }
        body .container .card_inner__circle img {
            height: 26px;
            position: relative;
            top: 17px;
            -webkit-transition: all .2s;
            transition: all .2s;
        }
        body .container .card_inner__header {
            height: 120px;
            border-top-left-radius: 14px;
            border-top-right-radius: 14px;
            overflow: hidden;
        }
        body .container .card_inner__header img {
            width: 120%;
            position: relative;
            top: -30px;
            left: 0;
            -webkit-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        body .container .card_inner__content {
            padding: 20px;
        }
        body .container .card_inner__content .price {
            color: white;
            font-weight: 800;
            font-size: 70px;
            text-shadow: 0px 0px 10px rgba(0, 0, 0, 0.42);
            padding-top: 50px;
        }
        body .container .card_inner__content .text {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
            margin-top: 50px;
            font-size: 17px;
            line-height: 16px;
        }
        body .container .card_inner__content .title {
            font-weight: 500;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.64);
            margin-top: 40px;
            font-size: 25px;
            letter-spacing: 1px;
        }
        body .container .card_inner__cta {
            position: absolute;
            bottom: -24px;
            left: 0;
            right: 0;
            margin: auto;
            width: 200px;
        }
        body .container .card_inner__cta button {
            padding: 16px;
            width: 100%;
            background: linear-gradient(135deg, #00c7c5 0%, #0088d7 100%);
            border: none;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            color: white;
            outline: none;
            font-size: 20px;
            border-radius: 6px;
            -webkit-transform: scale(0.94);
            transform: scale(0.94);
            cursor: pointer;
            -webkit-transition: -webkit-box-shadow .3s, -webkit-transform .3s .1s;
            transition: -webkit-box-shadow .3s, -webkit-transform .3s .1s;
            transition: box-shadow .3s, transform .3s .1s;
            transition: box-shadow .3s, transform .3s .1s, -webkit-box-shadow .3s, -webkit-transform .3s .1s;
        }
        body .container .card_inner__cta button span {
            text-shadow: 0px 4px 18px #BA3F57;
        }

        @-webkit-keyframes launch {
            0% {
                left: 1px;
            }
            25% {
                top: -50px;
                left: 1px;
            }
            50% {
                left: -100px;
            }
            75% {
                top: 100px;
                -webkit-transform: rotate(40deg);
                transform: rotate(40deg);
            }
            100% {
                left: 1px;
            }
        }

        @keyframes launch {
            0% {
                left: 1px;
            }
            25% {
                top: -50px;
                left: 1px;
            }
            50% {
                left: -100px;
            }
            75% {
                top: 100px;
                -webkit-transform: rotate(40deg);
                transform: rotate(40deg);
            }
            100% {
                left: 1px;
            }
        }
        @-webkit-keyframes fly {
            0% {
                left: 0px;
            }
            25% {
                top: -50px;
                left: 50px;
            }
            50% {
                left: -130px;
            }
            75% {
                top: 60px;
            }
            100% {
                left: 0px;
            }
        }
        @keyframes fly {
            0% {
                left: 0px;
            }
            25% {
                top: -50px;
                left: 50px;
            }
            50% {
                left: -130px;
            }
            75% {
                top: 60px;
            }
            100% {
                left: 0px;
            }
        }
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(720deg);
                transform: rotate(720deg);
            }
        }
        @keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(720deg);
                transform: rotate(720deg);
            }
        }
        @-webkit-keyframes intro {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            25% {
                -webkit-transform: scale(1.06);
                transform: scale(1.06);
            }
            50% {
                -webkit-transform: scale(0.965);
                transform: scale(0.965);
            }
            75% {
                -webkit-transform: scale(1.02);
                transform: scale(1.02);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }
        @keyframes intro {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }
            25% {
                -webkit-transform: scale(1.06);
                transform: scale(1.06);
            }
            50% {
                -webkit-transform: scale(0.965);
                transform: scale(0.965);
            }
            75% {
                -webkit-transform: scale(1.02);
                transform: scale(1.02);
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }


        @-webkit-keyframes hover-color {
            from {
                border-color: #c0c0c0;
            }
            to {
                border-color: #3e97eb;
            }
        }

        @keyframes hover-color {
            from {
                border-color: #c0c0c0;
            }
            to {
                border-color: #3e97eb;
            }
        }

        .magic-radio + label,
        .magic-checkbox + label {
            position: relative;
            display: block;
            padding-left: 30px;
            cursor: pointer;
            vertical-align: middle;
        }

        .magic-radio + label:hover:before,
        .magic-checkbox + label:hover:before {
            -webkit-animation-duration: 0.4s;
            animation-duration: 0.4s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: hover-color;
            animation-name: hover-color;
        }

        .magic-radio + label:before,
        .magic-checkbox + label:before {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 20px;
            height: 20px;
            content: '';
            border: 1px solid #c0c0c0;
        }

        .magic-radio + label:after,
        .magic-checkbox + label:after {
            position: absolute;
            display: none;
            content: '';
        }

        .magic-radio[disabled] + label,
        .magic-checkbox[disabled] + label {
            cursor: not-allowed;
            color: #e4e4e4;
        }

        .magic-radio[disabled] + label:hover, .magic-radio[disabled] + label:before, .magic-radio[disabled] + label:after,
        .magic-checkbox[disabled] + label:hover,
        .magic-checkbox[disabled] + label:before,
        .magic-checkbox[disabled] + label:after {
            cursor: not-allowed;
        }

        .magic-radio[disabled] + label:hover:before,
        .magic-checkbox[disabled] + label:hover:before {
            border: 1px solid #e4e4e4;
            -webkit-animation-name: none;
            animation-name: none;
        }

        .magic-radio[disabled] + label:before,
        .magic-checkbox[disabled] + label:before {
            border-color: #e4e4e4;
        }

        .magic-radio:checked + label:before,
        .magic-checkbox:checked + label:before {
            -webkit-animation-name: none;
            animation-name: none;
        }

        .magic-radio:checked + label:after,
        .magic-checkbox:checked + label:after {
            display: block;
        }

        .magic-radio + label:before {
            border-radius: 50%;
        }

        .magic-radio + label:after {
            top: 6px;
            left: 6px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #3e97eb;
        }

        .magic-radio:checked + label:before {
            border: 1px solid #3e97eb;
        }

        .magic-radio:checked[disabled] + label:before {
            border: 1px solid #c9e2f9;
        }

        .magic-radio:checked[disabled] + label:after {
            background: #c9e2f9;
        }

        .magic-checkbox + label:before {
            border-radius: 3px;
        }

        .magic-checkbox + label:after {
            top: 2px;
            left: 7px;
            box-sizing: border-box;
            width: 6px;
            height: 12px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            border-width: 2px;
            border-style: solid;
            border-color: #ffffff;
            border-top: 0;
            border-left: 0;
        }

        .magic-checkbox:checked + label:before {
            border: #3e97eb;
            background: #3e97eb;
        }

        .magic-checkbox:checked[disabled] + label:before {
            border: #c9e2f9;
            background: #c9e2f9;
        }
    </style>

    <div class="container box">
        <div class="header aboutus" style="background-image: radial-gradient(at 25% top, #01322e, #0a1526 40%);">
            <div class="aboutus_content" style="margin-top: 0px; padding-top: 0px; background-image: none;">
                <div class="content" style="width: 100%;height: 100%;background-image: url({{ url('img/fan.png') }});background-position: center -200px;background-repeat: no-repeat;">
                    <h1>
                        <i class="fas fa-heartbeat text-green" style="font-size: 196px;margin-top: 20px;"></i>
                    </h1>
                    <h2 style="margin-top: -90px; height: 170px;">
                        Thank You!
                    </h2>
                    <p>
                        Blutopia is a community-built Movie/TV/FANRES database. Every piece of data has been added by our amazing community since 2017. Blutopia's focus is on HD content, a secure codebase and a helpful and friendly community.
                    </p>
                    <div style="padding-top: 20px; padding-bottom: 20px;">
                        <p>
                            Unfortunately, like everything in life, there are costs associated with maintaining this community and donations like yours help keep BLU alive. All donations go towards covering the costs of running the site each month.
                            Crypto and CashApp is supported.
                        </p>
                    </div>
                    <div style="padding-bottom: 20px;">
                        <span style="font-weight: bold;">All Donators Get</span>
                        <span class="badge-user text-bold" style="color: #fd9644; background-image: url(https://i.imgur.com/F0UCb7A.gif);">
                            <i aria-hidden="true" class="fas fa-star"></i>
                            Supporter
                        </span>
                        <span style="font-weight: bold;">
                            Group Which Has The Following Perks
                        </span>
                    </div>
                    <div class="wrapper text-center">
                        <div style=" margin-bottom: 10px; display: inline-block; width: auto;">
                            <div style="color: #04d47b;font-size: 2em;width: 0;display: inline-block ;margin-right: 20px;">1</div>
                            <p class="badge-extra" style=" width: auto;">
                                Global Freeleech
                            </p>
                        </div>
                        <div style=" margin-bottom: 10px; display: inline-block; width: auto;">
                            <div style="color: #04d47b;font-size: 2em;width: 0;display: inline-block;margin-right: 20px;">2</div>
                            <p class="badge-extra" style=" width: auto;">
                                Immunity To Automated Warnings
                            </p>
                        </div>
                        <div style=" margin-bottom: 10px; display: inline-block; width: auto;">
                            <div style="color: #04d47b;font-size: 2em;width: 0;display: inline-block ;margin-right: 20px;">3</div>
                            <p class="badge-extra" style=" width: auto;">
                                Sparkle Effect On Username
                            </p>
                        </div>
                    </div>
                    <div style="margin-top: 16px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(153, 153, 153);">
                        <br>
                        <se class="text-center">
                            @foreach ($packages as $key => $package)
                                <section class='card'>
                                    <div class='card_inner'>
                                        <div class='card_inner__circle'>
                                            <img src='{{ url("img/rocket.png") }}' style="margin-top: 0;">
                                        </div>
                                        <div class='card_inner__header'>
                                            <img src="{{ url('/img/package'.++$key.'.png') }}" style="margin-top: 0;">
                                        </div>
                                        <div class='card_inner__content'>
                                            <div class='title'>{{ $package->description }}</div>
                                            <div class='price'>${{ $package->cost }}</div>
                                            <div class='text'>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <span class="badge-extra" style="color: black !important;">{{ $package->supporter_value }} day(s) of Supporter Group</span>
                                                    </li>
                                                    <li>
                                                        <span class="badge-extra" style="color: black !important;">{{ App\Helpers\StringHelper::formatBytes($package->upload_value,2) }} Upload Credit</span>
                                                    </li>
                                                    <li>
                                                        <span class="badge-extra" style="color: black !important;">{{ $package->invite_value }} invite(s)</span>
                                                    </li>
                                                    <li>
                                                        <span class="badge-extra" style="color: black !important;">{{ $package->bonus_value }} Bonus Point(s)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class='card_inner__cta'>
                                            <div class="donate"><strong><a href="#/" data-toggle="modal" data-target="#modal_donation_{{ $package->id }}" class="btn btn-md btn-primary">Donate</a></strong></div>
                                        </div>
                                    </div>
                                </section>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('donations.donation_modals', ['packages' => $packages])
    </div>
@endsection
