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

@push('scripts')
    <script>
        $(function () {
            $('#contact-form').on('submit', function () {
                let $form = $(this);
                $form.find(':submit').text('Processing...').addClass('btn--loading');
            });
        });
    </script>
@endpush
