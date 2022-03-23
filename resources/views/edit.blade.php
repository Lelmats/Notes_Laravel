@extends("layout")
@section("content")
<main class="content">
    <div class="cards">
        <div class="card card-center">
            <div class="card-body">
                <h1>Edit Note</h1>

                <form action="">
                    <label for="title" class="field-label">Title: </label>
                    <input type="text" name="title" id="title" class="field-input">

                    <label for="content" class="field-label">Content:</label>
                    <textarea name="content" id="content" rows="10" class="field-textarea"></textarea>

                    <button type="submit" class="btn btn-primary">Edit note</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
