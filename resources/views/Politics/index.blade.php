@extends('layouts.app')
@section('content')
<h1>Politics</h1>
<p>Below are this months politics-related motions. issues involving the governship of the republic of Kenya and it people</p>
<div class="Politics">
    
@forelse($Politics as $Politic)
                    <ul>
                        <li><a href="./politics/{{ $Politic->id }}">{{ ucfirst($Politic->motion) }}</a></li>
                    </ul>
                @empty
                    
                @endforelse
</div>



<style>
    ul {
        text-align: center;
        margin: 0 auto; /* Center the list horizontally */
    }
    
    li {
        text-align: center;
        margin: 80px;
        list-style: none;
        width: 500px;
    }
    
    a {
        color: blue;
    }
    
    .Politics {
        text-align: center;
    }
</style>

@endsection