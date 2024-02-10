@extends('backend-views.master')
@section('title', 'Quiz')
@section('sub-title', 'Quiz / Create')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
                                        
                    
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid ">
        @if (Session::has('message'))
            <h2>{{ Session::get('message') }}</h2>
        @endif
               
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-fluid ">
                <!--begin::Layout-->
                    <div class="d-flex flex-column flex-lg-row">
                        <!--begin::Content-->
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                            <!--begin::Card--> 
                                        <div class="card">     
                                            <!--begin::Card body-->
                                            <div class="card-body p-12">
                                                <!--begin::Form-->
                                                <form action="{{ route('quiz.store') }}" method="post">
                                                    @csrf
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-column align-items-start flex-xxl-row">
                                                        <!--begin::Input group-->
                                                        <div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Specify invoice date" data-kt-initialized="1">
                                                            <!--begin::Date-->
                                                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">Due Date:</div>  
                                                            <!--end::Date-->                    
                                        
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center w-160px">
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-transparent fw-bold pe-5" placeholder="Select date" name="invoice_date" type="text" readonly="readonly" id="c_datepicker_1">
                                                                <!--end::Datepicker-->
                                                                
                                                                <!--begin::Icon-->
                                                                <i class="ki-outline ki-down fs-4 position-absolute ms-4 end-0"></i>                        <!--end::Icon-->
                                                            </div>
                                                            <!--end::Input-->                
                                                        </div>                
                                                        <!--end::Input group--> 
                                        
                                                        <!--begin::Input group-->
                                                        <div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Enter invoice number" data-kt-initialized="1">
                                                            <span class="fs-2x fw-bold text-gray-800">Create Quiz</span> 
                                                        </div>                
                                                        <!--end::Input group--> 
                                        
                                                        <!--begin::Input group-->
                                                        <div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-original-title="Specify invoice due date" data-kt-initialized="1">
                                                            <!--begin::Date-->
                                                            <div class="fs-6 fw-bold text-gray-700 text-nowrap">Expiration Date:</div>  
                                                            <!--end::Date-->                    
                                        
                                                            <!--begin::Input-->
                                                            <div class="position-relative d-flex align-items-center w-160px">
                                                                <!--begin::Datepicker-->
                                                                <input class="form-control form-control-transparent fw-bold pe-5" placeholder="Select date" name="invoice_date" type="text" readonly="readonly" id="c_datepicker_2">
                                                                <!--end::Datepicker-->
                                                                
                                                                <!--begin::Icon-->
                                                                <i class="ki-outline ki-down fs-4 position-absolute end-0 ms-4"></i>                        <!--end::Icon-->
                                                            </div>
                                                            <!--end::Input-->                
                                                        </div>                
                                                        <!--end::Input group--> 
                                                    </div>                
                                                    <!--end::Top-->       
                                        
                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-10"></div>
                                                    <!--end::Separator-->         
                                        
                                                    <!--begin::Wrapper-->
                                                    <div class="mb-0">
                                                        <!--begin::Row-->
                                                        <div class="row gx-10 mb-5">
                                                            <!--begin::Col-->
                                                            <div class="col-lg-12">
                                                                <label class="form-label fs-6 fw-bold text-gray-700 mb-3">Quiz Details</label>
                                        
                                                                <!--begin::Input group-->
                                                                <div class="mb-5">
                                                                    <input type="text" name="name" class="form-control form-control-solid" placeholder="Quiz Name" value="{{ old('name') }}">
                                                                    @error('name')
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="target_title" data-validator="notEmpty">{{  $message }}</div></div>
                                                                    @enderror
                                                                </div>
                                                                <!--end::Input group-->
                                        
                                                                <!--begin::Input group-->
                                                                <div class="mb-5">
                                                                    <textarea name="description" class="form-control form-control-solid" rows="3" placeholder="Quiz Description">{{ old('description') }}</textarea>
                                                                    @error('description')
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="target_title" data-validator="notEmpty">{{  $message }}</div></div>
                                                                    @enderror
                                                                </div>
                                                                <!--end::Input group-->
                                                                <!--begin::Input group-->
                                                                <div class="mb-5">
                                                                    <input type="text" name="minutes" class="form-control form-control-solid" placeholder="Quiz Time in Minutes" value="{{ old('minutes') }}" id="c_inputmask_4">
                                                                    @error('minutes')
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"><div data-field="target_title" data-validator="notEmpty">{{  $message }}</div></div>
                                                                    @enderror
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>                
                                                            <!--end::Col--> 
                                        
                                                            
                                                        </div>                
                                                        <!--end::Row--> 
                                        
                                                        <div class="text-center">
                                                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                                                                Cancel
                                                            </button>
                                    
                                                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Submit
                                                                </span>
                                                                <span class="indicator-progress">
                                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </button>
                                                        </div>  
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>     
                            <!--end::Card-->         
                        </div>  
                        <!--end::Content-->
    
        
                    </div>
                    <!--end::Layout-->              
                </div>
                <!--end::Content container-->
            </div>
        <!--end::Content-->	
</div>
@endsection