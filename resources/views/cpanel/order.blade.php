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







                                    <table id="example" class="table table-striped table-bordered"
                                           style="width:100%">
                                        <thead>


                                        <tr>
                                            <th style="text-align: right;">اسم </th>
                                            <th style="text-align: right;">البريد الالكترونىء</th>
                                            <th style="text-align: right;">جوال</th>
                                            <th style="text-align: right;">نوع الطلب</th>
                                            <th style="text-align: right;">تفاصيل</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach ($Order as $ord)
                                            <tr>
                                                <td>{{$ord->name }}</td>
                                                <td>{{ $ord->email }}</td>
                                                <td>{{ $ord->mob_no }}</td>
                                                <td>{{ $ord->catName()->name }}</td>
                                                <td>{{ $ord->details }}</td>
                                            </tr>



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


