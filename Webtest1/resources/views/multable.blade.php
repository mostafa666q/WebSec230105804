@extends('layouts.master')
@section('title', 'Multiplication Table')
@section('content')
    <div class="card m-4 col-sm-2">
        <div class="card-header">{{ $number }} Multiplication Table</div>
        <div class="card-body">
            <table>
                @foreach (range(1, 10) as $i)
                    <tr><td>{{ $i }} * {{ $number }}</td><td>= {{ $i * $number }}</td></tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection