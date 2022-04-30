    @extends('app')

    @section('title','services')
    @section('content')

    <h1>les services</h1>
    <p> voila notre services</p>

    <form method="post" action="/service">
    <div><label>name</label>
    <input type="text" name="name" autocomplete="off"></div>
    <div><label>email</label>
    <input type="text" name="email" autocomplete="off"> </div>
    @csrf
    <button>Add service </button>
    </form>
    <p style="color:red;"> @error('name') {{$message }} @enderror    </p>   {{-- y5arrej erreur --}}

    <ul>
        @foreach($services as $service)
        <li> {{$service->name}} </li> 
        <li> {{$service->email}} </li> 

        @endforeach
    </ul>
    @endsection
