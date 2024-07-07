@extends('admin.layout.app')
@section('admin_home')
@section('title', 'Category') 
<div class="container-fluid">
    <div class="row">
       <div class="col-sm-12">
          <div class="card">
             <div class="card-header border-bottom d-flex justify-content-between align-items-center pb-3">
                <div class="d-flex align-items-center pt-3">
                   <div class="form-group">
                      <select class="form-control select2-basic-multiple" placeholder="No Action">
                         <option>No Action</option>
                         <option>Status</option>
                         <option>Delete</option>
                      </select>
                   </div>
                   <a href="{{ route('admin-category.create') }}" class="btn btn-primary ml-3">Add Category</a>
                </div>
             </div>
             <div class="card-body">
                <div class="table-responsive rounded py-4 table-space">
                    <table id="user-list-table" class="table custom-table" role="grid" data-toggle="data-table">
                       <thead>
                          <tr class="ligth">
                             <th>*</th>
                             <th>Name</th>
                             <th>Photo</th>
                             <th style="min-width: 100px;">Edit</th>
                             <th style="min-width: 100px;">Delete</th>
                          </tr>
                       </thead>
                       <tbody> 
                         @foreach ($categorys as $key=>$category)
                         <tr>
                             <td>{{$key+1}}</td>
                             <td>{{$category->name}}</td>
                             <td>{{$category->photo}}</td>
                             <td>
                                <div class="flex align-items-center list-user-action">
                                 <a class="btn btn-sm btn-icon btn-success rounded" data-bs-toggle="tooltip" data-placement="top" title="Activate User" href="{{ route('admin-category.edit', $category->id) }}">
                                     <span class="btn-inner">
                                         <i class="fa-solid fa-user-plus fa-xs"></i>
                                     </span>
                                 </a>
                                </div>
                             </td>
                             <td>
                                 <div class="flex align-items-center list-user-action">
                                     <form action="{{ route('admin-category.destroy', $category->id) }}" method="post">
                                         @csrf
                                         @method('DELETE')
                                         <button  class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</button>
                                     </form>
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
 </div>

@endsection
