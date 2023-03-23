@extends('layouts.app')
@section('content')

<h1>Politics</h1>
<div class="Politicsindex">
<p>Below are this months politics-related motions. issues involving the governship of the republic of Kenya and it people</p>
<div class="Politics">
    
@forelse($Politics as $Politic)
                    <ul>
                        <li><a href="./politics/{{ $Politic->id }}">{{ ucfirst($Politic->motion) }}</a></li>
                    </ul>
                @empty
                    
@endforelse

<a href="/create/politics">Submit a petition</a>


</div>
</div>


<style>
    ul {
        text-align: center;
        margin: 0 auto;/* Center the list horizontally */
    }
    
    li {
        text-align: center;
        margin: 80px;
        list-style: none;
       
    }
    
    a {
        color: blue;
    }
    
    .Politics {
        text-align: center;
    }
    .Politicsindex{
        padding:100px 100px;
    }
</style>

@endsection