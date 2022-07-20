<?php
$void = 'javascript:void(0)';
$statuses = ['none' => "Select status", 'station' => "ARRIVED AT STATION", 'hold' => "ON HOLD", 'transit' => "IN TRANSIT", 'delivery' => "OUT FOR DELIVERY", 'delivered' => "DELIVERED"];
?>
@extends('layout')

@section('title',"Dashboard")

@section('content')
<section class="block">
<div class="container">
      <div class="row">
        @include('_admin-nav')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
        @include('_admin-header',['title' => "Dashboard"])

          <div class="row mb-5">
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{$stats['trackings']}}</h5>
                          <p class="card-text">Active Trackings</p>
                          <a href="{{url('trackings')}}" class="btn btn-primary">View more</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{$stats['users']}}</h5>
                          <p class="card-text">Active Users</p>
                          <a href="{{$void}}" class="btn btn-primary">View more</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <h5 class="card-title">{{$stats['plugins']}}</h5>
                          <p class="card-text">Active Plugins</p>
                          <a href="{{url('plugins')}}" class="btn btn-primary">View more</a>
                      </div>
                  </div>
              </div>
          </div>

          <h2>Latest Trackings</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead>
                <tr>
                 <th>Transaction No.</th>
                  <th>Details</th>
                  <th>Shipper Information</th>
                  <th>Receiver Information</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                   foreach($stats['topTrackings'] as $t)
                   {
                     $tu = url('tracking')."?xf=".$t['tnum'];
                     $ru = url('remove-tracking')."?xf=".$t['tnum'];
                     $shipper = $t['shipper'];
                     $receiver = $t['receiver'];
                  ?>
                <tr>
                  <td>{{$t['tnum']}}</td>
                  <td>
                    <ul class="no-dot">
                      <li>Ship Type: {{$t['stype']}}</li>
                      <li>Weight: {{$t['weight']}}kg</li>
                      <li>Origin office: {{$t['origin']}}</li>
                      <li>Destination office: {{$t['dest']}}</li>
                    </ul>
                   </td>
                  <td>
                    <ul class="no-dot">
                      <li>Name: {{$shipper['name']}}</li>
                      <li>Phone: {{$shipper['phone']}}</li>
                      <li>Address: {{$shipper['address']}}</li>
                    </ul>
                   </td>
                   <td>
                    <ul class="no-dot">
                      <li>Name: {{$receiver['name']}}</li>
                      <li>Phone: {{$receiver['phone']}}</li>
                      <li>Address: {{$receiver['address']}}</li>
                    </ul>
                  </td>
                  <td><span class="badge bg-info">{{$statuses[$t['status']]}}</span></td>
                  <td>
                    <div class="btn-group">
                      <a href="{{$tu}}" class="btn btn-primary">View</a>
                      <a href="{{$ru}}" class="btn btn-danger">Remove</a>
                   </div>  
                  </td>
                </tr>
                <?php
                   }
                ?>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>
</section>
@stop