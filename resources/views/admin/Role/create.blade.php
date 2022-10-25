@extends('layouts.admin')

@section('content')
{{ $errors }}
<form action="{{route('roles.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">

            نام
        </label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    @foreach ($permission as $value)

    <div class="mb-3 form-check">


        <label class="form-check-label" for="permission[]">
            <input type="checkbox" class="form-check-input name" name="permission[]" value={{$value->id}}>
            {{ $value->name }}
        </label>


    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
