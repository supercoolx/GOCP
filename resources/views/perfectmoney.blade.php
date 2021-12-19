@extends('layouts.admin')
@section('content')
@php 
	$PAYEE_ACCOUNT = 'U29402609';
	$PAYEE_NAME = 'PayPorium LTD';
	$PAYMENT_AMOUNT = 0;
	$PAYMENT_UNITS = 'USD';
	$PAYMENT_URL = route('payment.method.success');
	$NOPAYMENT_URL = route('payment.method.fail');
	$PAYMENT_ID = 'PayPorium Investments';
	$STATUS_URL = route('payment.status');
	$PAYMENT_URL_METHOD = 'POST';
	$NOPAYMENT_URL_METHOD = 'POST';
	$MEMO = 'Invest Now';

	
@endphp

<form action="https://perfectmoney.is/api/step1.asp" method="POST">
    <input type="hidden" name="PAYEE_ACCOUNT" value="{{ $PAYEE_ACCOUNT }}">
    <input type="hidden" name="PAYEE_NAME" value="{{ $PAYEE_NAME }}">
    <input type="text" name="PAYMENT_AMOUNT" value="{{ $PAYMENT_AMOUNT }}" placeholder="Amount">
    <input type="hidden" name="PAYMENT_UNITS" value="{{ $PAYMENT_UNITS }}">
    <input type="hidden" name="PAYMENT_URL" value="{{ $PAYMENT_URL }}">
    <input type="hidden" name="NOPAYMENT_URL" value="{{ $NOPAYMENT_URL }}">
    @if($PAYMENT_ID)
        <input type="hidden" name="PAYMENT_ID" value="{{ $PAYMENT_ID }}">
    @endif
    @if($STATUS_URL)
        <input type="hidden" name="STATUS_URL" value="{{ $STATUS_URL }}">
    @endif
    @if($PAYMENT_URL_METHOD)
        <input type="hidden" name="PAYMENT_URL_METHOD" value="{{ $PAYMENT_URL_METHOD }}">
    @endif
    @if( $NOPAYMENT_URL_METHOD )
        <input type="hidden" name="NOPAYMENT_URL_METHOD" value="{{ $NOPAYMENT_URL_METHOD }}">
    @endif

    @if( $MEMO )
        <input type="hidden" name="SUGGESTED_MEMO" value="{{ $MEMO }}">
    @endif
    <input type="submit" value="Proceed">
</form>

{{-- <form action="https://perfectmoney.com/api/step1.asp" method="POST">
<input type="hidden" name="PAYEE_ACCOUNT" value="U29402609">
<input type="hidden" name="PAYEE_NAME" value="PayPorium LTD">
<input type="hidden" name="PAYMENT_ID" value="PayPorium Investments">
<input type="text" name="PAYMENT_AMOUNT" value=""><BR>
<input type="hidden" name="PAYMENT_UNITS" value="USD">
<input type="hidden" name="STATUS_URL" value="naveedkhanprs@gmail.com">
<input type="hidden" name="PAYMENT_URL" value="https://b4u.ihsanwebsolution.com/admin/payment-form">
<input type="hidden" name="PAYMENT_URL_METHOD" value="LINK">
<input type="hidden" name="NOPAYMENT_URL" value="https://b4u.ihsanwebsolution.com/admin/payment-form">
<input type="hidden" name="NOPAYMENT_URL_METHOD" value="LINK">
<input type="hidden" name="SUGGESTED_MEMO" value="Invest Now">
<input type="hidden" name="BAGGAGE_FIELDS" value="">
<input type="submit" name="PAYMENT_METHOD" value="Pay Now!">
</form>
 --}}

@endsection