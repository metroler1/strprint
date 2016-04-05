@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <h1 style="display: inline">{{$catridges->current_id}}</h1>
            </div>

            <div class="col-md-offset-11">
                <a href={{ $catridges->id . '/edit' }} class="edit"><button type="button" class="btn btn-primary">Редактировать</button></a>
            </div>
        </div>

        <div class="row" style="margin-top: 100px">
        <div class="col-md-offset-5">
            @include('frontend.catridge.transfer')
        </div>
    </div>




@endsection