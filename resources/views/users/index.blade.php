@extends('layouts.AdminLTE.index')


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
                    <button data-v-32017d0f="" type="button" class="btn btn-primary " ><span data-v-32017d0f="" class="text-nowrap">Ajouter</span></button>

                        <thead class="table-light">
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Statut</th>
                                <th>Créé</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        <div class="avatar">
                                            <img src="{{ asset($user->avatar) }}" alt="avatar" width="32" height="32"/>
                                        </div>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    @if($user->isOnline())
                                        <td><span data-v-32017d0f="" class="badge text-capitalize badge-light-success badge-pill"> active </span></td>
                                    @else
                                        <td><span data-v-32017d0f="" class="badge text-capitalize badge-light-secondary badge-pill"> inactive </span></td>
                                    @endif
                                    <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                                    
                                        <td>
                                        @if ($user->id != 1)
                                            <a href=""><i class="fa-solid fa-delete-left"></i></a>
                                            <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href=""><i class="fa-solid fa-eye"></i></a>
                                        @endif
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Nom</th>
                                <th>E-mail</th>
                                <th>Statut</th>
                                <th>Créé</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table> 
                </div>
                

              </div>
              <!-- Modal to Ajouter Un Responsable starts-->
              <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                <div class="modal-dialog">
                  <form class="add-new-user modal-content pt-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                    <div class="modal-header mb-1">
                      <h5 class="modal-title" id="exampleModalLabel">Ajouter un responsable </h5>
                    </div>
                    <div class="modal-body flex-grow-1">
                      <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Nom</label>
                        <input
                          type="text"
                          class="form-control dt-full-name"
                          id="basic-icon-default-fullname"
                          placeholder="John Doe"
                          name="user-fullname"
                        />
                      </div>
                      <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control dt-email"
                          placeholder="john.doe@example.com"
                          name="email"
                        />
                      </div>
                      <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-contact">Mot de passe</label>
                        <input
                          type="password"
                          id="basic-icon-default-contact"
                          class="form-control dt-contact"
                          name="password"
                        />
                      </div>
                      <div class="mb-1">
                        <label class="form-label" for="user-role">Role</label>
                        <select id="user-role" class="select2 form-select">
                          <option value="subscriber">Subscriber</option>
                          <option value="editor">Editor</option>
                          <option value="maintainer">Maintainer</option>
                          <option value="author">Author</option>
                          <option value="admin">Admin</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary me-1 data-submit">Soumettre</button>
                      <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Modal to Ajouter Un Responsable Ends-->
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