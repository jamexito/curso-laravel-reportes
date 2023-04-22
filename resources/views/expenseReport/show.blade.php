@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title m-b-md">
                Reporte: {{ $report->title }}
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-success" href="/expense_reports/{{ $report->id }}/confirmSendMail">Enviar correo</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Detalles</h3>
            <table class="table">
                @foreach ($report->expenses as $expense)
                    <tr>
                        <td>{{ $expense->description }}</td>
                        <td>{{ $expense->created_at }}</td>
                        <td>{{ $expense->amount }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}/expenses/create">Nuevo Gasto</a>
        </div>
    </div>
</div>
@endsection
