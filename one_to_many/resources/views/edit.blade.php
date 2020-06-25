@extends("layouts.layout")
@section("content")
<main>
    <form action="{{route('update', $task['id'])}}" method="post">
        @csrf
        @method("POST")
        <label for="name">Nome</label>
        <input type="text" name="name" value="{{$task['name']}}"><br>
        <label for="description">Descrizione</label>
        <input type="text" name="description" value="{{$task['description']}}"><br>
        <label for="deadline">Deadline</label>
        <input type="text" name="deadline" value="{{$task['deadline']}}"><br>
        <label for="employee_id">Nome</label>
        <select name="employee_id">
            @foreach($employee as $employe)
                <option value="{{$employe['id']}}"
                    @if($employe['id'] === $task -> employee_id)
                        selected
                    @endif
                >Nome e Cognome: {{$employe['firstname']}} {{$employe['lastname']}}
                Data Di Nascita: {{$employe['dateOfBirth']}} 
                Ruolo: {{$employe['role']}}</option>
             @endforeach
        </select><br>
        
        
        
        
        
        <input type="submit" name="submit" value="update">
    </form>
</main>
@endsection