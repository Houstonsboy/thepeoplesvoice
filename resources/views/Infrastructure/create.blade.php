

@extends('layouts.app')
@section('content')
<div id="CreateInfrastructure">
<div>
<h1>Submit your own petition</h1>
    <strong>fill out the form below</strong><p>Please note that your petition will be reviewed by the us and research done on it to determine if it is indeed a necessary issue that is to be addressed immediately. Thank you for your initiative</p>              
</div>
<form action="/create/infrastructure" method="POST">
      @csrf
      <label for="motion">Motion 
      <input id="motion" name="motion" placeholder="Enter a single sentence motion suggestion" required>
     </label> 
     <label for="Description">Description  
        <textarea id="Description" name="Description" placeholder="Give a contextual explanation of what the motion is about and its impact" required></textarea>
    </label>
    <button id="PoliticsSubmit">Send a Motion</button>
</form>
</div>
<style>
   #CreateInfrastructure{
    padding:100px 100px;
   } 
    </style>
@endsection

