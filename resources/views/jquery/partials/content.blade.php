<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-1">
            <button class="btn btn-primary btn-tambah">Tambah</button>
        </div>
    </div>

    <div class="col-md-4 col-md-offset-1 col-xs-12 main-kotak"></div>
</div>

@section('custom-script')
<script>
    $(".btn-tambah").click(function() {
        let kotak_tpl = getKotakTemplate();

        $('.main-kotak').append(kotak_tpl)
    });

    $(".main-kotak").on("click", ".btn-hapus", (function() {
        $(this).parent().parent().remove();
    }));

    function getKotakTemplate() {
        let tpl = `<div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 child-kotak">
                <div class="col-md-3"> Kotak Kecil </div>
                <button class="btn btn-warning btn-hapus">Hapus</button>
            </div>
        </div>`;

        return tpl;
    }
</script>
@endsection
