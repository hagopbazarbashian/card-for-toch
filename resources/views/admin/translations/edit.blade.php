<!DOCTYPE html>
<html>
<head>
    <title>Edit Translation</title>
</head>
<body>
    <h1>Edit Translation</h1>
    <form action="{{ route('translations.update', $translation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="key">Key</label>
        <input type="text" name="key" id="key" value="{{ $translation->key }}" required>
        <label for="locale">Locale</label>
        <input type="text" name="locale" id="locale" value="{{ $translation->locale }}" required>
        <label for="value">Value</label>
        <textarea name="value" id="value" required>{{ $translation->value }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>