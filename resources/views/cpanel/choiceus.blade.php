@extends(cpanel_layout().'.index')

@section('css')
    <link href="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet"
          type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                        <div class="portlet light ">


                            <div class="portlet-body">
                                <div class="tab-content">


                                    <!-- PERSONAL INFO TAB -->
                                    <div class="tab-pane active " id="tab_1_1">
                                        {!!  Form::open(['url' => 'admin/update/choiceus' ,'method' => 'POST','files' => true]) !!}


                                        <div class="form-group">
                                            <label class="control-label"> لماذا اختيارنا</label>

                                     <textarea class="form-control" rows="3" name="text" value="">
{{$ChoiceUs->text}}
                                                </textarea>
                                        </div>
                                        <br>

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ asset('uploads/' .$ChoiceUs->image) }}" alt=""/></div>


                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                 style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                                            <span class="btn default btn-file">
                                                                                <span
                                                                                    class="fileinput-new"> اختر صورة </span>
                                                                                <span
                                                                                    class="fileinput-exists"> تغيير </span>
                                 <input type="file" name="image">
                                                                            </span>


                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green" style="    width: 193px;">حفظ
                                            </button>

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
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE CONTENT -->
        </div>
    </div>

@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

    <script src="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"
            type="text/javascript"></script>

    {{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}

    <script src="{{url('/')}}/js/sahal.js" type="text/javascript"></script>

    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url('admin/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->


