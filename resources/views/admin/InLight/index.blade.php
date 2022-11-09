@extends('layouts.admin')

@section('content')

<a href="{{ route('adminInLights.create') }}">
    <button type="button" class="btn btn-info">ساخت لامپ جدید</button>
</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">نام</th>
            <th scope="col"> نام فارسی</th>
            <th scope="col">محدوده ولتاژ</th>
            <th scope="col">توان مصرفی</th>
            <th scope="col">کار</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($inLamps as $inLamp)
        <tr key={{$inLamp->id}}>

            <td>{{ $inLamp->name }}</td>
            <td>{{ $inLamp->persianName }}</td>
            <td>V {{ $inLamp->voltageRange }}</td>
            <td>W {{ $inLamp->powerConsumption }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('adminInLights.edit',$inLamp->id) }}">ویرایش</a>
                <form action="{{ route('adminInLights.destroy', $inLamp->id) }}" method="POST" style="display: inline;">
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
