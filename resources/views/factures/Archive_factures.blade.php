@extends('layouts.master')
@section('title')
     Archive des factures
@stop
@section('css')
    <!-- Internal Data table css -->
    <link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Factures</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ أرشيف
                    Les factures</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('archive_facture'))
        <script>
            window.onload = function() {
                notif({
                    msg: "archivage réussi",
                    type: "success"
                })
            }

        </script>
    @endif

    @if (session()->has('delete_facture'))
        <script>
            window.onload = function() {
                notif({
                    msg: " facture supprimée ",
                    type: "success"
                })
            }

        </script>
    @endif

    <!-- row -->
    <div class="row">
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'>
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">#</th>
                                    <th class="border-bottom-0">num_facture </th>
                                    <th class="border-bottom-0">date_début </th>
                                    <th class="border-bottom-0">date_fin</th>
                                    <th class="border-bottom-0">categorie</th>
                                    <th class="border-bottom-0">date payment</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                                @foreach ($factures as $facture)
                                    @php
                                    $i++
                                    @endphp
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $facture->facture_number }} </td>
                                        <td>{{ $facture->facture_Date }}</td>
                                        <td>{{ $facture->Due_date }}</td>
                                        <td>{{ $facture->product }}</td>
                                        <td><a
                                                href="{{ url('facturesDetails') }}/{{ $facture->id }}">{{ $facture->section->section_name }}</a>
                                        </td>
                                        <td>{{ $facture->Discount }}</td>
                                        <td>{{ $facture->Rate_VAT }}</td>
                                        <td>{{ $facture->Value_VAT }}</td>
                                        <td>{{ $facture->Total }}</td>
                                        <td>
                                            @if ($facture->Value_Status == 1)
                                                <span class="text-success">{{ $facture->Status }}</span>
                                            @elseif($facture->Value_Status == 2)
                                                <span class="text-danger">{{ $facture->Status }}</span>
                                            @else
                                                <span class="text-warning">{{ $facture->Status }}</span>
                                            @endif

                                        </td>

                                        <td>{{ $facture->note }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">actions<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item" href="#" data-facture_id="{{ $facture->id }}"
                                                        data-toggle="modal" data-target="#Transfer_facture"><i
                                                            class="text-warning fas fa-exchange-alt"></i>&nbsp;&nbsp;aller à la facture
                                                        </a>
                                                    <a class="dropdown-item" href="#" data-facture_id="{{ $facture->id }}"
                                                        data-toggle="modal" data-target="#delete_facture"><i
                                                            class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;supression
                                                        la facture</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/div-->
    </div>

    <!-- حذف الفاتورة -->
    <div class="modal fade" id="delete_facture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">supprimer facture </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('Archive.destroy', 'test') }}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    Etes-vous sur de supprimer?
                    <input type="hidden" name="facture_id" id="facture_id" value="">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ignorer</button>
                    <button type="submit" class="btn btn-danger">valider</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--ignorer الارشفة-->
    <div class="modal fade" id="Transfer_facture" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ignorer archivage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('Archive.update', 'test') }}" method="post">
                        {{ method_field('patch') }}
                        {{ csrf_field() }}
                </div>
                <div class="modal-body">
                    Etes-vous sures d'ignorer l'archivage?
                    <input type="hidden" name="facture_id" id="facture_id" value="">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ignorer</button>
                    <button type="submit" class="btn btn-success">valider</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
    <!--Internal  Datatable js -->
    <script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>

    <script>
        $('#delete_facture').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var facture_id = button.data('facture_id')
            var modal = $(this)
            modal.find('.modal-body #facture_id').val(facture_id);
        })

    </script>

    <script>
        $('#Transfer_facture').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var facture_id = button.data('facture_id')
            var modal = $(this)
            modal.find('.modal-body #facture_id').val(facture_id);
        })

    </script>

@endsection