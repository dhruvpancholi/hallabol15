<?php
session_start();
require_once('navigation.php');
?>
<div class="container" ng-app="teams" ng-controller="teamsController" ng-init="game_map={1:'3 a Side Baddy', 2:'7 Stones', 3:'Dodgeball', 4:'Foot Volley', 5:'Futsal', 6:'Gully Cricket(Boys)', 7:'Gully Cricket(Girls)', 8:'Handball', 9:'Kho-Kho', 10:'No Dribble Basky(Girls)', 11:'Tug Of War', 12:'Ultimate Frisbee(Boys)', 13:'Ultimate Frisbee (Girls)', 14:'Carrom Wars', 15: 'Handball (Girls)'}">
    <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registered Teams
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Teams</li>
                </ol>
                <p>Teams shown below are in the reverse order of their registration time. Bottom most people be ready for free stuff!</p>
            </div>
        </div>
        <!-- /.row -->
        <div class="alert alert-danger alert-dismissable" id="">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
   <span id="">Changes in the teams are made as per the requirements of the organizer of the particular event. All the clashes and other validation are done by the organizer himself/herself. Web Developers have no role to play in any of these activities.</span>
</div>
    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
                <h3 class="page-header">Select Game</h3>
            
                <select class="form-control" name="select_game" id="select_game" ng-model="teamsForm.game" ng-change="teamsForm.loadTeams(this)">
                  <option data-team="3" data-link="3_a_side_baddy" value="1">3 A Side Baddy</option>
                  <option data-team="6" data-link="7_stones" value="2">7 Stones</option>
                  <option data-team="6" data-link="dodgeball" value="3">Dodgeball</option>
                  <option data-team="7" data-link="foot_volley" value="4">Foot-Volley</option>
                  <option data-team="7" data-link="futsal" value="5">Futsal</option>
                  <option data-team="7" data-link="gully_cricket" value="6">Gully Cricket(Boys)</option>
                  <option data-team="6" data-link="gully_cricket" value="7">Gully Cricket(Girls)</option>
                  <option data-team="9" data-link="handball" value="8">Handball(Boys)</option>
                  <option data-team="9" data-link="kho_kho" value="9">Kho-Kho</option>
                  <option data-team="5" data-link="no_dribble_basky" value="10">No Dribble Basky(Girls)</option>
                  <option data-team="15" data-link="tug_of_war" value="11">Tug Of War</option>
                  <option data-team="10" data-link="ultimate_frisbee" value="12">Ultimate Frisbee(Boys)</option>
                  <option data-team="7" data-link="ultimate_frisbee" value="13">Ultimate Frisbee(Girls)</option>
                  <option data-team="2" data-link="carrom" value="14">Carrom Wars</option>
                  <option data-team="7" data-link="carrom" value="15">Handball(Girls)</option>
                </select>
          <div>
            <table class="table table-striped" data-effect="fade" id="data_teams">
              <thead>
                <tr>
                  <th class="col-md-2">Team Id</th>
                  <th class="col-md-2">Game</th>
                  <th class="col-md-3">Team Name</th>
                  <th>Team Members</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr ng-repeat="x in teamsForm.events">
                  <td>{{ x.team_id }}</td>
                <td>{{ game_map[x.game] }}</td>
                <td>{{ x.team_name }}</td>
                <td>{{ x.team_members }}</td>
                </tr>
              </tbody>
            </table>          
          </div>
          </div>
  </div>
<script>
  angular.module("teams", [])
  .controller("teamsController", function($scope, $http) {
   $scope.teamsForm = {};
   $('#data_teams').hide();
	$scope.teamsForm.loadTeams = function(item, event) {
		$('#data_teams').show();
		$http.get("./JSON/teams_JSON.php?game="+item.teamsForm.game)
		.success(function(response) {$scope.teamsForm.events = response;});
	}
});

</script>
<?php
require_once('footer.php');
?>