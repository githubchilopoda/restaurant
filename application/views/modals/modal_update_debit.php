<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Debit</h3>
  <form id="form-update-debit" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataDebit->id; ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-pencil-square-o"></i>
      </span>
      <input type="text" class="form-control" placeholder="Bank Code" name="bank_code" aria-describedby="sizing-addon2" value="<?php echo $dataDebit->bank_code; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-money"></i>
      </span>
      <input type="text" class="form-control" placeholder="Bank Name" name="bank_name" aria-describedby="sizing-addon2" value="<?php echo $dataDebit->bank_name; ?>">
    </div>
      <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>