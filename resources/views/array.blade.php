@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Original Array</div>
                    
               @foreach($originalArray as $list)
               <div>{{$list}}</div>
               @endforeach
            </div>

            <div class="card">
                <div class="card-header">Original Array</div>
                    
               @foreach($arr as $list)
               <div>Element:{{$list}}</div>
               @endforeach
            </div>

        </div>
    </div>
</div>
@endsection
