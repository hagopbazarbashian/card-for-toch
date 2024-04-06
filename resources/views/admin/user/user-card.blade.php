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
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Card Link</th>
                            <th style="min-width: 100px;">Send Mail</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($cardforms as $cardform)
                        <tr>
                            <td>{{$cardform->user_id}}</td>
                            <td>{{$cardform->user->name}}</td> 
                            <td>{{$cardform->user->email}}</td>
                            <td><a href="https://toch.am/single-card/{{$cardform->id}}" target="_blank" style=" text-transform: lowercase;">https://toch.am/single-card/{{$cardform->id}}</a></td>
                            <td>
                               <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Activate User" href="{{ route('sendmail', $cardform->user->email) }}">
                                    <span class="btn-inner">
                                        <i class="fa-solid fa-paper-plane fa-xs"></i>
                                    </span>
                                </a>
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
    </div>
 </div>

@endsection
