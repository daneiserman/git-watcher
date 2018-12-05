<table style="border: 1px dashed blue">
    <thead>
        "Проекты"
    </thead>
    <tbody>
        @foreach($projects as $name => $branch)
        <tr>
            <td>{{ $name }}</td> <td> {{ $branch }}</td>
        </tr>
        @endforeach
    </tbody>
</table>