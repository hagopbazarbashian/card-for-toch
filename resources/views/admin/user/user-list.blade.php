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
                            <th>Name</th>
                            <th>Email</th>
                            <th>status</th>
                            <th style="min-width: 100px;">Activate</th>
                             <th style="min-width: 100px;">Reset Password</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key=>$user)
                        <tr>
                            <td class="text-center">{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            @if ($user->status == 0)
                            <td><span class="badge bg-primary">Not active</span></td>
                            @else
                            <td><span class="btn btn-success">User card Activ</span></td>
                            @endif
                            <td>
                               <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Activate User" href="{{ route('user-admin.update', $user->id) }}">
                                    <span class="btn-inner">
                                        <i class="fa-solid fa-user-plus fa-xs"></i>
                                    </span>
                                </a> 
                               </div>
                            </td>
                            <td>
                               <div class="flex align-items-center list-user-action">
                                <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Reset User Password" href="{{ route('user-admin.edit', $user->id) }}">
                                    <span class="btn-inner">
                                        <i class="fa-solid fa fa-key fa-xs"></i>
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
