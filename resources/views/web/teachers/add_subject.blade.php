@extends('web.layouts.app')
@section('content')
{{-- {{ dd($data)}} --}}
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="{{ route('web.home') }}"  class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD SUBJECTS
         </h1>
         <p class="font-18 fw-bold text-purple">{{ request('gname') }}
         </p>
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3 ">
         <div class="text-end">
            <i class="fa-solid fa-file-excel fs-2 text-success mb-2 hvr-grow "></i>
            <span class=" text-uppercase font-13 fw-bold text-dark text-end"> Download excel</span>
         </div>
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <div class="row justify-content-end pt-2">
                  <div class="col-lg-10 ">
                     <a class=" " data-bs-toggle="modal" data-bs-target="#addSubject">
                        <ul class="d-flex justify-content-center font-14 text-white 
                           my-1 py-2 px-3 bg-dark fw-500 align-items-center  rounded-pill">
                           <li><i class="fa fa-plus"></i></li>
                           <li class="  ps-2"> Add Subject </li>
                        </ul>
                     </a>
                     <div class="modal fade" id="addSubject" data-bs-backdrop="static" 
                        tabindex="-1" aria-labelledby="addSubject" aria-hidden="true" >
                        <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                 <form action="{{ route('subjects.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">SUBJECT NAME</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13" name="sname" required>
                                                <input type="hidden" name="gid" value="{{ $id }}" required>
                                             </div>
                                        </div>
                                      

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">TEACHER</label>
                                                <select name="tid" id="" class="form-select fw-500 rounded-3 border-dark font-13" required>
                                                   @foreach ($data['all_teachers']['data'] as $item)
                                                    <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                                   @endforeach
                                                </select>
                                             </div>
                                        </div>



                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">FEE</label>
                                                <input type="number" min="100"  class="form-control fw-500 rounded-3 border-dark font-13" name="fee" required>
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">RETENTION</label>
                                                <input type="number" min="1" class="form-control fw-500 rounded-3 border-dark font-13" name="retention" >
                                             </div>
                                        </div>
                                         <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Type</label>
                                                <select name="class_type" id="" class="form-select fw-500 rounded-3 border-dark font-13" required>
                                                   <option value="Online">Online</option>
                                                   <option value="Free">Free</option>
                                                   <option value="Offline">Offline</option>
                                                </select>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">WHATSAPP GROUP LINK</label>
                                                <input name="whats_app" type="text" class="form-control fw-500 rounded-3 border-dark font-13"  required>
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">DAY Normal</label>
                                                <select name="day_normal" class="form-control fw-500 rounded-3 border-dark font-13"  required>
                                                      <option value="Monday">Monday</option>
                                                      <option value="Tuesday">Tuesday</option>
                                                      <option value="Wednesday">Wednesday</option>
                                                      <option value="Thursday">Thursday</option>
                                                      <option value="Friday">Friday</option>
                                                      <option value="Saturday">Saturday</option>
                                                      <option value="Sunday">Sunday</option>
                                                </select>
                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_normal" class="form-control fw-500 rounded-3 border-dark font-13"  required>
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_normal" class="form-control fw-500 rounded-3 border-dark font-13"  required>
                                             </div>
                                        </div>

                                         <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day</label>
                                                <select name="day_extra1" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                     <option >Select</option>
                                                     <option value="Monday">Monday</option>
                                                      <option value="Tuesday">Tuesday</option>
                                                      <option value="Wednesday">Wednesday</option>
                                                      <option value="Thursday">Thursday</option>
                                                      <option value="Friday">Friday</option>
                                                      <option value="Saturday">Saturday</option>
                                                      <option value="Sunday">Sunday</option>
                                                </select>
                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_extra1" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_extra1" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>
                                        

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day</label>
                                                <select name="end_extra1" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                                      <option >Select</option>
                                                      <option value="Monday">Monday</option>
                                                      <option value="Tuesday">Tuesday</option>
                                                      <option value="Wednesday">Wednesday</option>
                                                      <option value="Thursday">Thursday</option>
                                                      <option value="Friday">Friday</option>
                                                      <option value="Saturday">Saturday</option>
                                                      <option value="Sunday">Sunday</option>
                                                </select>
                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_extra2" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_extra2" class="form-control fw-500 rounded-3 border-dark font-13"  >
                                             </div>
                                        </div>


                                    </div>
                                  
                                   
                                    <div class="text-center mt-3">
                                       <button type="submit" class="btn text-uppercase font-12 
                                          text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Submit                                    </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
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
            <table id="addSubjectTbl" class="table table-striped table-hover table-bordered">
               <thead class="text-white gradient-background text-uppercase fw-light font-14">
                  <th>SUBJECT NAME</th>
                  <th>TEACHER  
                  </th>
                  <th>WHATSAPP GROUP LINK
                  </th>
                  <th>FEE
                  </th>
                  <th>EDIT
                     DELETE
                  </th>
                  </tr>
               </thead>
               <tbody class="font-13 fw-500 align-items-center">
                  
                  @foreach( $data['subjects'] as $data)
                  <tr>
                     <td>{{ $data['subject']['sname'] }}</td>
                     <td>{{ $data['teacher']['data']['name'] ?? 'N/A' }}</td>
                     <td>{{ $data['subject']['whats_app'] }}</td>
                     <td>{{ $data['subject']['fee'] }}</td>
                    <td>
                      
                         <button class="btn btn-warning fw-bolder font-11 px-2 w-100 rounded-pill mb-2"
                         data-bs-toggle="modal" data-bs-target="#edtSubject">Edit</button>



                         <div class="modal fade" id="edtSubject" data-bs-backdrop="static" 
                            tabindex="-1" aria-labelledby="edtSubject" aria-hidden="true" >
                            <div class="modal-dialog modal-lg">
                               <div class="modal-content">
                                  <div class="modal-header">
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                     <form action="{{ route('subjects.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">SUBJECT NAME</label>
                                                <input type="text" class="form-control fw-500 rounded-3 border-dark font-13" name="sname" value="{{ $data['subject']['sname'] }}" required>
                                                <input type="hidden" name="sid" value="{{ $data['subject']['id'] }}" required>
                                                 <input type="hidden" name="tid" value="{{ $data['subject']['tid'] }}" required>
                                             </div>
                                        </div>
                                    
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">FEE</label>
                                                <input type="number" min="100"  class="form-control fw-500 rounded-3 border-dark font-13" name="fee" value="{{ $data['subject']['fee'] }}" required>
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">RETENTION</label>
                                                <input type="number" min="1" class="form-control fw-500 rounded-3 border-dark font-13" name="retention" value="{{ $data['subject']['retention'] }}">
                                             </div>
                                        </div>
                                         <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Type</label>
                                                <select name="class_type" id="" class="form-select fw-500 rounded-3 border-dark font-13" required>
                                                   <option value="Online" {{ $data['subject']['class_type'] == 'Online' ? 'selected' : '' }}>Online</option>
                                                   <option value="Free" {{ $data['subject']['class_type'] == 'Free' ? 'selected' : '' }}>Free</option>
                                                   <option value="Offline" {{ $data['subject']['class_type'] == 'Offline' ? 'selected' : '' }}>Offline</option>
                                                </select>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">WHATSAPP GROUP LINK</label>
                                                <input name="whats_app" type="text" class="form-control fw-500 rounded-3 border-dark font-13"  required value="{{ $data['subject']['whats_app'] }}">
                                             </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">DAY Normal</label>
                                                <select name="day_normal" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                                   <option value="Monday" {{ $data['subject']['day_normal'] == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                   <option value="Tuesday" {{ $data['subject']['day_normal'] == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                   <option value="Wednesday" {{ $data['subject']['day_normal'] == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                   <option value="Thursday" {{ $data['subject']['day_normal'] == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                   <option value="Friday" {{ $data['subject']['day_normal'] == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                   <option value="Saturday" {{ $data['subject']['day_normal'] == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                   <option value="Sunday" {{ $data['subject']['day_normal'] == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                </select>
                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_normal" class="form-control fw-500 rounded-3 border-dark font-13" required value="{{ $data['subject']['start_normal'] }}"  required>
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_normal" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $data['subject']['end_normal'] }}"  required>
                                             </div>
                                        </div>

                                         <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day</label>
                                                <select name="day_extra1" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                                   <option value="Monday" {{ $data['subject']['day_extra1'] == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                   <option value="Tuesday" {{ $data['subject']['day_extra1'] == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                   <option value="Wednesday" {{ $data['subject']['day_extra1'] == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                   <option value="Thursday" {{ $data['subject']['day_extra1'] == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                   <option value="Friday" {{ $data['subject']['day_extra1'] == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                   <option value="Saturday" {{ $data['subject']['day_extra1'] == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                   <option value="Sunday" {{ $data['subject']['day_extra1'] == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                </select>

                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_extra1" class="form-control fw-500 rounded-3 border-dark font-13" value="{{ $data['subject']['start_extra1'] }}" >
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_extra1" class="form-control fw-500 rounded-3 border-dark font-13"  value="{{ $data['subject']['end_extra1'] }}">
                                             </div>
                                        </div>
                                        

                                        <div class="col-lg-6">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Alternate Day</label>
                                                <select name="end_extra1" class="form-control fw-500 rounded-3 border-dark font-13" required>
                                                   <option value="Monday" {{ $data['subject']['end_extra1'] == 'Monday' ? 'selected' : '' }}>Monday</option>
                                                   <option value="Tuesday" {{ $data['subject']['end_extra1'] == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                                                   <option value="Wednesday" {{ $data['subject']['end_extra1'] == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                                                   <option value="Thursday" {{ $data['subject']['end_extra1'] == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                                                   <option value="Friday" {{ $data['subject']['end_extra1'] == 'Friday' ? 'selected' : '' }}>Friday</option>
                                                   <option value="Saturday" {{ $data['subject']['end_extra1'] == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                                                   <option value="Sunday" {{ $data['subject']['end_extra1'] == 'Sunday' ? 'selected' : '' }}>Sunday</option>
                                                </select>
                                             </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">Strart Time </label>
                                                <input type="time" name="start_extra2" class="form-control fw-500 rounded-3 border-dark font-13"  value="{{ $data['subject']['start_extra2'] }}">
                                             </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mb-2">
                                                <label class="form-label font-14 fw-bold text-purple text-start  mb-0">End Time </label>
                                                <input type="time" name="end_extra2" class="form-control fw-500 rounded-3 border-dark font-13"  value="{{ $data['subject']['end_extra2'] }}">
                                             </div>
                                        </div>


                                    </div>
                                  
                                   
                                    <div class="text-center mt-3">
                                       <button type="submit" class="btn text-uppercase font-12 
                                          text-white rounded-pill py-2 px-5 w-50 bg-primary fw-500   text-white ">Submit</button>
                                    </div>
                                 </form>
                                  </div>
                               </div>
                            </div>
                         </div>


                         <button class="btn btn-danger fw-bolder font-11 px-2 w-100 rounded-pill text-white"
                           onclick="confirmDelete({{ $data['subject']['id'] }})">DELETE</button>
                        <form action="{{ route('subjects.destroy') }}" method="POST" id="deleteForm">
                           @csrf
                           <!-- Hidden input for subject ID -->
                           <input type="hidden" name="sid" id="deleteSubjectId">
                        </form>


                    </td>
                    @endforeach
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')

<script>
function confirmDelete(subjectId) {
    // SweetAlert confirmation
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, set the subject ID in the form and submit it
            document.getElementById('deleteSubjectId').value = subjectId;
            document.getElementById('deleteForm').submit();
        }
    });
}
</script>
@endsection