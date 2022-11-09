@extends('layouts.admin')

@section('content')

<form action="{{route('adminInLights.update',$inLamp->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">

            نام
        </label>
        <input type="text" class="form-control" id="name" name="name" value={{$inLamp->name}}>
    </div>
    <div class="mb-3">
        <label for="persianName" class="form-label">

            نام فارسی
        </label>
        <input type="text" class="form-control" id="persianName" name="persianName" value={{$inLamp->persianName}}>
    </div>
    <div class="mb-3">
        <label for="voltageRange" class="form-label">

            محدوده ولتاژ
        </label>
        <input type="number" class="form-control" id="voltageRange" name="voltageRange" value={{$inLamp->voltageRange}}>
    </div>
    <div class="mb-3">
        <label for="powerConsumption" class="form-label">

            توان مصرفی
        </label>
        <input type="number" class="form-control" id="powerConsumption" name="powerConsumption" value={{$inLamp->powerConsumption}}>
    </div>

    <button type="submit" class="btn btn-primary">ویرایش</button>
</form>
@endsection
