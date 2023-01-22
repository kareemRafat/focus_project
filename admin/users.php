
<?php

	include "includes/header.php";
	include "includes/sidebar.php";

 ?>

	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Users</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Users</h1>
			</div>
		</div><!--/.row-->
		

<div class="row">
	<div class="col-lg-12">
		<?php 

		if (!isset($_GET['action'])) {

			include "design/user_view.php";

		} elseif($_GET['action'] == 'add') {

			include "design/user_add.php";

		} elseif($_GET['action'] == 'edit') {

			include "design/user_edit.php";

		}

		 ?>
	</div>
</div>

		
	</div>	<!--/.main-->
<?php 

	include "includes/footer.php";

?>