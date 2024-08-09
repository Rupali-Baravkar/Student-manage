@extends('app')
@section('content')
<div class="container">
    <div class="row mt-5">

        <div class="col-md-12">
            <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">Back</a>

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
                    </tr>
                </thead>
                <tbody>
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
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection