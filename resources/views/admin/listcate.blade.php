@extends('layouts.master')
@section('main')
    <table class="table table-bordered">
        <tr class="table-primary">
            <th>Ma loai</th>
            <th>Ten loai</th>
        </tr>
{{--        Đây là cách dùng query DB--}}
{{--        @foreach($ds as $n)--}}
{{--            <tr>--}}
{{--                <td class="text-center">{{$n -> id}}</td>--}}
{{--                <td class="text-center">{{$n -> name}}</td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}

{{--        Đây là cách dùng model--}}
        @foreach($categories as $category)
            <tr>
                <td class="text-center">{{$category -> id}}</td>
                <td class="text-center">{{$category -> name}}</td>
            </tr>
        @endforeach
    </table>
@endsection
