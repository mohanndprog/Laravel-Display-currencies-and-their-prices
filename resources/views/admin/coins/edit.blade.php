@extends('admin.layout.layout')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <br>
            <br>
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Form-->
        @include('admin.inc.errors')
        <form id="kt_ecommerce_add_product_form" method="post" action="{{route('admin.coins.update')}}" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
            <!--begin::Aside column-->
            @csrf
            <input type="hidden" name="id" value="{{$coins->id}}">

            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-12">

                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>اسعار العملات</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">السؤال</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="question" class="form-control mb-2" placeholder="السؤال" value=" " />
                                        <!--end::Input-->

                                    </div>

                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">الجواب</label>
                                        <textarea class="form-control form-control-solid" rows="6" name="answer" placeholder="الجواب"> </textarea>
                                    </div>



                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->


                        </div>
                    </div>
                    <!--end::Tab pane-->

                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{route('admin.coins.index')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">الغاء</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                        <span class="indicator-label">حفظ التغيرات</span>
                        <span class="indicator-progress">الرجاء الانتظار...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content container-->
</div>
@endsection
