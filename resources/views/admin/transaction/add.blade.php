@extends('admin.app')

@section('main-content')
<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-list"></i>
        <h3 class="box-title">Input Data Transaksi</h3>
    </div>

    <div class="box-body">
        <form>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="form-group has-feedback {{ $errors->first('description')? "has-error":null }}">
                        <textarea class="form-control" name="description" placeholder="Deskripsi Lengkap" rows="5"></textarea> <span class="form-control-feedback fa fa-edit"></span>
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group has-feedback {{ $errors->first('code')? "has-error":null }}">
                        <input type="text" class="form-control" name="code" placeholder="Code" />
                        <span class="help-block">{{ $errors->first('code') }}</span>
                    </div>

                    <div class="form-group has-feedback {{ $errors->first('rate_euro')? "has-error":null }}">
                        <input type="text" class="form-control" name="rate_euro" placeholder="Rate Euro" />
                        <span class="help-block">{{ $errors->first('rate_euro') }}</span>
                    </div>

                    <div class="form-group has-feedback {{ $errors->first('date_paid')? "has-error":null }}">
                        <input type="date" class="form-control" name="date_paid" placeholder="Date Paid" />
                        <span class="help-block">{{ $errors->first('date_paid') }}</span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-10 col-md-offset-1">
                <div class="transaction-form">
                    <div class="form-group row">
                        <label for="category" class="col-sm-1 col-form-label">Category</label>
                        <div class="col-sm-2">
                            <select class="form-control" name="type">
                                <option value="income">Income</option>
                                <option value="expense">Expense</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-1 col-form-label"></label>
                        <div class="col-sm-10">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nama Transaksi</th>
                                        <th>Nominal (IDR)</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="fields">
                                    <tr>
                                        <td>
                                            <input class="form-control" type="text" name="name[]">
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="amount_id[]">
                                        </td>
                                        <td>
                                            <a href="#" class="fa fa-plus btn-add"></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary btn-flat pull-right btn-add-transaction">Tambah</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-flat">Simpan <i class="fa fa-save"></i></button>
                <a href="{{ url('admin') }}" class="btn btn-danger btn-flat">Batal</a>
            </div>
        </form>
    </div>
</div>
@stop

@section('custom-script')
<script>
    $(".fields").on("click", ".btn-add", function() {
        let template = `<tr> <td> <input class="form-control" type="text" name="name[]"> </td> <td> <input class="form-control" type="text" name="amount_id[]"> </td> <td> <a href="#" class="fa fa-plus btn-add"></a> </td> </tr>`;

        $(this).remove();
        $(".fields").append(template);
    });

    $(".btn-add-transaction").click(function() {

    });
</script>
@stop
