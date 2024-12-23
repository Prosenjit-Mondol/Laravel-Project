
@include('common.header')
<h1>Home Page </h1>
<!-- <a href="/">Welcome Page</a>
<a href="/about/prosen">About Page</a> -->

<h1>{{$name}}</h1>

<!-- <h1>{{rand()}}</h1>

<h1>{{$users[0]}}</h1> -->

@if($name=='pro')
<h2>This is pro</h2>
@elseif($name=='sen')
<h2>This is sen.</h2>
@else
<h2>Other user.</h2>
@endif

<div>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach
</div>
<div>
    @for($i=0;$i<=10;$i+=1)
    <h3>{{$i}}</h3>
    @endfor
</div>
