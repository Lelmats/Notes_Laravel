@extends('layout')
@section('content')
<main class="content">
    <div class="cards">
        @forelse ($notes as $note)

        <div class="card card-small">
            <div class="card-body">
                <h4> {{ $note->titulo }} </h4>

                <p>
                    {!! $note->contenido !!}
                </p>
            </div>

            <footer class="card-footer">
                        <a href= "{{ route ('notes.edit', ['id' => $note->id]) }} " class="action-link action-edit">                            <i class="icon icon-pen"></i>
                        </a>
                        <form method="POST" action= "{{ url("notes/{$note->id}") }}">
                            @csrf
                            @method('DELETE')
                            <a class="action-link action-delete">
                                <button class="action-link action-delete"><i class="icon icon-trash"></i> <button>
                            </a>
                        </form>
                    </footer>
        </div>

        @empty
        <p> No hay registros que mostrar en este momento <a href="/add"> Agregar Nota</a></p>
        @endforelse


    </div>
</main>
@endsection