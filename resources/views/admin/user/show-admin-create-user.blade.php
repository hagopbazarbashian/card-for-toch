@extends('admin.layout.app')
@section('admin_home')
@section('title'){{'User List'}}@endsection
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select type="select" class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                      <button class="btn btn-primary">Apply</button>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive rounded py-4 table-space">
                   <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                      <thead>
                         <tr class="ligth">
                            <th>*</th>
                            <th>File</th>
                            {{-- <th style="min-width: 100px;">Action</th> --}}
                         </tr>
                      </thead>
                      <tbody>
                        @foreach (file($noteFilePath) as $key => $subscribe)
                        <tr>
                            <td style="text-transform: unset;">{{ $key + 1 }}</td>
                            <td style="text-transform: unset;">{{ $subscribe }}</td>
                        </tr>
                        @endforeach 
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection

