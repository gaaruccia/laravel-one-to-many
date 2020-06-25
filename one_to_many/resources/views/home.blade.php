@extends("layouts.layout")
@section("content")
    <main>
        <ul>
            @foreach($tasks as $task)
                <li>Nome: <a href="{{route('edit', $task['id'])}}">{{$task["name"]}}</a><br>
                    Descrizione: {{$task["description"]}}<br>
                    Deadline: {{$task["deadline"]}}<br>
                    Employee: {{ $task -> employee -> firstname}} {{ $task -> employee -> lastname}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection