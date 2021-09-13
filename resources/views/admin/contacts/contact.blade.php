@extends('layouts.admin.backend-layouts')
@section ('page-title', 'contact||list')
@push ('page-css')
<style>
</style>
@endpush
@section('page-content')
<div class="app-title">
  <div>
    <h1><i class="fa fa-address-book"></i></i> Contact</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Contact Lists</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body mt-col-3 mt-sm-4 mt-md-5">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
              <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Contacted Time</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $key=>$contact)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $contact->name}}</td>
                  <td>{{ $contact->email}}</td>
                  <td>{{ $contact->subject}}</td>
                  <td>{{ $contact->message}}</td>
                  <td>{{ $contact->created_at}}</td>
                  <td class="d-flex">
                      <a class="btn btn-info btn-sm" href="{{ route('admin.contact.show', $contact->id) }}"><i class="fa fa-eye"></i></a>
                      <button onclick="deleteCategory({{ $contact->id }})" type="button" class="btn btn-danger btn-sm waves-effect">
                        </i><i class="fa fa-trash"></i>
                    </button>
                    <form id="delete-form-{{ $contact->id }}"
                        style="dispaly:none"
                          action="{{ route('admin.contact.destroy',$contact->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@push('page-js')
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/backEnd/js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    function deleteCategory(id){
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false,
        })
        swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
        }).then((result) => {
        if (result.value) {
           event.preventDefault();
           document.getElementById('delete-form-'+id).submit();
        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
            'Cancelled',
            'Your imaginary file is safe :)',
            'error'
            )
        }
      })
    }
</script>
@endpush
