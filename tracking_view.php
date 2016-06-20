<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tracking
                    <!--<small>Subheading</small>-->
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url('tracking'); ?>">Home</a>
                    </li>
                    <li class="active">Services</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-md-offset-3" >
            <form class="navbar-form navbar-left " role="search" >
                <div class="form-group">
                     <input type="text" name="ref1" id="ref1" class="form-control" placeholder="Search">
                </div>

                <select id="ref_type" name="ref_type" class="form-control">
                    <!--<option value="reference">-REF-</option>-->
                    <option selected value="BOL">-BOL-</option>
                    <option value="PO Number">-PO Number-</option>
                    <option value="PRO">-PRO-</option>
                    <option value="PRO">-SALES Order-</option>
                </select>

                <button type="button" id="button1" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        <br>
        <div class="row" id="div_1">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="panel panel-default" id="panel_bol">
                    <div class="panel-body">
                        <span id="h1_bol"></span>
                         <br>
                         <span id="h2_pro"></span>
                         <br>
                         <span id="eta"></span>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="panel panel-default" id="panel_carrier">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Carrier Information</h3>
                    </div>
                    <div class="panel-body">
                        <div id="h2_carrier"></div>
                        <span id="dest_terminal"></span>
                        <div id="contactaddress"></div>
                        <div><span id="dest_city"></span><span id="comma">, </span><span id="dest_state"> </span><span id="dest_zip"></span></div>   
                        <div id="dest_phone"></div>
                        <div id="contactname"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="loading_image_div">
            <img id="loading_picture" src="<?php echo base_url() ?>public/images/loading_apple.gif">
        </div>

        <div class="row" id="div_2">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="panel panel-default" id="shipper_panel">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Shipper Information</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="Shipper"  id="ship_ul" style="list-style:none">
                            <li>
                                <i class="fa fa-building"></i><span id="shipper_name"></span>
                            </li>
                            <li>
                                <i class="fa fa-location-arrow"></i><span id="shipper_address"></span><br>
                                <span id="shipper_city"></span><span> </span><span id="shipper_zip"></span><br>
                            </li>
                            <li>
                                <i class="fa fa-user"></i><span id="shipper_contact"></span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><span id="shipper_phone"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="panel panel-default" id="consignee_panel">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Consignee Information</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="consignee" id="consignee_ul" style="list-style:none">
                            <li>
                                <i class="fa fa-building"></i><span id="consignee_name"></span>
                            </li>
                            <li>
                                <i class="fa fa-location-arrow"></i><span id="consignee_address">  </span><br>
                                <span id="consignee_city"></span><span> </span><span id="consignee_state"></span><span> </span><span id="consignee_zip"></span>
                            </li>
                            <li>
                                <span style="display: none;" id="consignee_contact_icon"><i class="fa fa-user"></i><span id="consignee_contact"></span></span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i><span id="consignee_phone"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="panel panel-default" id="update_panel">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Last Update</h3>
                    </div>
                    <div class="panel-body">
                        <ul id="update" style="list-style:none">
                            <li>
                                <span id="load_status"></span>
                            </li>
                            <li>
                                <span id="status_description"></span>
                            </li>
                            <li>
                                <span id="status_date"></span>
                            </li>            
                        </ul>
                    </div>
                </div>
                    
                <div class="panel panel-default" id="documents_panel">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Documents</h3>
                    </div>
                    <div class="panel-body">
                        <ul style="list-style:none" id="docs">
                            <!--<li><span id="document_bol_text"></span></li>
                            <li><span id="document_pod_text"></span></li>
                            <li><span id="document_cus_text"></span></li>-->
                            <div id="bol_div"></div>
                            <div id="pod_div"></div>
                            <div id="document_bol_text" hidden=""></div>
                            <div id="document_pod_text" hidden=""></div>
                            <div id="document_cus_text" hidden=""></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="panel panel-default" id="panel_ref">
                    <div class="panel-heading" id="p_heading">
                        <h3 class="panel-title">Reference Information</h3>
                    </div>
                    <div class="panel-body">
                        <span id="span">BOL:<span id="ref_bol"></span><br></span>
                        <span id="spanpo">PO NUMBER:<span id="ref_po"></span><br></span>
                        <span id="spanpro">PRO: <span id="ref_pro"></span><br></span>
                        <!--<span id="span">SCAC:<span id="ref_scac"></span><br /></span>
                        <span id="span">Tracking Dispatcher:<span id="ref_tracking_dispatcher"></span><br /></span>-->
                        <span id="spanpiece">Piece Count: <span id="ref_piece_count"></span><br></span>
                    </div>
                </div>
            </div>            
        </div>


        <h2 id="h_ocult">Tracking Information</h2>
        <div class="" id="answer-text" hidden=""></div>
        <div id="table_div">       
            <table  class="tablesorter table" id="table_sort">
                <thead>
                    <tr>
                        <th data-sort="string" data-sort-default="desc">Date</th> 
                        <th>Status</th>
                        <th>Detail</th> 
                        <th>City</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
          </table>
        </div>
