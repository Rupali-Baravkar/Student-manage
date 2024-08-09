@extends('app')
@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="col-md-12">
            <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add New student</a>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif

            @if($errors->any())
            {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
            @endif

            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone no.</th>
                        <th>Subject</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name .' '. $student->last_name}}</td>
                        <td>{{ $student->dob}}</td>
                        <td>{{ $student->gender}}</td>
                        <td>{{ $student->email}}</td>
                        <td>{{ $student->phone}}</td>
                        @php
                        $subjects = [
                        1 => 'Subject 1',
                        2 => 'Subject 2',
                        3 => 'Subject 3',
                        4 => 'Subject 4',
                        ];
                        @endphp
                        <td>{{ $subjects[$student->choose_subject] ?? 'Unknown Subject' }}</td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "paging": true,
            "info": true,
            "pageLength": 5,
            "lengthChange": true,
        });
    });
</script>
@endsection