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
                        <div class="portlet light ">


                            <div class="portlet-body">
                                <div class="tab-content">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            <h4>{{ Session::get('message') }}</h4>
                                        </div>
                                @endif









                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
                                    <div class="tab-pane active" id="tab_1_4">
                                        {!!  Form::open(['url' => 'admin/review/store' ,'method' => 'POST','files' => true]) !!}

                                        <div class="form-group">
                                            <label class="control-label">اسم المتحدث</label>
                                            <input type="text" placeholder="" class="form-control" name="signiture"  required /> </div>


                                        <div class="form-group">
                                            <label class="control-label">الرأى</label>

                                            <textarea class="form-control" rows="3"  name="text"  required="" >شركة مميزة أتاحت لنا الفرصة للظهور بشكل محترم ومميز واحترافى
                                         </textarea>
                                        </div>

                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""  /> </div>


                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                            <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> صورة </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                 <input type="file" name="image"   required >
                                                                            </span>


                                            </div>
                                        </div>
<br>
                                        <br>

                                        <div class="margiv-top-10">
                                            <button type="submit" class="btn green" style="    width: 193px;">حفظ</button>

                                        </div>
                                        <br><br>
                                        {!! Form::close() !!}
                                    </div>


                                        <table id="example" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>


                                            <tr>
                                                <th style="text-align: right;">اسم المتحدثء</th>
                                                <th style="text-align: right;">الرأى</th>
                                                <td>الصورة</td>
                                                <th style="text-align: right;">الحدث</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ($Review as $Revie)
                                                <tr>
                                                    <td>{{ $Revie->signiture }}</td>
                                                    <td>{{$Revie->text}}</td>
                                                    <td> <img src="{{ asset('uploads/' .$Revie->image) }}" alt="" style="width: 189px;" />
                                                    </td>


                                                    <td align="center">

                                                        <a class="btn red" data-toggle="modal"
                                                           data-target="#myModal{{ $Revie->id }}"> عرض/تعديل </a>
                                                        <a class="btn default" data-toggle="modal"
                                                           data-target="#myModalDelte{{ $Revie->id }}"> حذف </a>

                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="myModal{{ $Revie->id }}" role="dialog">

                                                    <div class="modal-dialog">

                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;
                                                                </button>
                                                                <h4 class="modal-title">تعديل</h4>
                                                            </div>
                                                            <div class="modal-body">



                                                                {!!  Form::open(['url' => ['admin/review/update',$Revie->id] ,'method' => 'POST','files' => true]) !!}

                                                                <div class="form-group">
                                                                    <label class="control-label">اسم المتحدث</label>
                                                                    <input type="text" placeholder="" class="form-control" name="signiture"  required  value="{{$Revie->signiture}}"/> </div>


                                                                <div class="form-group">
                                                                    <label class="control-label">الرأى</label>

                                                                    <textarea class="form-control" rows="3"  name="text"  required="" >{{$Revie->text}}
                                         </textarea>
                                                                </div>

                                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                        <img src="{{ asset('uploads/' .$Revie->image) }}" alt=""  /> </div>


                                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                                    <div>
                                                                            <span class="btn default btn-file">
                                                                                <span class="fileinput-new"> صورة </span>
                                                                                <span class="fileinput-exists"> تغيير </span>
                                 <input type="file" name="image"   >
                                                                            </span>


                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <br>

                                                                <div class="margiv-top-10">
                                                                    <button type="submit" class="btn green" style="    width: 193px;">حفظ</button>

                                                                </div>
                                                                <br><br>
                                                                {!! Form::close() !!}
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal fade" id="myModalDelte{{ $Revie->id }}"
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


                                                                {!!  Form::open(['url' => ['admin/review/remove',$Revie->id] ,'method' => 'POST','files' => true]) !!}


                                                                <p> هل متأكد من الازالة</p>

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

                                                        </div>

                                                    </div>
                                                </div>



                                            @endforeach


                                        </table>
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

    <script src="{{url('admin/')}}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>


    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{url('admin/')}}/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
@stop


