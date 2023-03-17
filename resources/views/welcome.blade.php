@extends('layouts.app')
@section('content')
<div class="Splashscreen">
    
    <h2 id="motto">Change for the people by the people</h1>

    
<p>The Peoplesvoice is a bridge between the government and its peoples. Observing the disconnect between the lawmakers and its govern has prompted the initiation of this action. No longer will those in power make rules and govern its citizen without the input of those who elected them into power</p>
<p>Every month a list of motions that call for immediate action will be posted here and a vote is conducted on them. if agreed by the citizens of the republic of Kenya, they are mandatory to be pushed into parliament for discussion as par the constitution<br> they results of those discussion are to be posted here so the average citizen can follow their elected leaders and to keep those leaders accountable</p>

<p>Below are sectors</p>

    <ol>
    <li>
        <img class="politicsimg" src="{{ asset('images\marco-oriolesi-wqLGlhjr6Og-unsplash.jpg') }}" />
        <div class="politics">
            <a href="/politics" class="button-89" >Politics</a>
        </div>
    </li>
    <li>
        <img class="infrastructureimg" src="{{ asset('images\marco-oriolesi-wqLGlhjr6Og-unsplash.jpg') }}" />
        <div class="Infrastructure">
            <a href="/infrastructure" class="button-89" >Infrastructure</a>
        </div>
    </li>
    <li>
        <img class="economyimg" src="{{ asset('images\marco-oriolesi-wqLGlhjr6Og-unsplash.jpg') }}" />
        <div class="economy">
            <a href="/economy" class="button-89" >Economy</a>
        </div>
    </li>
</ol>
<a href="/infrastructure/create">Submit your own petition</a>

    


</div>

<div class="Entertainment">
    
</div>
<style>
    .splashscreeen{
        font-family: 'Syne', sans-serif;
        margin-top:50%;
        text-align:center;
        padding: 100px 100px;
    }
    .button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #00BFFF;

  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}

ol {
     /* Remove default bullet points */
    display: flex; /* Display list items in a horizontal row */
    flex-wrap:wrap; /* Prevent items from wrapping to the next row */
    padding: 0; /* Remove default padding */
    margin-left:20px;
    margin-top:50px;
  }
  li {
    
    margin-right: 50px;
    height:500px; /* Add some space between list items */
  }
a{
    margin:70px;
}
.politicsimg{
    max-width: 100%; /* Make images responsive */
    max-height:100%;
    height:200px;
    
}
.infrastructureimg{
    max-width: 100%; /* Make images responsive */
    max-height:100%;
    height:200px;
    
}
.economyimg{
    max-width: 100%; /* Make images responsive */
    max-height:100%;
    height:200px;
    
}
h1{
    color:blue;
}
    </style>
@endsection



