@extends('layouts.admin')

@section('content')

<a href="{{ route('adminOutLights.create') }}">
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
        @foreach ($outLamps as $outLamp)
        <tr key={{$outLamp->id}}>

            <td>{{ $outLamp->name }}</td>
            <td>{{ $outLamp->persianName }}</td>
            <td>V {{ $outLamp->voltageRange }}</td>
            <td>W {{ $outLamp->powerConsumption }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('adminInLights.edit',$outLamp->id) }}">ویرایش</a>
                <form action="{{ route('adminInLights.destroy', $outLamp->id) }}" method="POST" style="display: inline;">
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
