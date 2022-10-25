@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>نام:</strong>
            {{ $user->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>نقش ها :</strong>
            @if(!empty($userRole))
            @foreach($userRole as $v)
            <label class="label label-info m-1 p-1 rounded rounded-5">{{ $v }}</label>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
