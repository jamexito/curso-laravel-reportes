@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title m-b-md">
                Reportes
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/create">Crear nuevo reporte</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                @foreach ($expenseReports as $expenseReport)
                    <tr>
                        {{-- <td>{{ $expenseReport -> title }}</td> --}}
                        <td><a href="/expense_reports/{{ $expenseReport->id }}">{{ $expenseReport->title }}</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/edit" class="btn btn-warning">Editar</a></td>
                        <td><a href="/expense_reports/{{ $expenseReport->id }}/confirmDelete" class="btn btn-danger">delete</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
