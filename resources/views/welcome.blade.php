<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form action="tags" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Tag name">
            <input type="submit" value="Add Tag">
        </form>

        <h4>Tag list</h4>
        <table>
            @forelse ($tags as $tag)
                <tr>
                    <td>{{ $tag->name }}</td>
                    <td>
                        <form action="tags/{{ $tag->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td>
                    <p>There is no tags</p>
                </td>
            </tr>
            @endforelse
        </table>
    </body>
</html>
