@extends('web.layouts.app')
@section('content')

<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD ITEMS CATEGORIES
         </h1>
         ITEM SHOP
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
         <p>
            <a class=" rounded-pill font-13 w-100 text-white rounded-3 py-2 px-3
               bg-secondary fw-500 align-items-center " data-bs-toggle="modal" data-bs-target="#addItemsForm">
            <i class="fa fa-plus"></i>  Add Items Categories
            </a>
         </p>
         <div class="modal fade" id="addItemsForm" data-bs-backdrop="static" tabindex="-1"
            aria-labelledby="addItemsForm" aria-hidden="true">
            <div class="modal-dialog text-start">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title font-18 fw-bold   text-purple pt-lg-0 pt-1" id="staticBackdropLabel">
                        Add Items
                     </h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <form action="{{ route('item-categories.store') }}" method="POST">
                        @csrf
                        <div class="modal-body modal-lg">
                           <div class="row">
                              <div class="col-12">
                                 <div class="mb-12 ">
                                    <label class="form-label font-14 fw-bold text-purple text-uppercase mb-0">Category NAME </label>
                                    <input type="text" name="category_name" class="form-control fw-500 rounded-3 border-dark font-13">
                                 </div>
                              </div>
                              
                           <div class="text-center mt-3" >
                              <button type="submit" class="btn text-uppercase font-12
                                 text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500 text-white ">SUBMIT</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>



      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
         <div class="table-responsive  ">
            <table id="addItems" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  
                  <th>NAME</th>
                  
                  
                  <th style="width: 20%;">EDIT /
                     DELETE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                @foreach($data as $category)
                  <tr>
                     
                     <td>
                        {{ $category['name'] }}
                     </td>
                     
                     <td >
                        <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white mb-2"
                           data-bs-toggle="modal" data-bs-target="#errorDelete">
                        DELETE</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="errorDelete"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                        <form action="{{ route('item-categories.delete') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="category_id" value="{{ $category['id'] }}">
                                            <div class="col-12">
                                                <p class=" fw-500 font-14 rounded-3 text-dark pb-3">
                                                    Are you sure you want to delete this category?
                                                </p>
                                                <button type="submit" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                                Submit</button>
                                            </div>
                                        </form>
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white"
                           data-bs-toggle="modal" data-bs-target="#disEdit">
                        EDIT</button>
                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="disEdit"
                           tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                           <div class="modal-dialog modal-dialog-centered ">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body ">
                                    <div class="row">
                                        <form action="{{ route('item-categories.update') }}" method="POST">
                                            @csrf
                                       <div class="col-12">
                                          <input type="hidden" name="category_id" value="{{ $category['id'] }}">
                                          <input type="text" name="category_name" value="{{ $category['name'] }}" class="form-control fw-500 rounded-3 border-dark font-13">
                                          <button type="submit" class="btn  font-14 text-white gradient-background-1 py-2 px-5 text-center mt-3" >
                                          Submit</button>
                                       </div>
                                    </form>
                                    </div>
                                 </div>
                              </div>
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
@endsection
