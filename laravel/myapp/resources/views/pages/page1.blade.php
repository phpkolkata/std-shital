@extends("master.layout")

@section('title')
page1
@endsection

@section('nav')
    @parent
<ul>
    <li>option1</li>
    <li>option1</li>
    <li>option1</li>
</ul>
@endsection

@section('body')
<h1>heading</h1>
hello this is page1 body
@endsection
