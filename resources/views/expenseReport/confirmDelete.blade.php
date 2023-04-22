@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title m-b-md">
                Eliminar Reporte {{ $report->id }}
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
            <form action="/expense_reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-success">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection
