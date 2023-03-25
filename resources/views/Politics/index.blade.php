@extends('layouts.app')
@section('content')

<h1 class="PoliticsHead">Politics</h1>
<div class="Politicsindex">
<p id="politicsexplained">Below are this months politics-related motions. issues involving the governship of the republic of Kenya and it people</p>
<div class="Politics">
    
@forelse($Politics as $Politic)
                    <ul>
                        <li><a id="politicsmotions"href="./politics/{{ $Politic->id }}">{{ ucfirst($Politic->motion) }}</a></li>
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
    #politicsexplained{
        font-size:30px;
    }
    .PoliticsHead{
        color:green;
        text-decoration-line: underline;
    }
    .Politicsindex{
        padding:100px 100px;
    }
    #politicsmotions{
        font-size:22px;
    }
</style>

@endsection