<div class="row">
    <div class="col">
        <h1>Reporte {{ $report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <h2>Reporte</h2>
        <table class="table table-hover table-responsive table-striped">
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
