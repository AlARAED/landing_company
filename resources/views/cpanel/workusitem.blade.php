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
                                    @if(Session::has('message'))
                                        <div class="alert alert-success">
                                            <h4>{{ Session::get('message') }}</h4>
                                        </div>
                                @endif

                                <!-- PERSONAL INFO TAB -->


                                    <!-- END CHANGE PASSWORD TAB -->
                                    <!-- PRIVACY SETTINGS TAB -->
                                    <div class="tab-pane active" id="tab_1_4">

                                        <table id="example" class="table table-striped table-bordered"
                                               style="width:100%">
                                            <thead>


                                            <tr>
                                                <th style="text-align: right;">نماذج</th>
                                                <th style="text-align: right;">الحدث</th>
                                            </tr>
                                            </thead>
                                            <tbody>

 <tr>
 <td>
    <a href="{{ asset('uploads/' .$WorkUsIma->image_1) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_1) }}" alt="" width="400px"/></a>
 </td>
<td align="center">
 {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
<div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_1"  >
    </span>
 </div>
    <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

 {!! Form::close() !!}
 </td>
</tr>

                                            <!--second image-->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_2) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_2) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_2"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>

                                            <!-------------------->
                                            <!--third image-->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_3) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_3) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_3"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>                                   <!----->
                                            <!--fourth image-->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_4) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_4) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_4"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>
                                            <!------------------->
                                            <!--fifth image-->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_5) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_5) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_5"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>
                                            <!----------------->
                                            <!--sixthimage---->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_6) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_6) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_6"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>

                                            <!------------------->
                                            <!--siventh image----->
 <tr>
     <td>
         <a href="{{ asset('uploads/' .$WorkUsIma->image_7) }}"> <img src="{{ asset('uploads/' .$WorkUsIma->image_7) }}" alt="" width="400px"/></a>
     </td>
     <td align="center">
         {!!  Form::open(['url' => 'admin/update/workusitem' ,'method' => 'POST','files' => true]) !!}
         <div  style="float: right;">
    <span class="btn default btn-file">
        <span class="fileinput-exists" > اختر صورة/تغيير</span>

        <input type="file" name="image_7"  >
    </span>
         </div>
         <button  class="btn red"  style="float: right;" type="submit"><i class="fa fa-check" ></i>حفظ الصورة</button>

         {!! Form::close() !!}
     </td>
 </tr>
                                            <!-------------------------------->

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


