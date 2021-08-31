  @extends("layouts.dashboard")
  @section('content')
  <!-- Start content -->
  <div class="content">
                <div class="container">

                    <div class="row">
                    <h3 class="text-center" >Add Vehicle </h3>
                        <div class="col-sm-12">
                            <div class="card-box">
                                
                                <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post"
                                    action="/details">
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Brand:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="brand_id">

                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        

                                                    </Select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label" style=" padding-right: 10px;"> Engine_Force: </label>
                                                <div class="col-md-10">
                                                    <input required type="string" type="text" name="Engine_Force" class="form-control"
                                                        placeholder="Engine Force...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Fule:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="fule">

                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>
                                                        <option value="1">1</option>

                                                    </Select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kilometrage:</label>
                                                <div class="col-md-10">
                                                    <input required type="string" type="text" class="form-control"
                                                        placeholder="Kilometrage...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Descripton:</label>
                                                <div class="col-md-10">
                                                    <textarea  required type="string" class="form-control" rows="3"
                                                        placeholder="Descripton..."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">country:</label>
                                                <div class="col-md-10">
                                                    <input required type="string" type="text" class="form-control"
                                                        placeholder="origin-country...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">isAvailable:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="is_available">
                                                        <option value="1">false</option>
                                                        <option value="1">true</option>


                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">specialOffer:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="special_Offer_id">
                                                        <option value="1">false</option>
                                                        <option value="1">true</option>


                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">images:</label>
                                                <div class="col-md-10">
                                                    <input required type="file" class="form-control" name="images[]"
                                                        placeholder="address" multiple>
                                                </div>
                                            </div>
                                        </div><!-- end col -->

                                        <div class="col-lg-6">

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Price:</label>
                                                <div class="col-md-10">
                                                    <input required type="string" type="text" class="form-control" placeholder="Price...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">MaxSpeed:</label>
                                                <div class="col-md-10">
                                                    <input  required type="string" type="text" class="form-control" placeholder="Max speed...">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Year:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="year">

                                                        <option value="1">1999</option>
                                                        <option value="1">2000</option>
                                                        <option value="1">2001</option>
                                                        <option value="1">2002</option>
                                                        <option value="1">2003</option>
                                                        <option value="1">2004</option>

                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Ex-color:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="Ex-color:">

                                                        <option value="1">blue</option>
                                                        <option value="1">red</option>
                                                        <option value="1">green</option>
                                                        <option value="1">gray</option>
                                                        <option value="1">pink</option>
                                                        <option value="1">black</option>

                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">In-color:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="In-color">

                                                        <option value="1">blue</option>
                                                        <option value="1">red</option>
                                                        <option value="1">green</option>
                                                        <option value="1">gray</option>
                                                        <option value="1">pink</option>
                                                        <option value="1">black</option>

                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label" style=" padding-left: -50px;">Transmission:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="Transmission">

                                                        <option value="1">manual</option>
                                                        <option value="1">automatic</option>
                                                        <option value="1">coutinuously</option>


                                                    </Select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">status:</label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="hasOffer">
                                                        <option value="1">new</option>
                                                        <option value="1">old</option>



                                                    </Select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">hasOffer: </label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="hasOffer">
                                                        <option value="1">false</option>
                                                        <option value="1">true</option>



                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">serviceType: </label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="serviceType">
                                                        <option value="1">buy</option>
                                                        <option value="1">rent</option>
                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Bodies: </label>
                                                <div class="col-md-10">
                                                    <Select class="form-control" name="bodies_id">
                                                        <option value="1">TowDoor</option>
                                                        <option value="1">FourDoor</option>
                                                    </Select>
                                                </div>
                                            </div>
                                        </div><!-- end col -->

                                    </div><!-- end row -->
                                    <button type="submit"
                                        class="btn btn-primary waves-effect w-md waves-light m-b-5  ">Submit</button>
                                </form>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->


                </div>
            </div>
        </div>
        @endsection