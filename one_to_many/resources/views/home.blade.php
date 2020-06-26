@extends("layouts.layout")
@section("content")
    <main>
        <ul>
            @foreach($tasks as $task)
                <li>
                    Nome e Cognome: <a href="{{route('edit', $task['id'])}}">{{ $task -> employee -> firstname}} {{ $task -> employee -> lastname}}</a><br>
                </li>
            @endforeach
        </ul>
    </main>
@endsection