<div class="section-content m-b50">
    <div class="row">
        <!-- CONTACT FORM-->
        <div class="wt-box col-md-12">
            <h4 class="text-uppercase"> {{ __('تواصـــــــل معــــنا') }}</h4>
            <div class="row">
                <div class="col-md-6">

                </div>
            </div>

            <div class="wt-separator-outer m-b30">
                <div class="wt-separator style-square">
                   <span class="separator-left bg-primary"></span>
                   <span class="separator-right bg-primary"></span>
                </div>
            </div>
            @include('frontend.inc.erorrs')
            <form class="co-contact-form" action="{{ route('frontend.message.contact') }}" method="post">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="first_name" type="text" required class="form-control" placeholder="{{ __('الاسم الاول') }}">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="last_name" type="text" class="form-control" required placeholder="{{ __('الاسم الثاني') }}">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" type="text" class="form-control" required placeholder="{{ __('البريد الالكتروني') }}">
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="phone" type="text" required class="form-control" placeholder="{{ __('رقم الجوال') }}">
                            </div>
                        </div>
                    </div>



                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                <textarea name="massage" rows="4" class="form-control " required placeholder="{{ __('الرسالة') }}"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <button  type="submit"  class="site-button skew-icon-btn m-r15"> {{ __('إرســــــــال') }}<i class="fa fa-angle-double-right"></i></button>

                    </div>

                </div>

            </form>

        </div>

    </div>
</div>
