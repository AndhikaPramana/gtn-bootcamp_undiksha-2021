@extends('../component/index')

@section('css')
    <link href="{{ asset('https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.css') }}" rel="stylesheet"
    type="text/css"/>  
@endsection

@section('js')
    <script src = "{{ asset('https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.3/datatables.min.js') }}" 
    type="text/javascript"></script>
    <script src = "{{ asset('assets/demo/default/custom/components/datatables/base/pagination.js') }}"
    type="text/javascript"></script>
@endsection

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                Data Table
                </h3>
            </div>
        </div>
    </div>
    <div class="m-content">
        <div class="m-portlet akses-list">
            <div class="m-portlet__body">
                <div class="table-responsive">
                    <table class="data-table akses-list table table-bordered datatable"
                    data-url="{{ route('produksiDataTable') }}"
                    data-column="{{ json_encode($datatable_column) }}"
                    style="width: 100%">
                    <thead>
                        <tr>
                            <th width="20">No</th>
                            <th class="no-sort">Kode Produksi</th>
                            <th class="no-sort">Lokasi</th>
                            <th class="no-sort">Tanggal Mulai</th>
                            <th class="no-sort">Tanggal Selesai</th>
                            <th class="no-sort">Status</th>
                            <th class="no-sort">Publish</th>
                            <th class="no-sort">Menu</th>
                        </tr>
                    </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
