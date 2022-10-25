@extends('layouts.admin')

@section('content')
{{ $errors }}
<form action="{{route('users.update',$user->id)}}" method="POST">
    @method('PATCH')

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">نام و نام خانوادگی</label>
        <input type="text" class="form-control" id="name" name="name" value={{$user->name}}>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">آدرس ایمیل</label>
        <input type="email" class="form-control" id="email" name="email" value={{$user->email}}>

    </div>

    <div class="mb-3">
        <label for="Mobile" class="form-label">شماره تلفن</label>
        <input type="text" class="form-control" id="Mobile" name="Mobile" value={{$user->Mobile}}>
    </div>

    <div class="mb-3">
        <label for="NationalID" class="form-label">کد ملی</label>
        <input type="text" class="form-control" id="NationalID" name="NationalID" value={{$user->NationalID}}>
    </div>

    <div class="mb-3">
        <label for="roles[]" class="form-label">سطح دسترسی</label>
        <select name="roles[]" multiple class="form-control">
            @if (!empty($roles))

            @foreach ($roles as $r)
            <option value={{$r}} @if(in_array($r, $userRole) ) checked @endif>{{$r}}</option>
            @endforeach
            @endif

        </select>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">رمزعبور</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>




    <button type="submit" class="btn btn-primary">بروزرسانی</button>
</form>

@endsection
