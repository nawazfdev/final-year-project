@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Academics</h1>
                </div>
                <div class="col-sm-6">
                    <a data-toggle="modal" data-target="#Academics-add-modal" class="btn btn-success float-right"
                       href="{{ route('academics.create') }}">
                        Add New Academic Record
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        @include('adminlte-templates::common.errors')
    
        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
            @include('academics.table')
            {!! Form::open(['route' => 'academics.store']) !!}
            @include('academics.fields')
            {!! Form::close() !!}


                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

