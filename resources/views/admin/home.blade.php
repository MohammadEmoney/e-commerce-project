@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3 style="text-align:match-parent">0</h3>

                    <p>رتبه فروشگاه شما در  تحلیل داده</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer" style="text-align:right">مشاهده سفارش ها<i style="float:left" class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3 style="text-align:match-parent">0 تومان</h3>

                    <p>گردش حساب 30 روز گذشته </p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer" style="text-align:right">مشاهده سفارش ها <i style="float:left" class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3 style="text-align:match-parent">0 تومان </h3>

                    <p>گردش امروز حساب شما </p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer" style="text-align:right">مشاهده سفارش ها <i style="float:left" class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-3">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3 style="text-align:match-parent">0 تومان </h3>

                    <p>موجودی شما </p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer" style="text-align:start">مشاهده سفارش ها  <i style="float:left" class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable" style="width: 100%">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul >
                    <li class="active"> نمودار فروش مجموعه فروش روزانه </li>


                    <!--<li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                    <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>-->

                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->

                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
            </div>

            <!-- /.nav-tabs-custom -->

            <!-- Chat box -->

            <!--<div class="box box-success">
              <div class="box-header">
                <i class="fa fa-comments-o"></i>

                <h3 class="box-title">Chat</h3>

                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                  <div class="btn-group" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                  </div>
                </div>
              </div>
              <div class="box-body chat" id="chat-box">-->

            <!-- chat item -->

            <!--<div class="item">
              <img src="dist/img/user4-128x128.jpg" alt="user image" class="online">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                  Mike Doe
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
              </p>
              <div class="attachment">
                <h4>Attachments:</h4>

                <p class="filename">
                  Theme-thumbnail-image.jpg
                </p>

                <div class="pull-right">
                  <button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
                </div>
              </div>-->

            <!-- /.attachment -->
            <!--</div>-->
            <!-- /.item -->
            <!-- chat item -->

            <!--<div class="item">
              <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                  Alexander Pierce
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
              </p>
            </div>-->

            <!-- /.item -->
            <!-- chat item -->

            <!--<div class="item">
              <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                  Susan Doe
                </a>
                I would like to meet you to discuss the latest news about
                the arrival of the new theme. They say it is going to be one the
                best themes on the market
              </p>
            </div>-->

            <!-- /.item -->
            <!--</div>-->

            <!-- /.chat -->

            <!--<div class="box-footer">
              <div class="input-group">
                <input class="form-control" placeholder="Type message...">

                <div class="input-group-btn">
                  <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>-->

            <!-- /.box (chat box) -->

            <!-- TO DO List -->

            <!--<div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">To Do List</h3>

                <div class="box-tools pull-right">
                  <ul class="pagination pagination-sm inline">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div>-->

            <!-- /.box-header -->

            <!--<div class="box-body">
              <ul class="todo-list">
                <li>-->

            <!-- drag handle -->

            <!--<span class="handle">
              <i class="fa fa-ellipsis-v"></i>
              <i class="fa fa-ellipsis-v"></i>
            </span>-->

            <!-- checkbox -->

            <!--<input type="checkbox" value="" name="">-->

            <!-- todo text -->

            <!--<span class="text">Design a nice theme</span>-->

            <!-- Emphasis label -->

            <!--<small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>-->
            <!-- General tools such as edit or delete-->
            <!--<div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="" name="">
            <span class="text">Make the theme responsive</span>
            <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="" name="">
            <span class="text">Let theme shine like a star</span>
            <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="" name="">
            <span class="text">Let theme shine like a star</span>
            <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="" name="">
            <span class="text">Check your messages and notifications</span>
            <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
          <li>
                <span class="handle">
                  <i class="fa fa-ellipsis-v"></i>
                  <i class="fa fa-ellipsis-v"></i>
                </span>
            <input type="checkbox" value="" name="">
            <span class="text">Let theme shine like a star</span>
            <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
            <div class="tools">
              <i class="fa fa-edit"></i>
              <i class="fa fa-trash-o"></i>
            </div>
          </li>
        </ul>
      </div>-->
            <!-- /.box-body -->

            <!--<div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
            </div>
          </div>-->

            <!-- /.box -->

            <!-- quick email widget -->

            <!--<div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Quick Email</h3>-->

            <!-- tools box -->

            <!--<div class="pull-right box-tools">
              <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>-->

            <!-- /. tools -->

            <!--</div>
            <div class="box-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="emailto" placeholder="Email to:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                </div>
                <div>
                  <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="button" class="pull-right btn btn-default" id="sendEmail">Send
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>-->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <!--<section class="col-lg-5 connectedSortable">-->

        <!-- Map box -->

        <!--<div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">-->

        <!-- tools box -->

        <!--<div class="pull-right box-tools">
          <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
            <i class="fa fa-calendar"></i></button>
          <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
            <i class="fa fa-minus"></i></button>
        </div>-->

        <!-- /. tools -->

        <!--<i class="fa fa-map-marker"></i>

        <h3 class="box-title">
          Visitors
        </h3>
      </div>
      <div class="box-body">
        <div id="world-map" style="height: 250px; width: 100%;"></div>
      </div>-->
        <!-- /.box-body-->

        <!--<div class="box-footer no-border">
          <div class="row">
            <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
              <div id="sparkline-1"></div>
              <div class="knob-label">Visitors</div>
            </div>-->

        <!-- ./col -->

        <!--<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
          <div id="sparkline-2"></div>
          <div class="knob-label">Online</div>
        </div>-->

        <!-- ./col -->

        <!--<div class="col-xs-4 text-center">
          <div id="sparkline-3"></div>
          <div class="knob-label">Exists</div>
        </div>-->

        <!-- ./col -->
    </div>
@endsection