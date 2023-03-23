<!DOCTYPE html>
<html>
    <head>
        <title>{{config('app.name')}}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       <link href="https://fonts.googleapis.com/css2?family=Itim&family=Syne:wght@800&display=swap" rel="stylesheet">
       <style>
        body{
            font-family: 'Syne', sans-serif;
            background-color: black;
            color:#00BFFF;
            text-align:center;
          
            
        }
        h1{
            font-size:40px;
            color:blue;
        }
        h2{
            margin:20px;
            font-size:16px;
        }
       
        </style>
       </head>
     <body>
     <h1 id="title">{{config('app.name')}}</h1>
    
        @yield('content')

     </body>
    </html>
