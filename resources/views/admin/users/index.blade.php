@extends('layouts.backend.app')

@section('title', 'Users')

@push('css')

@endpush
@section('content')

	<div class="card-footer">
         <a class="btn btn-success" href="{{route('user.create')}}">Add New</a>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable of Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>UserName</th>
                  <th>Eamil</th>
                  <th>Role</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($users as $key=>$user)
                <tr>
                  <th scope="row">{{ $key + 1}}</th>
                  <td>{!! $user->name !!}</td>
                  <td>{!! $user->email !!}</td>
                  <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                  <td><div class="btn-group">
                    <a type="button" class="btn btn-info">Action</a>

                    <a type="button" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown">
                      <div class="dropdown-menu" role="menu">
                        <a type="button" class="dropdown-item" href="{{route('user.show',$user->id)}}"><i class="nav-icon fas fa-eye">&nbsp &nbsp View</i></a>
                        <a type="button" class="dropdown-item" href="{{route('user.edit', $user->id)}}"><i class="nav-icon fas fa-edit">&nbsp &nbsp Edit</i></a>


                        <a class="dropdown-item" type="button" onclick="deleteUser({{ $user->id}})"><i class="nav-icon fas fa-trash-alt">&nbsp &nbsp Delete</i>
                        </a>
	                        <form id="delete-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id )}}" method="POST" style="display: none;">
	                            @csrf
	                            @method('delete')
	                        </form>
                      </div>
                    </a>
                  </div></td>
				</tr>
				@endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        
      			</div>
    		</div>
          </div>
    </section>
    <!-- /.content -->


@endsection

@push('js')
<script src="{{asset('assets/backend/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script type="text/javascript">
        function deleteUser(id)
        {
            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, delete it!',
              cancelButtonText: 'No, cancel!',
              reverseButtons: true
            }).then((result) => {
              if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
              } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
              ) {
                swalWithBootstrapButtons.fire(
                  'Cancelled',
                  'Your Data is safe :)',
                  'error'
                )
              }
            })
        }
</script>
@endpush