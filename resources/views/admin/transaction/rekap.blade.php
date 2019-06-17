@extends('admin.app')

@section('main-content')
<div class="box box-info">
    <div class="box-header">
        {{-- {{ app('request')->fullUrl() }} --}}
        <i class="fa fa-list"></i>
        <h3 class="box-title">Rekap Transaksi</h3>
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <form class="form-inline pull-right" action="{{ url('admin/rekap') }}" method="GET">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="date" name="date_paid_from" class="form-control" id="email">
                        <span class="fa fa-calendar"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">to</label>
                        <input type="date" name="date_paid_to" class="form-control" id="email">
                        <span class="fa fa-calendar"></span>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="type">
                            <option value="income">Income</option>
                            <option value="expense">Expense</option>
                        </select>
                    </div>
                    <div class="form-group">
                        {{-- <span class="fa fa-search"></span> --}}
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr>
                        <td>{{ $result->id }}</td>
                        <td>{{ date('d M Y', strtotime($result->created_at)) }}</td>
                        <td>{{ ucfirst($result->type) }}</td>
                        <td>{{ number_format($result->amount_idr, 0) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="col-md-3" style="max-width: 100px;">
                        <select class="form-control">
                            <option>10</option>
                            <option>20</option>
                            <option>30</option>
                        </select>
                    </div>
                    @php
                        $showTotal = $results->total() < $results->perPage() ? $results->total() : $results->perPage();
                    @endphp
                    <label for="inputType" class="col-md-5 control-label">Menampilkan {{ $showTotal }} dari {{ $results->total() }}</label>
                </div>
            </div>
            <div class="col-md-6">
                {{ $results->links() }}
            </div>
        </div>
    </div>
</div>
@stop
