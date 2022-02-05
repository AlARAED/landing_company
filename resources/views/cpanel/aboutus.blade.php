
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
                                    <span class="caption-subject font-blue-madison bold uppercase"> من نحن</span>
                                </div>
                                <ul class="nav nav-tabs">




                                </ul>
                            </div>

                            <div class="portlet-body">
                                <div class="tab-content">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            <h4>{{ Session::get('message') }}</h4>
                                        </div>
                                @endif

                                    <div>
                                        {!!  Form::open(['url' => 'admin/update/about_us' ,'method' => 'POST','files' => true]) !!}

                                        <div class="form-group ">
                                            <label class="control-label">العنوان الرئيسيى</label>
                                            <input type="text"class="form-control" name="title" value="{{$aboutUs->title}}"/> </div>

                                        <div class="form-group">
                                            <label class="control-label"> المحتوى</label>

                                            <textarea class="form-control" rows="3" name="text"  >
{{$aboutUs->text}}
                                                </textarea>
                                        </div>
                                        <br>

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ asset('uploads/' .$aboutUs->image) }}" alt="" /> </div>


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
                                            <button type="submit" class="btn green" style="    width: 193px;">حفظ</button>

                                        {{--                                                <a href="javascript:;" class="btn green"> حفظ</a>--}}
                                        <!-- <a href="javascript:;" class="btn default"> Cancel </a>-->
                                        </div>
                                        <br>
                                        {!! Form::close() !!}
                                    </div>


                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
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


