<x-layout>
    <form method="POST" action="{{ route('student.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="studentFile" /><br><br>

        <input type="submit" />
    </form>
</x-layout>
