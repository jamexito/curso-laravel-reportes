@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="title m-b-md">
                Nuevo Gasto
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="/expense_reports/{{ $report->id }}">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/expenses" method="POST">
                @csrf
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <input id="description" class="form-control" type="text" name="description" placeholder="Ingrese una descripción" value="{{ old('description') }}">
                </div>
                <div class="form-group">
                    <label for="amount">Monto:</label>
                    <input id="amount" class="form-control" type="text" name="amount" placeholder="Ingrese un monto" value="{{ old('amount') }}">
                </div>
                <button type="submit" class="btn btn-success">Ingresar</button>
            </form>
        </div>
    </div>
</div>
@endsection
