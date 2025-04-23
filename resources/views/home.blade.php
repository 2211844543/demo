<h1>hello {{ $myname }} {{ $mylastnname}}</h1>
@foreach ($car_Types as @car_Type)
<p>{{ $car_Type}}</p>

@if($strlen($myname) > 5)

 <p>the name is too long </p>

@elseif(strlen(string: $myname) <3 )

   <p>
    the name is short</p>

@else 
 <p>
    the name is just right</p> 

    @endif

