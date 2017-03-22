@extends('layouts.master')

@section('head_css')
  <!-- DataTables -->
  <link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
@stop

@section('content')
    <section class="content-header">
      <h1>Mobile App</h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-xs-12">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th rowspan="2">User Name</th>
                    <th rowspan="2">Device</th>
                    <th rowspan="2">Password(s)</th>
                    <th rowspan="2">Offline</th>
                    <th rowspan="2">ScouterMode</th>
                    <th colspan="2">Primary Market</th>
                    <th colspan="2">Secondary Market</th>
                    <th rowspan="2"></th>
                  </tr>
                  <tr>
                    <th>Advisor</th>
                    <th>Market</th>
                    <th>Advisor</th>
                    <th>Market</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>name1</td>
                    <td>Internet</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Win 95+</td>
                    <td class="text-center">X</td>
                    <td>Win 95+</td>
                    <td class="text-center"> 4</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#editApp" aria-expanded="false" title="Edit Mobile App">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#modifyPassword" aria-expanded="false" title="Modify Password">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="collapse" aria-expanded="false" title="Remove Mobile App">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>name1</td>
                    <td>Internet</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Win 95+</td>
                    <td class="text-center">X</td>
                    <td>Win 95+</td>
                    <td class="text-center"> 4</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#editApp" aria-expanded="false" title="Edit Mobile App">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#modifyPassword" aria-expanded="false" title="Modify Password">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="collapse" aria-expanded="false" title="Remove Mobile App">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Explorer 5.0</td>
                    <td>No</td>
                    <td>No</td>
                    <td>Yes</td>
                    <td>5</td>
                    <td class="text-center">C</td>
                    <td>Win 95+</td>
                    <td class="text-center">5</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#editApp" aria-expanded="false" title="Edit Mobile App">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#modifyPassword" aria-expanded="false" title="Modify Password">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="collapse" aria-expanded="false" title="Remove Mobile App">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6.0
                    </td>
                    <td>Yes</td>
                    <td>C</td>
                    <td>Win 95+</td>
                    <td>6</td>
                    <td class="text-center">C</td>
                    <td>Win 95+</td>
                    <td class="text-center">5</td>
                    <td class="text-center">
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#editApp" aria-expanded="false" title="Edit Mobile App">
                        <i class="fa fa-gear" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="modal" data-target="#modifyPassword" aria-expanded="false" title="Modify Password">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="collapse" aria-expanded="false" title="Remove Mobile App">
                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                      </button>
                    </td>
                  </tr>
                </tbody>
                <tfoot>
                  <tr>
                    <th rowspan="2">User Name</th>
                    <th rowspan="2">Device</th>
                    <th rowspan="2">Password(s)</th>
                    <th rowspan="2">Offline</th>
                    <th rowspan="2">ScouterMode</th>
                    <th colspan="2">Primary Market</th>
                    <th colspan="2">Secondary Market</th>
                    <th rowspan="2"></th>
                  </tr>
                  <tr>
                    <th>Advisor</th>
                    <th>Market</th>
                    <th>Advisor</th>
                    <th>Market</th>
                  </tr>
                </tfoot>
              </table>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="col-xs-12">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#newApp" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
              </div>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Add App Modal -->
    <div class="modal fade" id="newApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add Mobile App</h4>
          </div>
          <div class="modal-body form-ctrl">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group form-ctrl">
                  <label for="inputUsername" class="col-sm-4 control-label">UserName</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="inputPassword" class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="inputConfirmPassword" class="col-sm-4 control-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputCfmPassword" placeholder="Confirm Password">
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="switchOffline" class="col-sm-4 control-label">Offline</label>
                  <div class="col-sm-8">
                    <div class="btn-group" id="toggle_offline">
                      <button type="button" class="btn btn-default unlocked_inactive">ON</button>
                      <button type="button" class="btn btn-info locked_active">OFF</button>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="switchScouter" class="col-sm-4 control-label">Scouter Mode</label>
                  <div class="col-sm-8">
                    <div class="btn-group" id="toggle_scouter">
                      <button type="button" class="btn btn-default unlocked_inactive">ON</button>
                      <button type="button" class="btn btn-info locked_active">OFF</button>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="prmAdvisor" class="col-sm-4 control-label">Advisor</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="prm_advisor">
                      <option>advisor 1</option>
                      <option>advisor 2</option>
                      <option>advisor 3</option>
                      <option>advisor 4</option>
                      <option>advisor 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="prmMarket" class="col-sm-4 control-label">Market</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="prm_market">
                      <option>market 1</option>
                      <option>market 2</option>
                      <option>market 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <div class="col-sm-offset-4 col-sm-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Label Enable Secondary Marketplace
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="secAdvisor" class="col-sm-4 control-label">Advisor</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="sec_advisor">
                      <option>advisor 1</option>
                      <option>advisor 2</option>
                      <option>advisor 3</option>
                      <option>advisor 4</option>
                      <option>advisor 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="secMarket" class="col-sm-4 control-label">Market</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="sec_market">
                      <option>market 1</option>
                      <option>market 2</option>
                      <option>market 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl box-footer">
                  Remember, when you click SAVE a Device ADDON will be added to your subscription.
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit App Modal -->
    <div class="modal fade" id="editApp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Mobile App</h4>
          </div>
          <div class="modal-body form-ctrl">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group form-ctrl">
                  <label for="inputUsername" class="col-sm-4 control-label">UserName</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="switchOffline" class="col-sm-4 control-label">Offline</label>
                  <div class="col-sm-8">
                    <div class="btn-group" id="toggle_offline">
                      <button type="button" class="btn btn-default unlocked_inactive">ON</button>
                      <button type="button" class="btn btn-info locked_active">OFF</button>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="switchScouter" class="col-sm-4 control-label">Scouter Mode</label>
                  <div class="col-sm-8">
                    <div class="btn-group" id="toggle_scouter">
                      <button type="button" class="btn btn-default unlocked_inactive">ON</button>
                      <button type="button" class="btn btn-info locked_active">OFF</button>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="prmAdvisor" class="col-sm-4 control-label">Advisor</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="prm_advisor">
                      <option>advisor 1</option>
                      <option>advisor 2</option>
                      <option>advisor 3</option>
                      <option>advisor 4</option>
                      <option>advisor 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="prmMarket" class="col-sm-4 control-label">Market</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="prm_market">
                      <option>market 1</option>
                      <option>market 2</option>
                      <option>market 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <div class="col-sm-offset-4 col-sm-8">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox">Label Enable Secondary Marketplace
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="secAdvisor" class="col-sm-4 control-label">Advisor</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="sec_advisor">
                      <option>advisor 1</option>
                      <option>advisor 2</option>
                      <option>advisor 3</option>
                      <option>advisor 4</option>
                      <option>advisor 5</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="secMarket" class="col-sm-4 control-label">Market</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="sec_market">
                      <option>market 1</option>
                      <option>market 2</option>
                      <option>market 3</option>
                    </select>
                  </div>
                </div>
                <div class="form-group form-ctrl box-footer">
                  Remember, when you click SAVE a Device ADDON will be added to your subscription.
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modify Password Modal -->
    <div class="modal fade" id="modifyPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modify Password</h4>
          </div>
          <div class="modal-body form-ctrl">
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group form-ctrl">
                  <label for="inputPassword" class="col-sm-4 control-label">Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                  </div>
                </div>
                <div class="form-group form-ctrl">
                  <label for="inputConfirmPassword" class="col-sm-4 control-label">Confirm Password</label>
                  <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputCfmPassword" placeholder="Confirm Password">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
@stop

@section('head_js')
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
@stop

@section('bodyend')
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $('#toggle_offline button').click(function(){
      if($(this).hasClass('locked_active') || $(this).hasClass('unlocked_inactive')){
        /* code to do when unlocking */
            $('#switch_status').html('Switched on.');
      }else{
        /* code to do when locking */
            $('#switch_status').html('Switched off.');
      }
      
      /* reverse locking status */
      $('#toggle_offline button').eq(0).toggleClass('locked_inactive locked_active btn-default btn-info');
      $('#toggle_offline button').eq(1).toggleClass('unlocked_inactive unlocked_active btn-info btn-default');
    });

    $('#toggle_scouter button').click(function(){
      if($(this).hasClass('locked_active') || $(this).hasClass('unlocked_inactive')){
        /* code to do when unlocking */
            $('#switch_status').html('Switched on.');
      }else{
        /* code to do when locking */
            $('#switch_status').html('Switched off.');
      }
      
      /* reverse locking status */
      $('#toggle_scouter button').eq(0).toggleClass('locked_inactive locked_active btn-default btn-info');
      $('#toggle_scouter button').eq(1).toggleClass('unlocked_inactive unlocked_active btn-info btn-default');
    });
  });
</script>
@stop
