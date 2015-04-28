<?php
session_start();
if(!isset($_SESSION['email'])){
	header('Location: ./login.php');
	die();
}
require_once('navigation.php');
?>
<div  ng-app="teams" ng-controller="teamsController" ng-init="game_map={1:'3 a Side Baddy', 2:'7 Stones', 3:'Dodgeball', 4:'Foot Volley', 5:'Futsal', 6:'Gully Cricket(Boys)', 7:'Gully Cricket(Girls)', 8:'Handball', 9:'Kho-Kho', 10:'No Dribble Basky(Girls)', 11:'Tug Of War', 12:'Ultimate Frisbee(Boys)', 13:'Ultimate Frisbee (Girls)', 14:'Carrom Wars', 15: 'Handball (Girls)'}">
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrations are Closed!
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Register</li>
                </ol>
                <p>Please refer to the constraints of registration before registering.</p>
            </div>
        </div>
        <!-- /.row -->

<div class="col-lg-12">
<form class="form-horizontal" id="registration_form" name="registration_form" novalidate>
<fieldset>

<!-- Form Name -->
<legend>Team Registration Form</legend>
<div class="alert alert-success alert-dismissable hidden" id="success_message">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
   Team Successfully registered. Please refresh the page!.
</div>
<div class="alert alert-danger alert-dismissable" id="">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
   <span id="">Those who are found registering illegal teams, will disqualified from Hallabol!</span>
</div>
<div class="alert alert-danger alert-dismissable hidden" id="error_message">
   <button type="button" class="close" data-dismiss="alert" 
      aria-hidden="true">
      &times;
   </button>
   <span id="error_msg">Unable to register, please check your input values.</span>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="select_game">Select Game</label>
  <div class="col-md-6">
    <select class="form-control" name="select_game" id="select_game">
      <<option data-team="3" data-link="3_a_side_baddy" value="1">3 A Side Baddy</option>
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
      <option data-team="7" data-link="handball" value="15">Handball(Girls)</option>
    </select>
  </div>
</div>

<div class="form_inputs">
<!-- Text input-->
<div class="alert alert-warning" role="alert" hidden>
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Please write Full Name and Roll No for valid registrations, any error in roll no will 
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="team_name">Team Name</label>  
  <div class="col-md-6">
  <input id="team_name" name="team_name" style="text-transform:capitalize" type="text" placeholder="Name of your awesome team" class="form-control input-md" required="">
  <span class="help-block">Maximum characters:50</span>  
  </div>
</div>

<div id="team_members">
<!-- Text input-->
<div class="form-group" id="team_member_1">
  <label class="col-md-2 control-label col-md-offset-2" for="team_member_1">Captain</label>

    <div class="col-md-2">
    <select class="form-control smt" name="smt_1" id="smt_1" member="1">
        <option value="1">Student</option>
        <option value="2">Other</option>
    </select>
    </div>
  <div class="col-md-4">
    <select id="tms_1" name="tms_1" class="form-control input-md tms">
      <option value="select">Select</option>
    </select>
  </div>
  <div class="col-md-4">
    <input id="tmi_1" name="tmi_1" type="text" placeholder="Name" style="text-transform:capitalize" class="form-control input-md tmi" required="">
  </div>
</div>

</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Register</button>
  </div>
</div>
</div><!-- ./Form inputs -->

</fieldset>
</form>
</div>
  </div>

  <div class="container">
    <div class="col-lg-12">
      <h3 class="page-header">My Registered Teams</h3>
            </div>
        <div class="my_registrations col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-1">
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
</div>
<script>
  angular.module("teams", [])
  .controller("teamsController", function($scope, $http) {
    $scope.teamsForm = {};
    $('#data_teams').hide();
    $http.get("./JSON/user_teams_JSON.php")
      .success(function(response) {$scope.teamsForm.events = response;$('#data_teams').show();});
});
function create_input(n){
  return '\
  <div class="form-group" id="team_member_'+n+'">\
  <label class="col-md-2 control-label col-md-offset-2" for="team_member_'+n+'">Team Member '+n+'</label>\
    <div class="col-md-2">\
    <select class="form-control smt" name="smt_'+n+'" id="smt_'+n+'" member="'+n+'">\
        <option value="1">Student</option>\
        <option value="2">Other</option>\
    </select>\
    </div>\
  <div class="col-md-4">\
    <select id="tms_'+n+'" name="tms_'+n+'" class="form-control input-md tms">\
      <option value="select">Select</option>\
    </select>\
  </div>\
  <div class="col-md-4">\
    <input id="tmi_'+n+'" name="tmi_'+n+'" type="text" style="text-transform:capitalize" placeholder="Full Name" class="form-control input-md tmi" required="">\
  </div>';
}

