@extends('layouts.app')
@section('content')
<div>
@forelse($Infrastructure as $Infrastructures)
                    <ul>
                        <li><a href="./infrastructure/{{ $Infrastructure->id }}">{{ ucfirst($Infrastructures->motion) }}</a></li>
                    </ul>
                @empty
                   
                @endforelse

                
</div>
<div class="push">
</div>

@endsection