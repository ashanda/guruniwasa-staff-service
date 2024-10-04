@extends('web.layouts.app')
@section('content')
{{-- {{ dd($staff) }} --}}
@php
 $gettedStaff = $staff;   
@endphp
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD ITEMS
         </h1>
         ITEM SHOP
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 text-end">
         <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow"></i>
         <span class=" text-uppercase font-13 fw-bold text-dark"> Download excel</span>
         <p>
            <a class=" rounded-pill font-13 w-100 text-white rounded-3 py-2 px-3
               bg-secondary fw-500 align-items-center " data-bs-toggle="modal" data-bs-target="#addItemsForm">
            <i class="fa fa-plus"></i>  Add Items
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
                     <form action="{{ route('web.item-shop.add_items') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body modal-lg">
                           <div class="row">
                                 <div class="col-6">
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">ITEM NAME</label>
                                       <input type="text" name="name" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">ITEM CODE</label>
                                       <input name="code" type="text" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">CATEGORY</label>
                                       <select name="category_id" class="form-select fw-500 rounded-3 border-dark font-13" aria-label="Default select example" required>
                                             @foreach ($data as $category)
                                             <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                             @endforeach
                                       </select>
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">IMAGE</label>
                                       <input type="file" name="image" class="form-control fw-500 rounded-3 border-dark font-13">
                                    </div>
                                 </div>
                                 <div class="col-6">
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">COMMISSION ACCOUNT</label>
                                       <select id="commission_account_select" class="form-select fw-500 rounded-3 border-dark font-13" required>
                                          <option value="" disabled selected>Select Commission Account</option>
                                          @foreach ($staff['staff']['data'] as $staff)
                                          <option value="{{ $staff['id'] }}|{{ $staff['name'] }}">{{ $staff['name'] }}</option>
                                          @endforeach
                                       </select>
                                       <input type="hidden" name="commission_account_id" id="commission_account_id">
                                       <input type="hidden" name="commission_account_name" id="commission_account_name">
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">RATE</label>
                                       <input type="text" name="rate" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">PRICE</label>
                                       <input type="number" min="100" name="price" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                    </div>
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">WEIGHT (KG)</label>
                                       <input type="number" min="0.1" name="weight" step="0.1" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <div class="mb-2">
                                       <label class="form-label font-14 fw-bold text-purple mb-0">DETAILS</label>
                                       <textarea name="details" class="form-control fw-500 rounded-3 border-dark font-13" rows="5"></textarea>
                                    </div>
                                 </div>
                           </div>
                           <div class="text-center">
                                 <button type="submit" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500 text-white">SUBMIT</button>
                           </div>
                        </div>
                     </form>

                  </div>
               </div>
            </div>
         </div>


         <div class="row justify-content-end mt-3">
            <div class="col-lg-9">
               <select class="form-select form-select-lg border border-info rounded-pill font-13 fw-500 text-dark py-2 " aria-label=".form-select-lg example">
                   @foreach ($data as $category)
                       <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                   @endforeach
               </select>
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
                  <th>CODE</th>
                  <th>NAME</th>
                  <th>IMAGE
                  </th>
                  <th>CATEGORY
                  </th>
                  <th>PRICE
                  </th>
                  <th>ITEM DETAILS
                  </th>
                  <th>COMISSION ACC
                  </th>
                  <th>RATE
                  </th>
                  
                  <th>EDIT /
                     DELETE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  @foreach ($allIteams['data'] as $item)
                  <tr>
                     <td>{{ $item['code'] }}</td>
                     <td>{{ $item['name'] }}</td></td>
                     <td>
                        <img class="d-block w-50 mx-auto rounded-circle" src="{{asset('themes/default/img/place-holder.png')}}"
                           alt="Guru Niwasa LMS">
                     </td>
                     <td>{{ $item['category']['name'] }}</td>
                     <td>{{ $item['price'] }}</td>

                     <td> {{ $item['details'] }}</td>

                     <td>
                        {{ $item['commission_account'] }}
                     </td>
                     <td>{{ $item['rate'] }}</td>
                     
                     <td>

                        <button class="btn btn-warning fw-500 font-11 px-2 w-100 rounded-pill text-white mb-2"
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
                                    <form action="{{ route('web.item-shop.add_items') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                                       <div class="modal-body modal-lg">
                                          <div class="row">
                                                <div class="col-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">ITEM NAME</label>
                                                      <input type="text" name="name" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $item['name'] }}" required>
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">ITEM CODE</label>
                                                      <input name="code" type="text" class="form-control fw-500 rounded-3 border-dark font-13"value="{{ $item['code'] }}" required>
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">CATEGORY</label>
                                                      <select name="category_id" class="form-select fw-500 rounded-3 border-dark font-13" aria-label="Default select example" required>
                                                            @foreach ($data as $category)
                                                            <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                                                            @endforeach
                                                      </select>
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">IMAGE</label>
                                                      <input type="file" name="image" class="form-control fw-500 rounded-3 border-dark font-13">
                                                   </div>
                                                </div>
                                                <div class="col-6">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">COMMISSION ACCOUNT</label>
                                                      
                                                     
                                                        <select id="commission_account_select" class="form-select fw-500 rounded-3 border-dark font-13" required>
                                                               <option value="" disabled selected>Select Commission Account</option>
                                                               
                                                               @foreach ($gettedStaff['staff']['data'] as $singleStaff)
                                                                  
                                                                  <option value="{{ $singleStaff['id'] }}|{{ $singleStaff['name'] }}">{{ $singleStaff['name'] }}</option>
                                                               @endforeach
                                                            </select>
                                                      </select>
                                                      <input type="hidden" name="commission_account_id" id="commission_account_id" value="{{ $item['commission_account_id'] }}">
                                                      <input type="hidden" name="commission_account_name" id="commission_account_name" value="{{ $item['commission_account'] }}">
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">RATE</label>
                                                      <input type="text" name="rate" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $item['rate'] }}" required>
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">PRICE</label>
                                                      <input type="number" min="100" name="price" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $item['price'] }}" required>
                                                   </div>
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">WEIGHT (KG)</label>
                                                      <input type="number" min="0.1" name="weight" step="0.1" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $item['weight'] }}" required>
                                                   </div>
                                                </div>
                                                <div class="col-12">
                                                   <div class="mb-2">
                                                      <label class="form-label font-14 fw-bold text-purple mb-0">DETAILS</label>
                                                      <textarea name="details" class="form-control fw-500 rounded-3 border-dark font-13" rows="5">{{ $item['details'] }}</textarea>
                                                   </div>
                                                </div>
                                          </div>
                                          <div class="text-center">
                                                <button type="submit" class="btn text-uppercase font-12 text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500 text-white">SUBMIT</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>

                                                <button class="btn btn-danger fw-500 font-11 px-2 w-100 rounded-pill text-white"
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
                                       <div class="col-12">
                                          <p class=" fw-500 font-14 rounded-3 text-dark pb-3">
                                             Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                          </p>
                                          <button type="button" class="btn  font-14 text-white gradient-background-1 py-2 px-5  ">
                                          Submit</button>
                                       </div>
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
@section('scripts')
<script>
document.getElementById('commission_account_select').addEventListener('change', function() {
    const selectedValue = this.value;

    if (selectedValue) {
        const [id, name] = selectedValue.split('|');

        // Assign the id and name to the hidden inputs
        document.getElementById('commission_account_id').value = id;
        document.getElementById('commission_account_name').value = name;
    }
});
</script>
@endsection
