@extends('layouts.admin')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">کد ملی</th>
            <th scope="col">شماره تلفن</th>
            <th scope="col">آدرس ایمیل</th>
            <th scope="col">وضعیت</th>
            <th scope="col">نقش</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{ $user->name }}</td>
            <td>{{$user->NationalID}}</td>
            <td> {{ $user->Mobile }}</td>
            <td>{{ $user->email }}</td>

            <td>
                <form action="{{route('users.updateStatus',$user->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input onchange="this.form.submit()" class="form-check-input" type="checkbox" id="{{ $user->id }}" @if(in_array($user->id, $activeUsers) ) checked @endif>
                        <input id="status" name="status" value={{ $user->status }} hidden>
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                    </div>
                </form>
            </td>
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $role)
                <label class="badge badge-success">{{ $role }}</label>
                @endforeach
                @endif
            </td>
            <td>
                <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}">نمایش</a>
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">ویرایش</a>
                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@endsection
