    <div class="container top">
      
      <ul class="breadcrumb">
        <li>
          <a href="<?php echo site_url("admin"); ?>">
            <?php echo ucfirst($this->uri->segment(1));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li>
          <a href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>">
            <?php echo ucfirst($this->uri->segment(2));?>
          </a> 
          <span class="divider">/</span>
        </li>
        <li class="active">
          <a href="#">New</a>
        </li>
      </ul>
      
      <div class="page-header">
        <h2>
          Adding <?php echo ucfirst($this->uri->segment(2));?>
        </h2>
      </div>
 
      <?php
      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Well done!</strong> new product created with success.';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-error">';
            echo '<a class="close" data-dismiss="alert">×</a>';
            echo '<strong>Oh snap!</strong> change a few things up and try submitting again.';
          echo '</div>';          
        }
      }
      ?>
      
      <?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '');
      $options_manufacture = array('' => "Select");
      foreach ($manufactures as $row)
      {
        $options_manufacture[$row['id']] = $row['name'];
      }

      //form validation
      echo validation_errors();
      
      echo form_open('admin/products/add', $attributes);
      ?>
        <fieldset>
          <div class="form-group">
            <label for="inputError" class="control-label col-lg-2 ">Description</label>
              <div class="col-lg-6">
                <input type="text" id="" name="description" value="<?php echo set_value('description'); ?>" class="form-control">
              </div>      
              <!--<span class="help-inline">Woohoo!</span>-->
          </div>
          <div class="form-group">
            <label for="inputError" class="control-label col-lg-2">Stock</label>
               <div class="col-lg-6">
              <input type="text" id="" name="stock" value="<?php echo set_value('stock'); ?>" class="form-control">
              </div>       
              <!--<span class="help-inline">Cost Price</span>-->
          </div>
            
          <div class="form-group">
            <label for="inputError" class="control-label col-lg-2">Cost Price</label>
               <div class="col-lg-6">
              <input type="text" id="" name="cost_price" value="<?php echo set_value('cost_price'); ?>" class="form-control">
              </div>
              <!--<span class="help-inline">Cost Price</span>-->
          </div>
          <div class="form-group">
            <label for="inputError" class="control-label col-lg-2">Sell Price</label>
               <div class="col-lg-6">
              <input type="text" name="sell_price" value="<?php echo set_value('sell_price'); ?>" class="form-control">
              </div>
              <!--<span class="help-inline">OOps</span>-->
          </div>
          <?php
          echo '<div class="form-group">';
            echo '<label for="manufacture_id" class="control-label col-lg-2">Manufacture</label>';
              //echo form_dropdown('manufacture_id', $options_manufacture, '', 'class="span2"');
               echo '<div class="col-lg-6">';
              echo form_dropdown('manufacture_id', $options_manufacture, set_value('manufacture_id'), 'class="form-control"');
              echo '</div>';
            
          echo '</div>';
          ?>
          <div class="form-actions row col-lg-offset-3">
            <button class="btn btn-primary" type="submit">Save changes</button>
            <button class="btn" type="reset">Cancel</button>
          </div>
        </fieldset>

      <?php echo form_close(); ?>

    </div>
     