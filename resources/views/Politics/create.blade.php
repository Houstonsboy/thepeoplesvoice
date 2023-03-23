@extends('layouts.app')
@section('content')
<div class="creation">
    <p>Hello</p>

    <form action="/create/politics" method="POST">
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
    .creation{
        padding:100px 100px;
    }
    </style>
@endsection