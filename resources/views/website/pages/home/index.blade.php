@extends('website.master-layout')





@section('content')

	@include('website.pages.home.partials.banner-section')
	@include('website.pages.home.partials.arrival')
	@include('website.pages.home.partials.deal')
	@include('website.pages.home.partials.stock')
	@include('website.pages.home.partials.services')
	

@endsection

@push('js')

@endpush