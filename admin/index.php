<?php
require_once('functions/function.php');
needLogged();
get_header();
get_sidebar();
get_breadcrumb();

 ?>

	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<div class="dashboard">
					<h2>Dashboard <lavel>Overview & Stats</lavel> </h2>
				</div>
			</div>
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<div class="users">
							<h3><i class="fa fa-user-circle"></i> Manage Users</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam reprehenderit natus culpa ad iste quas dolorum voluptatum magnam officiis a!</p>
							<a href="#">View More <i class="fa fa-caret-down"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="website">
							<h3><i class="fa fa-globe"></i> Manage Website</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero incidunt nulla dolorem. Animi natus, illum at in cumque modi ullam.</p>
							<a href="#">View More <i class="fa fa-caret-down"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="data">
							<h3><i class="fa fa-database"></i> Manage Data</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam voluptatem omnis delectus a alias, cumque inventore provident placeat tenetur sint.</p>
							<a href="#">View More <i class="fa fa-caret-down"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--col-md-12 end-->

	<?php
          get_footer();
        ?>