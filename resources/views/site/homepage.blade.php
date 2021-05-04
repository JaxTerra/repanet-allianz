@extends('layouts.master')

@section('seo')

@endsection

@section('content')

    @include('site.partials.landing')
    @include('site.partials.horizontalHeadings')
    @include('site.partials.textBelowFold')
    @include('site.partials.servicesOverview')
    @include('site.partials.serviceText')
    @include('site.partials.contact')

@endsection
