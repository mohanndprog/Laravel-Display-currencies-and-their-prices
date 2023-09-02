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
            <input type="hidden" name="id" value="{{$coinses->id}}">

            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">

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
                                        <h2>أسعار العملات</h2>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <h2>دولار / شيكل</h2>

                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="required form-label">شراء</label>
                                                <input type="text" name="dollars_shekels_sale" class="form-control mb-2" placeholder="شراء" value="{{$coinses->dollars_shekels_sale}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="required form-label">بيع</label>
                                                <input type="text" name="dollars_shekels_buying" class="form-control mb-2" placeholder="بيع" value="{{$coinses->dollars_shekels_buying}}" />
                                            </div>
                                        </div>


                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <h2>دينار / شيكل	</h2>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="required form-label">شراء</label>
                                                <input type="text" name="dinar_shekel_sale" class="form-control mb-2" placeholder="شراء" value="{{$coinses->dinar_shekel_sale}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="required form-label">بيع</label>
                                                <input type="text" name="dinar_shekel_buying" class="form-control mb-2" placeholder="بيع" value="{{$coinses->dinar_shekel_buying}}" />
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Input-->


                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <h2>دولار / دينار	</h2>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="required form-label">شراء</label>
                                                <input type="text" name="dollars_dinars_sale" class="form-control mb-2" placeholder="شراء" value="{{$coinses->dollars_dinars_sale}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="required form-label">بيع</label>
                                                <input type="text" name="dollars_dinars_buying" class="form-control mb-2" placeholder="بيع" value="{{$coinses->dollars_dinars_buying}}" />
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Input-->


                                        <!--end::Input-->

                                    </div>
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <h2>يورو / شيكل	</h2>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="required form-label">شراء</label>
                                                <input type="text" name="euro_shekel_sale" class="form-control mb-2" placeholder="شراء" value="{{$coinses->euro_shekel_sale}}" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="required form-label">بيع</label>
                                                <input type="text" name="euro_shekel_buying" class="form-control mb-2" placeholder="بيع" value="{{$coinses->euro_shekel_buying}}" />
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Input-->


                                        <!--end::Input-->

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
                    <a href="{{route('admin.home')}}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">الغاء</a>
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
