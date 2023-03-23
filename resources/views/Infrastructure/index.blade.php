@extends('layouts.app')
@section('content')
<div>
@forelse($Infrastructure as $Infrastructures)
                    <ul>
                        <li><a href="./infrastructure/{{ $Infrastructures->id }}">{{ ucfirst($Infrastructures->motion) }}</a></li>
                    </ul>
                @empty
                   
@endforelse

<a href="/create/infrastructure" >Submit a infrastructureMotion</a>
                
</div>
<div class="push">
</div>

<style>
    ul{
        list-style:none;
    }
    </style>
@endsection