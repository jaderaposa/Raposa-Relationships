<!-- make an extends -->
@extends('layout.app')
@section('content')

<table>
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Profile</th>
            <th>Comment</th>
            <th>Subjects</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->first_name . ' ' . $student->last_name }}</td>
            <td>{{ $student->profile ? $student->profile->description : 'No profile' }}</td>
            <td>
                @forelse($student->comments as $comment)
                {{ $comment->content }}<br>
                @empty
                No comments
                @endforelse
            </td>
            <td>
                @foreach($student->subjects as $subject)
                {{ $loop->first ? '' : ', ' }}
                {{ $subject->name }} ({{ $subject->pivot->grade }})
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@stop
