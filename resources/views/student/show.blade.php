<x-layout>
    @if (count($studentMarks) <= 0)
        <h5>No data yet...</h5>
    @else
        <h1>Hello</h1>
        @foreach ($studentMarks as $student)
            <ul>
                <li>Name: {{ $student->name }}</li>
                <li>Score: {{ $student->marks }}</li>
                <hr>
            </ul>
        @endforeach
    @endif
</x-layout>
