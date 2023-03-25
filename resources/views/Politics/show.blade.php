@extends('layouts.app')
@section('content')

<div class="body">
<h1 class="motion">{!!$Politics->motion !!} </h1>
<p>{!!$Politics->Description!!}</p>

<ul class="the-buttons">
<li>

<p class="Approve" id="approve-count">{!!$Politics->Approve!!}</p>


<button id="ApproveButton">Approve</button>


</li>
<li>
<p class="DisApprove">{!!$Politics->DisApprove !!}</p>
<button id="DisApproveButton">Disapprove</button>
</li>
</ul>

</div>

<script>
 

    
    / Select the button element by ID
const approveButton = document.querySelector('#ApproveButton');

// Add a click event listener to the button
approveButton.addEventListener('click', () => {
  // Get the current approve count from the <p> element
  const approveCountElement = document.querySelector('#approve-count');
  const approveCount = parseInt(approveCountElement.textContent);

  // Increase the approve count by 1
  const newApproveCount = approveCount + 1;

  // Update the <p> element with the new approve count
  approveCountElement.textContent = newApproveCount;

  // Make an AJAX request to update the new approve count in the database
  fetch('/politics/thankyou', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify({
      newApproveCount: newApproveCount,
    }),
  });
});
   
  </script>




<style>
    .body{
        text-align:center;
        padding:100px 100px;
    }
    .motion{
        color:green;
        font-size:20px;
    }
    p{
        color:white;
        font-size:16px;
    }
    .Approve{
        font-size:23px;
        color:#39FF14;
    }
    .DisApprove{
        font-size:23px;
        color:#FF0000;
    }
    .the-buttons{
      display:flex;
        list-style:none;
        margin-left:50px;
        margin-right:50px;
        text-align:center;
        
    }
button{
    margin-right:40px;
}


    .button-49,
.button-49:after {
  width: 150px;
  height: 76px;
  line-height: 78px;
  font-size: 20px;
  font-family: 'Bebas Neue', sans-serif;
  background: linear-gradient(45deg, transparent 5%, #FF013C 5%);
  border: 0;
  color: #fff;
  letter-spacing: 3px;
  box-shadow: 6px 0px 0px #39FF14;
  outline: transparent;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-49:after {
  --slice-0: inset(50% 50% 50% 50%);
  --slice-1: inset(80% -6px 0 0);
  --slice-2: inset(50% -6px 30% 0);
  --slice-3: inset(10% -6px 85% 0);
  --slice-4: inset(40% -6px 43% 0);
  --slice-5: inset(80% -6px 5% 0);
  
  content: 'ALTERNATE TEXT';
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, transparent 3%, #00E6F6 3%, #00E6F6 5%, #FF013C 5%);
  text-shadow: -3px -3px 0px #F8F005, 3px 3px 0px #00E6F6;
  clip-path: var(--slice-0);
}

.button-49:hover:after {
  animation: 1s glitch;
  animation-timing-function: steps(2, end);
}

@keyframes glitch {
  0% {
    clip-path: var(--slice-1);
    transform: translate(-20px, -10px);
  }
  10% {
    clip-path: var(--slice-3);
    transform: translate(10px, 10px);
  }
  20% {
    clip-path: var(--slice-1);
    transform: translate(-10px, 10px);
  }
  30% {
    clip-path: var(--slice-3);
    transform: translate(0px, 5px);
  }
  40% {
    clip-path: var(--slice-2);
    transform: translate(-5px, 0px);
  }
  50% {
    clip-path: var(--slice-3);
    transform: translate(5px, 0px);
  }
  60% {
    clip-path: var(--slice-4);
    transform: translate(5px, 10px);
  }
  70% {
    clip-path: var(--slice-2);
    transform: translate(-10px, 10px);
  }
  80% {
    clip-path: var(--slice-5);
    transform: translate(20px, -10px);
  }
  90% {
    clip-path: var(--slice-1);
    transform: translate(-10px, 0px);
  }
  100% {
    clip-path: var(--slice-1);
    transform: translate(0);
  }
}

@media (min-width: 768px) {
  .button-49,
  .button-49:after {
    width: 200px;
    height: 86px;
    line-height: 88px;
  }
}

.button-57 {
  position: relative;
  overflow: hidden;
  border: 1px solid #18181a;
  color: #18181a;
  display: inline-block;
  font-size: 15px;
  line-height: 15px;
  padding: 18px 18px 17px;
  text-decoration: none;
  cursor: pointer;
  background: #fff;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-57 span:first-child {
  position: relative;
  transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
  z-index: 10;
}

.button-57 span:last-child {
  color: white;
  display: block;
  position: absolute;
  bottom: 0;
  transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
  z-index: 100;
  opacity: 0;
  top: 50%;
  left: 50%;
  transform: translateY(225%) translateX(-50%);
  height: 14px;
  line-height: 13px;
}

.button-57:after {
  content: "";
  position: absolute;
  bottom: -50%;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: black;
  transform-origin: bottom center;
  transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
  transform: skewY(9.3deg) scaleY(0);
  z-index: 50;
}

.button-57:hover:after {
  transform-origin: bottom center;
  transform: skewY(9.3deg) scaleY(2);
}

.button-57:hover span:last-child {
  transform: translateX(-50%) translateY(-100%);
  opacity: 1;
  transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
}
    </style>
@endsection



