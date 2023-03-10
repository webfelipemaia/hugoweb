@extends('admin.app')

@section('title') {{ $pageTitle }} @endsection

@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{ $pageTitle }}</h1>
        </div>
    </div>
    @include('admin.partials.flash')
    
        <div class="col-md-">
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    @include('admin.informations.includes.general')
                </div>
            </div>
        </div>
    </div>
@endsection