$(document).ready(function(){
$('#select_game').val('');
function ucfirst(str,force){
  str=force ? str.toLowerCase() : str;
  return str.replace(/(\b)([a-zA-Z])/,
    function(firstLetter) {
      return firstLetter.toUpperCase();
    });
}

function assignOnChangeListener(){
  $('.smt').on('change',function(e){
      member = $(this).attr('member');
      option = $('#smt_'+member).val();
      if(option!=1){
        $('#tms_'+member).hide();
        $('#tms_'+member).val('');
        $('#tmi_'+member).show();
      } else{
        $('#tms_'+member).show();
        $('#tms_'+member).val('select');
        $('#tmi_'+member).hide();
      }
    });
}

function assignSelectorValues(){
  game = $('#select_game').val();
  $('.tms').empty();
  $('.tms').append('<option value="select">Select</option>');
  for(p in playerData){
      disabled="";
      if($.inArray(parseInt(game), playerData[p]['reg_in']) > -1){
        disabled = "disabled";
      }
      $('.tms').append('<option value="'+p+'" '+disabled+'>'+playerData[p]["name"]+' '+p+' '+playerData[p]["details"]+'</option>');
    }
}

  var playerData;
  gettingJSON = $.getJSON( "JSON/registrations_JSON.php", function( data ) {
    game = $('#select_game').val();
    playerData = data;
    $('.tms').empty();
    $('.tms').append('<option value="select">Select</option>');
    for(p in data){
      disabled="";
      if($.inArray(game, playerData[p]['reg_in']) > -1) disabled = "disabled";
      $('.tms').append('<option value="'+p+'" '+disabled+'>'+playerData[p]["name"]+' '+p+' '+playerData[p]["details"]+'</option>');
    }
  });
  gettingJSON.done(function(){
    attachSubmit();
  });

  $('.form_inputs').hide();
  $('#select_game').on('change', function(){
    $("#submit").prop('disabled', false);
    team_members_num = $('#select_game').find('option:selected').attr('data-team');
    ref = $('#select_game').find('option:selected').attr('data-link');
    $('#team_members').children().not('#team_member_1').remove();
    $('.form_inputs').show();
    for (i = 2; i < parseInt(team_members_num)+1; i++) {
      $('#team_members').append(create_input(i));
    }
    $('.tmi').hide();
    assignOnChangeListener();
    assignSelectorValues();
  });
  
function attachSubmit(){

  $( "#registration_form" ).submit(function( event ) {

    // Stop form from submitting normally
    event.preventDefault();
    $("#submit").prop('disabled', true);
    if($('#team_name').val().length>50){
      alert("Number of characters exceeding in team name.");
      $('#team_name').focus();
      return;
    }

    team = "";
    team_obj = $('#team_members').children().children().children();
    console.log(team_obj);
    for(i=0; i<team_obj.length-1; i++) {
      team += team_obj[i].value+", ";
    }
    team+=team_obj[team_obj.length-1].value;
    team_name = $('#team_name').val();
    if(team_name==""){
      alert("Please enter team name");
      return;
    }
    game = $('#select_game').val();

    var data = new Object;
    data.game = game;
    data.team_name = team_name;
    
    data.rolls = "";

    data.rolls = $(".tms").map(function() {
      if(this.value!='select' || this.value!='') return this.value;
    }).get().join();
    if(($.inArray('select', data.rolls.split(',')) > -1) && game!=11){
      alert("One or more fields empty!");
      return;
    }

    data.team_members=$(".tms").map(function() {
    if(this.value!='' && this.value!='select' ) return playerData[this.value]['name']+" ("+this.value+")";
    }).get().join();
    
    data.team_members+=$(".tmi").map(function() {return this.value;}).get().join(" ");
    console.log(data.team_members);

    // Send the data using post
    var posting = $.post( './register_back.php', $.param(data) );

    // Put the results in a div
    posting.done(function( data ) {
      console.log('successful registration: '+data);
      $('#success_message').removeClass('hidden');
      $('#team_members').children().not('#team_member_1').remove();
      $('.form_inputs').hide();
      $('#select_game').val('');
    });
    posting.fail(function(data){
      console.log('unsuccessful registration: '+data);
      $('#error_message').removeClass('hidden');
    });
  });
}  
  

});

</script>
<?php
require_once('footer.php');
?>