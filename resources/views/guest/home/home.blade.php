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
@endsection