
<h1>Create Post</h1>

<form method="POST" action="/posts">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
    </div>
    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body">{{ old('body') }}</textarea>
    </div>
    <button type="submit">Create</button>
</form>
