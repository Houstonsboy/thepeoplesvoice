@extends('layouts.app')
@section('content')
<div class="creation">
    <p>Hello, Thank you for taking an interest</p>

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
    #Description {
  height: 100px; /* Twice the normal size */
  border-radius: 10px; /* Smooth edge */
}
form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
  border: 1px solid blue;
  padding: 20px;
  max-width: 500px;
  margin: auto;
  background-color: black;
  color: white;
}

label, input, textarea {
  margin: 10px 0;
  width: 100%;
}

button {
  margin-top: 20px;
}


    </style>
@endsection