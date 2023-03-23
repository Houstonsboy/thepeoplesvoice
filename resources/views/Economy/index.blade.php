@extends('layouts.app')
@section('content')


@forelse($Economy as $Economic)
                    <ul>
                        <li><a href="./infrastructure/{{ $Economic->id }}">{{ ucfirst($Economic->motion) }}</a></li>
                    </ul>
                @empty
                   
@endforelse

<style>
    ul{
        list-style:none;
    }
    </style>

@endsection