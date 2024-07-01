<!DOCTYPE html>
<html>
<head>
    <title>Translations</title>
</head>
<body>
    <h1>Translations</h1>
    <a href="{{ route('translations.create') }}">Add New Translation</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Key</th>
                <th>Locale</th>
                <th>Value</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($translations as $translation)
                <tr>
                    <td>{{ $translation->id }}</td>
                    <td>{{ $translation->key }}</td>
                    <td>{{ $translation->locale }}</td>
                    <td>{{ $translation->value }}</td>
                    <td>
                        <a href="{{ route('translations.edit', $translation->id) }}">Edit</a>
                        <form action="{{ route('translations.destroy', $translation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>