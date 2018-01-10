<div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <form method="get" action="">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit data Customer</h4>
                          </div>

                          <div class="modal-body" style="padding-bottom: 0">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="form-group">
                                <select class="form-control">
                                    @foreach($units as $unit)
                                    <option value="{{$unit['id_unit']}}">{{$unit['id_unit']}}</option>
                                    @endforeach
                                </select>
                              </div>
                          </div>
                            
                                <div class="modal-footer">
                                     <button type="submit" class="btn btn-info">Update</button>
                                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div> 
                            </div>
                        </form>
                      </div>
                    </div>
                    <!-- tutup modal -->