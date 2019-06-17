@extends('admin.app')

@section('main-content')
<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-list"></i>
        <h3 class="box-title">List Transaksi</h3>
    </div>

    <div class="box-body">
        <div class="col-md-12">
            <a href="{{ url('admin/add') }}" class="btn btn-primary">Tambah Transaksi</a>
            <form class="form-inline pull-right" action="{{ url('admin/list') }}" method="GET">
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
                        <th>Deskripsi</th>
                        <th>Code</th>
                        <th>Rate Euro</th>
                        <th>Date Paid</th>
                        <th>Kategori</th>
                        <th>Nama Transaksi</th>
                        <th>Nominal (IDR)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($results as $result)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $result->description }}</td>
                        <td>{{ $result->code }}</td>
                        <td>{{ number_format($result->rate_euro, 0) }}</td>
                        <td>{{ date('d M Y', strtotime($result->date_paid)) }}</td>
                        <td>{{ ucfirst($result->type) }}</td>
                        <td>{{ $result->name }}</td>
                        <td>{{ number_format($result->amount_idr, 0) }}</td>
                        <td>
                            <a href="#" class="fa fa-trash btn-delete" data-id="{{ $result->id }}" data-toggle="modal" data-target="#deleteModal"></a>
                            <a href="#" class="fa fa-pencil"></a>
                        </td>
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

<!-- Delete Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Hapus Data Transaksi</h4>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin untuk menghapus data ini ?</p>
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="{{ url('/admin/delete/transaction') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input id="id_transaction" type="text" name="id_transaction_detail" hidden="hidden">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('custom-script')
<script>
    $(".btn-delete").click(function(){
        $("#id_transaction").val($(this).data('id'));
    });
</script>
@stop
