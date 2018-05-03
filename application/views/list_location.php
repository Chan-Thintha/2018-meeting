<br>
<div id="container" >
	<div class="row-fluid">
		<div class="col-12">
<table id="location" class="table table-striped table-bordered  " width="100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
      <?php   
         foreach ($list_location as $row) {
         ?>
           <tr>
               
              <td>
                  <?php echo $row->loc_id; ?>
                    
                  <a href="<?php echo base_url(); ?>welcome/edit_location" id="edit_location" title="Edit Location"><i class="mdi mdi-pencil"></i></a>
                  <a href="#" class="confirm-delete" title="Delete Location" data-toggle="modal" data-target="#frmConfirmDelete"><i class="mdi mdi-delete"></i></a>
                  <a href="#" class="Pin-location" title="Pin Location" data-toggle="modal" data-target="#map"><i class="mdi mdi-map-marker"></i></a>
                  &nbsp;
                  <a href="<?php echo base_url(); ?>welcome/list_room?loc_id=<?php echo $row->loc_id; ?>">Room</a>
              </td>
               <td><?php echo $row->loc_name; ?></td>
               <td><?php echo $row->description; ?></td>
               <td><?php echo $row->place; ?></td>    
           </tr>  
        <?php
        }
      ?>
    </tbody> 
        </table>
    </div>
</div>

  <div class="row-fluid"><div class="col-12">&nbsp;</div></div>
  <!-- button create location -->
	<div class="container">
		<div class="row-fluid">
      <div class="col-12">
        
        &nbsp;
        <a href="<?php echo base_url(); ?>welcome/create_location" class="btn btn-primary"><i class="mdi mdi-plus"></i>&nbsp;Create Location</a>
      </div>
  </div>
	</div>
  

</div>
<!-- Delete modal pop up -->
<div id="frmConfirmDelete" class="modal hide fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
	    <div class="modal-header">
				<h5 class="modal-title">Delete confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
	    </div>
	    <div class="modal-body">
	        <p>You are going to delete a location.</p>
	        <p>Are you sure that you want to perform this action?</p>
	    </div>
	    <div class="modal-footer">
	        <a href="<?php echo base_url(); ?>welcome/delete_location?loc_id=<?php echo $row->loc_id;?>" class="btn btn-danger" id="lnkDeleteUser">Yes</a>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	    </div>
		</div>
	</div>
</div>
<!-- pop map -->
  <!-- The Modal -->
  <div class="modal fade" id="map">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">PNC Location</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.014193350545!2d104.88086341438076!3d11.550839347580931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951add5e2cd81%3A0x171e0b69c7c6f7ba!2sPasserelles+num%C3%A9riques+Cambodia+(PNC)!5e0!3m2!1sen!2skh!4v1524639253160" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<!-- link datatable -->
<link href="<?php echo base_url();?>assets/DataTable/DataTables-1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/DataTable//DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>

$(document).ready(function() {
    //Transform the HTML table in a fancy datatable
    $('#location').dataTable({
        select: true
    });


});
</script>
