@extends ('layout')

@section ('content')

<main>
    <h2>{{$MyData['title']}}</h2>
    <p>{{$MyData['short_text']}}</p>
</main>

@endsection

@section('footer')
    <p>about page footer</p>
@endsection