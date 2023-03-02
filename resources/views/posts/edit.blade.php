<h1>Edit Post</h1>

<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body">{{ $post->body }}</textarea>
    </div>
    <button type="submit">Save</button>
</form>