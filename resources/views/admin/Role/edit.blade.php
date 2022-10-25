@extends('layouts.admin')

@section('content')

<form action="{{route('roles.update',$role->id)}}" method="POST">
    @method('PATCH')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">

            نام
        </label>
        <input type="text" class="form-control" id="name" name="name" value={{$role->name}}>
    </div>
    @foreach ($permission as $value)

    <div class="mb-3 form-check">


        <label class="form-check-label" for="permission[]">
            <input type="checkbox" class="form-check-input name" name="permission[]" value={{$value->id}} @if(in_array($value->id, $rolePermissions ) ) selected @endif>
            {{ $value->name }}
        </label>


    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
