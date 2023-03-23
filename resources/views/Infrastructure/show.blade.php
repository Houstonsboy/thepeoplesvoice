@extends('layouts.app')
@section('content')
 <div class="InfrastructureMotion"> 
<h1 class="motion">{!!$Infrastructure->motion !!}</h1>
<p>{!!$Infrastructure->Description!!}</p>
</div>

<style>
    .InfrastructureMotion{
        padding:100px 100px;
    }
    .motion{
        color:green;
    }

    </style>
@endsection
