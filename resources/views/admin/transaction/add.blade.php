@extends('admin.app')

@section('main-content')
<div class="box box-info">
    <div class="box-header">
        <i class="fa fa-list"></i>
        <h3 class="box-title">Input Data Transaksi</h3>
    </div>

    <div class="box-body">
        <form>
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
                    <input type="text" class="form-control" name="date_paid" placeholder="Date Paid" />
                    <span class="help-block">{{ $errors->first('date_paid') }}</span>
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
