@extends('web.layouts.app')
@section('content')
<div class="container-fluid">
   <div class="row align-items-center pt-2">
      <div class="col-lg-3 col-sm-3">
         <a href="/" class="hvr-icon-back text-uppercase font-13 fw-bold text-purple">
         <i class="fa-regular fa-circle-left hvr-icon"></i>
         BACK TO HOME
         </a>
      </div>
      <div class="col-lg-6 col-sm-6 text-center">
         <h1 class="font-36 fw-bold text-uppercase text-purple">ADD TRANSACTION


         </h1>
         
      </div>
      <div class="col-lg-3 col-sm-3 pt-lg-0 pt-3">
         <div class="row justify-content-end">
            <div class="col-lg-11">
               <form action=" " method="get">
                  <input class="border border-info rounded-pill font-15 fw-500 text-dark py-2 form-control "
                     type="search" name="searchKey" id="search" placeholder="Search" aria-label="Search"
                     style=" outline: none;">
                  <button type="submit " class="border-0 serch-btn">
                  <i class="fa-solid fa-magnifying-glass fs-4"></i>
                  </button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid py-lg-5 py-3 px-lg-5 ">
   <div class="row middle-hight">
      <div class="col-12">
        
         <div class="row align-items-center">
            <div class="col-lg-4 col-sm-6 py-3 mx-auto">
            
                <div class="card p-3">
                   <div class="row">
                       <div class="col-12">
                           <p class=" text-center font-15 fw-bold text-purple">
                            PAYMENT NUMBER 240227001
                           </p>
                       </div>
                      <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio1">RECEIPT</label>
                          </div>
                      </div>
                      <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio1">PAYMENT</label>
                          </div>
                      </div>
                      
                      
                   
             </div>
          </div>
       </div>
            <div class="col-lg-5 col-sm-6 py-3 mx-auto">
            
                     <div class="card p-3">
                        <div class="row">
                            <div class="col-12">
                                <p class=" text-center font-15 fw-bold text-purple">
                                    OFFICE MEMBER NAME
                                </p>
                            </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">EMP 0001</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">GNI 2244</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">MARKETING MANAGER</p>
                           </div>
                           <div class="col-6">
                              <p class="font-14 fw-bolder text-dark ">077 287 9970 </p>
                           </div>
                           
                        
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-8 col-sm-12">
         <div class="alert alert-primary" role="alert">
            
            <div class="row pt-2">
               <div class="col-12">
                  <h2 class="font-17 pt-2 pb-3 fw-bold text-purple">PAYMENT DETAILS
                  </h2>
                  <form action="">
                    <div class="row">
                       <div class="col-lg-5 col-sm-5 col-6">
                          <select class="form-select form-select-lg border border-info rounded-pill font-13 fw-500 text-dark py-2 " 
                          aria-label=".form-select-lg example">
                             <option selected="">CATEGORY  </option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                          </select>
                       </div>
                       <div class="col-lg-5 col-sm-5 col-6">
                          <select class="form-select form-select-lg border border-info rounded-pill font-13 fw-500 text-dark py-2 "
                           aria-label=".form-select-lg example">
                             <option selected="">SUB CATEGORY</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                          </select>
                       </div>
                     
                    </div>
                 </form>
                  <div class="row pt-3">
                     <div class="col-lg-8">
                        <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">Payment Method - Bank Payment
                        </h3>
                     </div>
                     <div class="col-lg-4 text-end">
                        <h3 class="font-14 pt-2 pb-3 fw-bold text-dark">AMOUNT
                        </h3>
                     </div>
                     <div class="col-12">
                        <div class="row align-items-center "  id="item-container">
                            <div class="col-7">
                               <input type="text" class="form-control fw-500 font-13 rounded-3 border-dark" placeholder="Enter Item or Service">
       
                            </div>
                            <div class="col-4 text-end">
                               <input type="number" class="form-control fw-500 font-13 rounded-3 border-dark" placeholder="Enter Amount">
                           
                            </div>
                            <div class="col-1 text-end">
                                
                                <span class="remove-btn ">
                                    <i class="fa-solid fa-circle-xmark text-danger fs-4"></i>
                                </span>
                             </div>
 


                           </div>
                         
                           <button id="add-row-btn" class="btn btn-primary fw-500 font-13  mt-2 w-50 mx-auto">+ Add Row</button>
                    </div>

                     
                     <div class="total-box text-end fopnt-14 text-dark fw-500 bd-blue-100 p-3 rounded-3">
                        <p>Total: 3600.00</p>
                        <p>Discount: -600.00</p>
                        <p><strong>Grand Total: 3300.00</strong></p>
                     </div>
                     <div class="row pb-3">
                        <div class="col-12">

                            <h4 class=" font-14 fw-bold text-purple  mb-0">PAYMENT PROOF</h4>
                            <div class="bd-example">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                  <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio1">CASH</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                  <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio2">CARD</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio"   id="inlineRadio3" value="option3" >
                                  <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio3">CHEQUE</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio"   id="inlineRadio3" value="option3" >
                                    <label class="form-check-label font-14  fw-bold text-dark" for="inlineRadio3">ONLINE</label>
                                  </div>
                                </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 col-sm-6 mb-2">
                            <label class="form-label font-14 fw-bold text-purple  mb-0">DATE AND TIME ON THE SLIP
                            </label>
                            <input type="text" class="form-control fw-500 rounded-3 border-dark">
                        </div>
                        <div class="col-lg-6 col-sm-6  mb-2">
                            <label class="form-label font-14 fw-bold text-purple  mb-0">SELECT THE BANK

                            </label>
                            <select class="form-select fw-500 rounded-3 border-dark" aria-label="Default select example">
                                <option selected="">Select Bank</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label font-14 fw-bold text-purple  mb-0">REMARK

                            </label>
                            <textarea class="form-control fw-500 rounded-3 border-dark" rows="3"></textarea>
                        </div>
                        <button type="button" class="btn mx-auto font-14 text-white gradient-background-1 py-2 px-5 mt-3 mb-4 w-50">
                            Submit</button>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
       
   </div>
</div>
@endsection