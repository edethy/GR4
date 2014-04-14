<!DOCTYPE html>
<html>
	<head>
		<!-- <link type="text/css" href="search_page.css" rel="stylesheet" /> -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		<link type='text/css' rel='stylesheet' href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
		<link type='text/css' rel='stylesheet' href="default.css" />
		<script src="search_list_results.js"></script>
	</head>
	<body>
		<?php include("main_search.php") ?>
		<div class="container">
			<div class="row">
				<div ng-controller=MainCtrl ng-app=app>
					<ng-view>Loading... </ng-view>
					<script type=text/ng-template id='program.html'>
						<div ng-repeat="program in programs">
							<div class="thumbnail program">
								<div class="row">
									<div class="col-md-3">
										<div> <img src= {{program.logo}} class="result_img"/> </div>
										<div class="rating">
											<span height="250">&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span><span>&#9734;</span>
										</div>
									</div>
									<div class="col-md-8">
										<h1> {{program.title}} </h1>
										<div> {{program.location}} </div>
										<div> {{program.description}} <a href={{program.website}}> Learn More </a> </div>
									</div>
								</div>
							</div>
						</div>
					</script>
				</div>
			</div>
		</div>

	</body>
</html>
 