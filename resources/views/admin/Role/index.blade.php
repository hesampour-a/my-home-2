@extends('layouts.admin')

@section('content')

<a href="{{ route('roles.create') }}">
    <button type="button" class="btn btn-info">ساخت نقش جدید</button>
</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">نام</th>
            <th scope="col">کار</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
        <tr key={{$role->id}}>

            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">نمایش</a>
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">ویرایش</a>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline;">
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
