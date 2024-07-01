<!DOCTYPE html>
<html>
<head>
    <title>Add Translation</title>
</head>
<body>
    <h1>Add Translation</h1>
    <form action="{{ route('translations.store') }}" method="POST">
        @csrf
        <label for="key">Key</label>
        <input type="text" name="key" id="key" required>
        <label for="locale">Locale</label>
        <input type="text" name="locale" id="locale" required>
        <label for="value">Value</label>
        <textarea name="value" id="value" required></textarea>
        <button type="submit">Add</button>
    </form>
</body>
</html>