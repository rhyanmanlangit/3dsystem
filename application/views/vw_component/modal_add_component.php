<div id="addComponent" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Component</h4>
      </div>
      <form class="cmp_form" action="<?php echo base_url('/component_controller/add_component'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                    <label for="componenName" class="small">Component Name</label>
                    <input type="text" class="form-control input-sm" name="c_name">
                  </div>
                  <div class="form-group">
                    <label for="componenType" class="small">Component Type</label>
                      <select class="form-control input-sm" name="c_type">
                        <?php 
                          foreach ($component_type_list as $key => $value) {
                            echo '<option value='.$value['component_type_id'].'>'.$value['component_type_name'].'</option>';
                          }
                         ?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="componentDescription" class="small">Component Description</label>
                    <textarea name="c_description" id="" class="form-control input-sm" rows="2"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="supplierName" class="small">Manufacturer Name</label>
                    <select name="supplier_id" class="form-control input-sm">
                      <?php 
                        foreach ($manufacturer_list as $key => $value) {
                          echo '<option value='.$value['manufacturer_id'].'>'.$value['manufacturer_name'].'</option>';
                        }
                       ?>
                    </select>
                  </div>
                  <hr class="dash-divider">
                  <div class="form-group">
                    <label class="control-label">3D Drawings</label>
                    <input id="input-1a" type="file" class="file" data-show-preview="false" name="c_3drawing">
                  </div>
                  <div class="form-group">
                    <label class="control-label">2D Drawings</label>
                    <input id="input-1b" type="file" class="file" data-show-preview="false" name="c_2drawing">
                  </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="componentUnits" class="small">Unit</label>
                    <input type="text" class="form-control input-sm" name="c_unit">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="qtyOrder" class="small">QTY per Order</label>
                    <input type="text" class="form-control input-sm" name="qty_per_ordr">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="productionStock" class="small">Production Stocks</label>
                    <input type="text" class="form-control input-sm" name="c_pstock">
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-4">
                  <label for="priceUSBulk" class="small">US Price (per Order)</label>
                  <input type="text" class="form-control input-sm" name="c_us_priceo">
                </div>
                <div class="col-md-4">
                  <label for="priceUSPc" class="small">US Price (per Pc)</label>
                  <input type="text" class="form-control input-sm" name="c_us_pricep">
                </div>
                <div class="col-md-4">
                  <label for="pricePhp" class="small">PHP Price (per PC)</label>
                  <input type="text" class="form-control input-sm" name="c_rp_price">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <hr class="dash-divider">
                  <div class="form-group">
                    <label class="control-label">Component Image</label>
                    <input id="input-1c" type="file" class="file" data-show-preview="false">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="remarks" class="small">Remarks</label>
                    <textarea name="c_rermarks" class="form-control input-sm" rows="5"></textarea>
                   </div>
                </div>
              </div> <!-- .row-->
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>

  </div>
</div>