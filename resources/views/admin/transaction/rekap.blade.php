@extends('admin.app')

@section('main-content')
<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-list"></i>
        <h3 class="box-title">Rekap Transaksi</h3>
    </div>

    <div class="box-body">
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
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->id }}</td>
                        <td>{{ $result->id }}</td>
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
                    <label for="inputType" class="col-md-5 control-label">Menampilkan {{ app('request')->per_page }} dari {{ $results->total() }}</label>
                </div>
            </div>
            <div class="col-md-6">
                {{ $results->links() }}
            </div>
        </div>
    </div>
</div>
@stop
