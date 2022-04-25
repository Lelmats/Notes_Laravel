@extends("layout")
@section("content")
<main class="content">
    <div class="cards">
        <div class="card card-center">
            <div class="card-body">
                <h1>{{$notes->titulo}} </h1>

                <form method="POST"  action="{{ url("notes/{$notes-> id}/edit") }}">
                    @csrf
                    @method('PUT')
                    <label for="title" class="field-label">Title: </label>
                    <input type="text" name="title" id="title" class="field-input">

                    <label for="content" class="field-label">Content:</label>
                    <textarea name="content" id="content" rows="10" class="field-textarea">

                    {!! $notes->contenido !!}
                    </textarea>

                    <button type="submit" class="btn btn-primary">Update Note</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
