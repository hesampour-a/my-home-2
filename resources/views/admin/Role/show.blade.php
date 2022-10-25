@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>نام:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>دسترسی ها :</strong>
            @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
            <label class="label label-info m-1 p-1 rounded rounded-5">{{ $v->name }}</label>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
