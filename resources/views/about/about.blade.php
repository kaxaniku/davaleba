@extends ('layout')

@section ('content')

<main>
    <h2>{{$MyData['title']}}</h2>
    <p>{{$MyData['short_text']}}</p>
</main>

<section>
    <ul>
        <li>
            <a href="{{ route('about') . '/1'}}">Abt us</a>
        </li>
        <li>
            <a href="{{ route('about') . '/2'}}">who we are</a>
        </li>
        <li>
            <a href="{{ route('about') . '/3'}}">our function</a>
        </li>
    </ul>
</section>

@endsection

@section('footer')
    <p>about page footer</p>
@endsection