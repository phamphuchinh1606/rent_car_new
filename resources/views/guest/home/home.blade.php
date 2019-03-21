@extends('guest.layouts.master')

@section('body.content')
    <div class="opacity_menu"></div>
    <div class="op_login"></div>

    <!-- Main content -->
    <header class="header">
        @include('guest.home.partials.__top_bar')

        @include('guest.home.partials.__mid_header')

        @include('guest.home.partials.__header_mobile')

        @include('guest.home.partials.__menu')
    </header>

    <div id="menu-overlay" class=""></div>
    <!-- Header JS -->
    <script src="http://bizweb.dktcdn.net/100/344/585/themes/707889/assets/jquery-2.2.3.min.js?1550886402904" type="text/javascript"></script>
    <h1 class="hidden">Thuê xe HN - heme Thuexe với thiết kế hiện đại, trẻ trung và đa tính năng sẽ là sự lựa chọn hoàn hảo cho những website ngành dịch vụ đặc biệt là dịch vụ thuê xe.</h1>

    @include('guest.home.partials.__slider')

    @include('guest.home.partials.__book_car')

    @include('guest.home.partials.__info_company')
@endsection