@extends("layouts.layout")
@section("content")
    <main>
        <ul>
            @foreach($tasks as $task)
                <li>Nome: <a href="{{route('edit', $task['id'])}}">{{$task["name"]}}</a><br>
                    Descrizione: {{$task["description"]}}<br>
                    Deadline: {{$task["deadline"]}}<br> 
                    Info Employee: <br>
                    Nome e Cognome: {{ $task -> employee -> firstname}} {{ $task -> employee -> lastname}}<br>
                    Data Di Nascita: {{ $task -> employee -> dateOfBirth}}<br>
                    Ruolo: {{ $task -> employee -> role}}
                </li>
            @endforeach
        </ul>
    </main>
@endsection