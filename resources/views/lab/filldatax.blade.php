                        @foreach($filldata as $filld)

                           <div class="card-body" >        
                                    
                        <div class="form-group mb-3">
                            <input type="hidden" id="id" name="ambu_id">
                            <label> Name</label>
                      <input type="text" class="form-control" name="vname" value="{{$filld->tests}}" id="vname">
                        </div>
   
   
                        </div>

                        @endforeach