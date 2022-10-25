@extends('layouts.admin')

@section('content')

<form action="{{route('users.store')}}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">نام و نام خانوادگی</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">آدرس ایمیل</label>
        <input type="email" class="form-control" id="email" name="email">

    </div>

    <div class="mb-3">
        <label for="Mobile" class="form-label">شماره تلفن</label>
        <input type="number" class="form-control" id="Mobile" name="Mobile">
    </div>

    <div class="mb-3">
        <label for="NationalID" class="form-label">کد ملی</label>
        <input type="text" class="form-control" id="NationalID" name="NationalID">
    </div>

    <div class="mb-3">
        <label for="roles[]" class="form-label">سطح دسترسی</label>
        <select name="roles[]" multiple class="form-control">
            @if (!empty($roles))

            @foreach ($roles as $r)
            <option value={{$r}}>{{$r}}</option>
            @endforeach
            @endif

        </select>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">رمزعبور</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>




    <button type="submit" class="btn btn-primary">ایجاد</button>
</form>

@endsection
