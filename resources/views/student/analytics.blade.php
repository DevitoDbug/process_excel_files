<x-layout>
    <h5>Marks Analysis</h5>
    <div>
        <p><strong>Class Total:</strong> {{ $data['total'] }}</p>
        <p><strong>Highest marks:</strong> {{ $data['highScore'] }} by {{ $data['bestStudent'] }}</p>
        <p><strong>Class Averave:</strong> {{ $data['average'] }}</p>
    </div>
</x-layout>
