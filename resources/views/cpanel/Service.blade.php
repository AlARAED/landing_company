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
                                        {!!  Form::open(['url' => 'admin/update/service' ,'method' => 'POST','files' => true]) !!}

                                        <div class="form-group ">
                                            <label class="control-label">العنوان الرئيسيى</label>
                                            <input type="text" class="form-control" name="title"
                                                   value="{{$Service->title}}"/></div>

                                        <div class="form-group">
                                            <label class="control-label"> المحتوى</label>

                                            <textarea class="form-control" rows="3" name="text" value="">
{{$Service->text}}
                                                </textarea>
                                        </div>
                                        <br>

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="{{ asset('uploads/' .$Service->image) }}" alt=""/></div>


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
                                    <div class="tab-pane " id="tab_1_4">

                                        {!!  Form::open(['url' => 'admin/service/item' ,'method' => 'POST','files' => true]) !!}

                                        <div class="form-group ">
                                            <label class="control-label">عنوان الخدمة</label>
                                            <input type="text" class="form-control" name="title" value=""/></div>

                                        <div class="form-group">
                                            <label class="control-label"> تفاصيل الخدمة</label>

                                            <textarea class="form-control" rows="3" name="text" value="">

                                                </textarea>
                                        </div>
                                        <br>


                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green" style="    width: 193px;">حفظ
                                            </button>

                                        {{--                                                <a href="javascript:;" class="btn green"> حفظ</a>--}}
                                        <!-- <a href="javascript:;" class="btn default"> Cancel </a>-->
                                        </div>
                                        <br>
                                        {!! Form::close() !!}
                                        <br><br>

                                        <table id="example" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>


                                            <tr>
                                                <th style="text-align: right;">العنوان</th>
                                                <th style="text-align: right;">التفاصيل</th>

                                                <th style="text-align: right;">الحدث</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($ServicItem as $ServicIte)
                                                <tr>
                                                    <td>{{$ServicIte->title}}</td>
                                                    <td>{{$ServicIte->text}}</td>

                                                    <td align="center">
                                                        <a class="btn red" data-toggle="modal"
                                                           data-target="#myModal{{ $ServicIte->id }}"> عرض/تعديل </a>
                                                        <a class="btn default" data-toggle="modal"
                                                           data-target="#myModalDelte{{ $ServicIte->id }}"> حذف </a>

                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="myModal{{ $ServicIte->id }}" role="dialog">

                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;
                                                                </button>
                                                                <h4 class="modal-title">عرض/تعديل الخدمات</h4>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div id='alert_success'
                                                                     class="alert alert-success alert-autocloseable-success">
                                                                </div>

                                                                {!!  Form::open(['url' => ['admin/service/item/update',$ServicIte->id] ,'method' => 'POST','files' => true]) !!}

                                                                <div class="form-group ">
                                                                    <label class="control-label">عنوان الخدمة</label>
                                                                    <input type="text" class="form-control" name="title"
                                                                           value="{{ $ServicIte->title }}"/></div>

                                                                <div class="form-group">
                                                                    <label class="control-label"> تفاصيل الخدمة</label>

                                                                    <textarea class="form-control" rows="3" name="text"
                                                                              value=""> {{ $ServicIte->text }}

                                                </textarea>
                                                                </div>
                                                                <br>


                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green"
                                                                            style="    width: 193px;">حفظ
                                                                    </button>

                                                                {{--                                                <a href="javascript:;" class="btn green"> حفظ</a>--}}
                                                                <!-- <a href="javascript:;" class="btn default"> Cancel </a>-->
                                                                </div>
                                                                <br>
                                                                {!! Form::close() !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">اغلاق
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="modal fade" id="myModalDelte{{ $ServicIte->id }}"
                                                     role="dialog">

                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;
                                                                </button>
                                                                <h4 class="modal-title">حذف </h4>
                                                            </div>
                                                            <div class="modal-body">

                                                               <!-- <div class="alert alert-success" role="alert">
                                                                    This is a success alert—check it out!
                                                                </div>-->


                                                                {!!  Form::open(['url' => ['admin/service/item/remove',$ServicIte->id] ,'method' => 'POST','files' => true]) !!}


                                                                <p> هل متأكد من حذف هذه الخدمة{{$ServicIte->title}}</p>

                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green"
                                                                            style="    width: 193px;">نعم
                                                                    </button>

                                                                {{--                                                <a href="javascript:;" class="btn green"> حفظ</a>--}}
                                                                <!-- <a href="javascript:;" class="btn default"> Cancel </a>-->
                                                                </div>
                                                                <br>
                                                                {!! Form::close() !!}
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">اغلاق
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>


 @endforeach


                                        </table>

                                    </div>
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


