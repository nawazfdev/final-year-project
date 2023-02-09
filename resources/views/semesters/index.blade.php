@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i class="fa fa-book"></i>&nbsp;Semesters</h1>
                </div>
                <div class="col-sm-6">
                    <a
data-toggle="modal" data-target="#semester-add-modal" class="btn btn-success float-right"
                      >
                        <i class="fa fa-plus-circle">Add New Semester</i>
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
                @include('semesters.table')
                {!! Form::close() !!}
                @include('semesters.fields')
                {!! Form::open(['route' => 'semesters.store']) !!}
            
                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

