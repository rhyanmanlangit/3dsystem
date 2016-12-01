<div id="addManufacturer" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Manufacturer</h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" action="<?php echo base_url('/manufacturer_controller/add_manufacturer'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8"> <!-- form start -->
          <div class="form-group form-group-sm">
            <label for="manufacturerother" class="col-md-3 control-label">Source</label>
            <div class="col-md-5 col-md-offset-right-4">
              <input type="text" class="form-control" name="m_other1" placeholder="Source Name (eg. aliexpress.com)">
            </div>
          </div>
          <div class="form-group form-group-sm required">
            <label for="manufacturername" class="col-md-3 control-label">Company Name</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="m_name" placeholder="Name" required>
            </div>
          </div>
          <div class="form-group form-group-sm required">
            <label for="manufactureraddrs" class="col-md-3 control-label">Address</label>
            <div class="col-md-9">
              <textarea name="m_address" class="form-control" placeholder="Complete Address" required></textarea>
            </div>
          </div>
          <hr class="dashed-divider">
          <div class="clearix"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-group-sm required">
                <label for="manufactureraincharge" class="col-md-3 control-label">InCharge</label>
                <div class="col-md-9">
                  <input type="text" name="m_cperson" class="form-control" placeholder="Contact Person" required></input>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form-group-sm">
                <label for="manufacturerdesignation" class="col-md-3 control-label">Designation</label>
                <div class="col-md-9">
                  <input type="text" name="m_designation" class="form-control" placeholder="Salesman"></input>
                </div>
              </div>
            </div>
          </div>
          <hr class="dashed-divider">
          <div class="clearix"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group form-group-sm required">
                <label for="manufacturerzip" class="col-md-3 control-label">Zipcode</label>
                <div class="col-md-9">
                  <input type="text" max="8" class="form-control" name="m_zipcode" required></input>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form-group-sm required">
                <label for="manufacturercountry" class="col-md-3 control-label">Country</label>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="m_country" required></input>
                </div>
              </div>
            </div>
          </div> <!-- .row -->
          <div class="row">
            <div class="col-md-6">
               <div class="form-group form-group-sm required">
                <label for="manufacturerphone" class="col-md-3 control-label ">Phone Number</label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="m_phone" required ></input>
                </div>
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group form-group-sm">
                <label for="manufacturerfax" class="col-md-3 control-label">Fax Number</label>
                <div class="col-md-9">
                  <input type="number" class="form-control" name="m_fax"></input>
                </div>
              </div>
            </div>
            <div class="col-md-6">
               <div class="form-group form-group-sm required">
                <label for="manufactureremail" class="col-md-3 control-label">Email</label>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="m_email" required></input>
                </div>
              </div>
            </div>
          </div> <!-- .row-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      </form> <!-- .forn -->
      </div>
    </div>

  </div>
</div>