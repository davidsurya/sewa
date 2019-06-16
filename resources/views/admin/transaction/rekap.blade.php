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
                    <tr>
                        <td>1</td>
                        <td>12 Agustus 2019</td>
                        <td>Income</td>
                        <td>950.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>12 Agustus 2019</td>
                        <td>Income</td>
                        <td>950.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>12 Agustus 2019</td>
                        <td>Income</td>
                        <td>950.000</td>
                    </tr>
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
                    <label for="inputType" class="col-md-5 control-label">Menampilkan 10 dari 100</label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="pagination">
                    <ul>
                      <li><a href="#">«</a></li>
                      <li><a href="#">10</a></li>
                      <li class="active"><a href="#">11</a></li>
                      <li><a href="#">12</a></li>
                      <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
