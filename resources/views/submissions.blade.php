@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Form Submissions</h1>
    <table class="table">
        <thead>
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CONTACT_NO</th>
                <th>MESSAGE</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formData as $data)
            <tr>
                <td>{{ $data->NAME }}</td>
                <td>{{ $data->EMAIL }}</td>
                <td>{{ $data->CONTACT_NO }}</td>
                <td>{{ $data->MESSAGES }}</td>
                <td>
                    <form method="POST" action="{{ route('form.delete', $data->id) }}">
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
<style>
    .container {
        margin-top: 20px;
    }

    table.table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
    }

    tr.spacer-row td {
        padding: 0;
    }

</style>
@endsection
