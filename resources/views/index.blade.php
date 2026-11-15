@extends('layout')

@section('content')

<h3>Students List</h3>

<div class="table-wrapper">

    <table class="fl-table">

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Section</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->section }}</td>
                    <td>
                        <img src="{{ asset('image/'.$student->image) }}" width="80">
                    </td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}">Show</a>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection