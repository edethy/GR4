angular.module('app', ['appServices'])
	.config(['$routeProvider', function($routeProvider) {
		$routeProvider.
			when('/program', {templateUrl: 'program.html', controller: ProgramCtrl}).
			otherwise({redirectTo: '/program'});
		}]);

angular.module('appServices', [])
	.factory('Model', function() {
		var data = [
			{title:'Amphibious Achievement', location: 'Cambridge, MA', website: 'program_page.php', logo: '../program_logos/amphibious.png', description: 'Amphibious Achievement is an MIT student-run service organization. Our goal is to promote success in and out of the water for urban high school students through instruction in aquatic sports and college preparatory tutoring. The program runs every Sunday from 9am-1pm, beginning with the two-hour athletic portion. Swimmers are taken to the Olympic-sized aquatic facilities at the Zesiger Center, while rowers are taken to the MIT Division I Pierce Boathouse.'}, 
			{title: 'MITES',location: 'Cambridge, MA', website: 'program_page.php', logo: '../program_logos/mites.png', description: 'Through the MITES (Minority Introduction to Engineering and Science) program OEOP offers three rigorous residential and on-line, academic enrichment programs for promising high school juniors who are interested in studying and exploring careers in science and engineering. These national programs stress the value and reward of pursuing advanced technical degrees and careers while developing the skills necessary to achieve success in science and engineering. The programs are rooted in MITs belief in the importance of students from diverse populations to pursue higher education and careers in these fields.'},
			{title:'Leadership Training Institute', location: 'Cambridge, MA', website: 'program_page.php', logo: '../program_logos/lti.png', description: 'The Leadership Training Institute is a program for high school students that helps develop leadership skills. Throughout our 12-week program, our students implement what they learn as they work to create a sustainable community service project.'},
			{title:'DynaMIT', location: 'Cambridge, MA', website: 'program_page.php', logo: '../program_logos/dynaMIT.png', description: 'DynaMIT is a completely free, week-long summer program held at MIT for Boston and Cambridge area middle school students. Our mission is to provide students from low-income families with an opportunity to explore and experience science and engineering through hands-on experiments and challenges.'}];
		return {
			programs:function() {	
				return data;
			}
		}
	});

function ProgramCtrl($scope, Model) {
	$scope.programs = Model.programs();
}

function MainCtrl($scope) {}