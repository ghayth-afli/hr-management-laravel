@extends('layouts.AdminLTE.index')

@section('title')
    <title>{{$entretiens->poste}}</title>
@endsection


@section('css')

    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <!-- END: Custom CSS-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .kkkk {
          padding: 15px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


@section('content')

        <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        
        <div class="content-body">
          <!-- users list start -->

          <section class="app-user-list">
            <!-- list and filter start -->

            <div class="card">
              <div class="card-datatable table-responsive pt-0">
                <div class="kkkk">
                    <table id="example" class="display user-list-table table" style="width:100%" >
                        <thead class="table-light">
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach($entretiens->candidats as $candidat)
                                <tr>
                                        <td>
                                            <div class="avatar">
                                                <img src="{{ asset("images/cvPhoto/".$candidat->photo)}}" alt="avatar" width="32" height="32"/>
                                            </div>
                                        </td>
                                        <td>
                                                <span>{{$candidat->nom}}</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <span>{{$candidat->email}}</span>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-secondary">
                                                <span>{{$candidat->tel}}</span>
                                            </span>
                                        </td>
                                        <td>{{$candidat->adresse}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                            </tr>
                        </tfoot>
                    </table> 
                </div>
              </div>
            </div>
            <!-- list and filter end -->
          </section>
        </div>
      </div>
    </div>
@endsection


@section('js')

    <script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="../../../app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/cleave.min.js"></script>
    <script src="../../../app-assets/vendors/js/forms/cleave/addons/cleave-phone.us.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>

            <script>
                feather.replace()
            </script>
@endsection