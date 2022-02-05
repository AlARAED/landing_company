@extends(cpanel_layout().'.index')

@section('css')
    <link href="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css">
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PROFILE SIDEBAR -->

            <!-- END BEGIN PROFILE SIDEBAR -->
            <!-- BEGIN PROFILE CONTENT -->
            <div class="profile-content">
                <div class="row">
                    <div class="col-md-12">
                        <divس class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">بيانات حسابك</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li  class="active">
                                        <a href="#tab_1_4" data-toggle="tab">بيانات الشركة </a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_1" data-toggle="tab">بيانات الدخول </a>
                                    </li>



                                </ul>
                            </div>

                            <div class="portlet-body">
                                <div class="tab-content">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            <h4>{{ Session::get('message') }}</h4>
                                        </div>
                                    @endif






                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane " id="tab_1_1" >
                                        {!!  Form::open(['url' => 'admin/update' ,'method' => 'POST','files' => true]) !!}

                                            <div class="form-group ">
                                                <label class="control-label">الاسم</label>
            <input type="text" placeholder="آدمن" class="form-control" name="name" value="{{Auth::User()->name}}"/> </div>

                                        <div class="form-group">
                                            <label class="control-label">كلمة السر الجديدة </label>
                                            <input type="password" class="form-control" name="password" /> </div>
                                        <br>

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
    <img src="{{ asset('uploads/' .Auth::User()->image) }}" alt="" /> </div>


                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> اختر صورة </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                 <input type="file" name="image"  >
                                                                            </span>


                                            </div>
                                        </div>


                                        <br> <br> <br>


                                            <div class="margiv-top-10">
                        <button type="submit" class="btn green" style="    width: 193px;">ارسال</button>

{{--                                                <a href="javascript:;" class="btn green"> حفظ</a>--}}
                                          <!-- <a href="javascript:;" class="btn default"> Cancel </a>-->
                                           </div>
                                        {!! Form::close() !!}
                                    </div>


                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
                                    <div class="tab-pane active" id="tab_1_4">
                                        {!!  Form::open(['url' => 'admin/update/Companyinfo' ,'method' => 'POST','files' => true]) !!}

                                            <div class="form-group">
                                                <label class="control-label">اسم الموقع </label>
                                                <input type="text" placeholder="" class="form-control" name="name"  value="{{$com->name}}"   /> </div>

                                            <div class="form-group">
                                                <label class="control-label">رقم الهاتف  </label>
                                                <input type="text" placeholder="" class="form-control" name="phone" value="{{$com->phone}}"  /> </div>


                                            <div class="form-group">
                                                <label class="control-label">البريد الالكترونى   </label>
                                                <input type="email"  class="form-control" name="email" value="{{$com->email}}"  /> </div>



                                            <div class="form-group">
                                                <label class="control-label">Website Url</label>
                                                <input type="text" placeholder="http://www.mywebsite.com" class="form-control"  name="website" value="{{$com->website}}"  /> </div>



                                            <div class="form-group">
                                                <label class="control-label">linked in </label>
                                                <input type="text"  class="form-control" name="linkedin" value="{{$com->linkedin}}"  /> </div>


                                            <div class="form-group">
                                                <label class="control-label">Facebook</label>
                                                <input type="text"  class="form-control" name="fb" value="{{$com->fb}}"  /> </div>

                                            <div class="form-group">
                                                <label class="control-label">google</label>
                                                <input type="text"  class="form-control" name="google"  value="{{$com->google}}"/> </div>



                                            <div class="form-group">
                                                <label class="control-label">twitter</label>
                                                <input type="text"  class="form-control" name="twitter"  value="{{$com->twitter}}" /> </div>

                                            <div class="form-group">
                                                <label class="control-label">الدولة</label>
                                                <input type="text"  class="form-control" name="country" value=" رضاء العملاء"  value="{{$com->country}}"/> </div>


                                            <div class="form-group">
                                                <label class="control-label">عدد العملاء</label>
                                                <input type="text"  class="form-control" name="no_client" value="{{$com->no_client}}"/> </div>


                                            <div class="form-group">
                                                <label class="control-label"> رضا العملاء</label>
                                                <input type="text"  class="form-control" name="satisfy_client" value="{{$com->satisfy_client}}"  /> </div>


                                            <div class="form-group">
                                                <label class="control-label">  عدد الموظفين</label>
                                                <input type="text"  class="form-control" name="no_emplyee" value="{{$com->no_emplyee}}" /> </div>

                                            <div class="form-group">
                                                <label class="control-label">  سنين الخبرة </label>
                                                <input type="text"  class="form-control" name="exp_year" value="{{$com->exp_year}}" /> </div>


                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="{{ asset('uploads/' .$com->image) }}" alt=""  /> </div>


                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> صورة شعار  </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                 <input type="file" name="image"   >
                                                                            </span>


                                                </div>
                                            </div>







                                            <div class="form-group">
                                                <label class="control-label">من نحن</label>

                                                <textarea class="form-control" rows="3"  name="about_us"  >
{{$com->about_us}}
                                                </textarea>
                                            </div>

                                            <div class="margiv-top-10">
                                                <button type="submit" class="btn green" style="    width: 193px;">حفظ</button>

                                            </div>
                                        <br><br>
                                        {!! Form::close() !!}
                                    </div>
                                    <!-- END PRIVACY SETTINGS TAB -->
                                </div>
                            </div>
                        </divس>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>

    @endsection
@section('js')

    <script src="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>


    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url('admin/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
@stop


