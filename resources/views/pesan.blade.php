@extends('master')
@section('content')
<div class="container mb-5">
    <h3 class="mt-4">Pesan Laptop</h3>
    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('email', 'Email Address') !!}
            <br>
            {!! Form::email('email') !!}
        </div>
        <div class="form-group">
            {!! Form::label('name', 'Nama') !!}
            <br>
            {!! Form::text('nama') !!}
        </div>
        <div class="form-group">
            {!! Form::label('address', 'Alamat') !!}
            <br>
            {!! Form::textArea('address') !!}
        </div>
        <div class="form-group">
            {!! Form::label('jenis_laptop', 'Jenis laptop') !!}
            <br>
            {!! Form::text('jenis_laptop') !!}
        </div>
        <div class="form-group">
            {!! Form::label('method_pembayaran', 'Metode Pembayaran') !!}
            <br>
            {!! Form::select('method_pembayaran', array('kredit'=>'Kredit', 'cash'=>'Cash')) !!}
        </div>
        {!! Form::submit('save') !!}
    {!! Form::close() !!}
</div>
@endsection
