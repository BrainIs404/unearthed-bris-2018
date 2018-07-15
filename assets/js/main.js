$(document).ready(function() {
  var delivery_time = 7;
  $("#delivery-time").html("<h2>" + delivery_time + " hours</h2>");

  var distance_traveled = 20;
  var fill_percentage = 50;
  $("#distance-traveled").html("<h2>" + distance_traveled + " m</h2>");
  $("#fill-percentage").html("<h2>" + fill_percentage + " %</h2>");

  var last_pod_distance = 10;
  var pods_per_hours = 2;
  $("#last-pod-distance").html("<h2>" + last_pod_distance + " m</h2>");
  $("#pods-per-hours").html("<h2>" + pods_per_hours + " pods/hours</h2>");

  var cleanup_amount = 40;
  var cleanup_time = 3;
  $("#cleanup-amount").html("<h2>" + cleanup_amount + " litre</h2>");
  $("#cleanup-time").html("<h2>" + cleanup_time + " hours</h2>");

  var ventilation_length = 10;
  var ventilation_time = 10;
  $("#ventilation-length").html("<h2>" + ventilation_length + " m</h2>");
  $("#ventilation-time").html("<h2>" + ventilation_time + " minutes</h2>");

  var power_cable_length = 20;
  var power_cable_time = 45;
  $("#power-cable-length").html("<h2>" + power_cable_length + " m</h2>");
  $("#power-cable-time").html("<h2>" + power_cable_time + " minutes</h2>");

  var water_pipe_length = 30;
  var water_pipe_time = 3;
  $("#water-pipe-length").html("<h2>" + water_pipe_length + " minutes</h2>");
  $("#water-pipe-time").html("<h2>" + water_pipe_time + " minutes</h2>");

  var dusting_count = "9:32:11";
  var distance_count = 20;
  $("#dusting-count").html("<h2>" + dusting_count + "</h2>");
  $("#distance-count").html("<h2>" + distance_count + " m</h2>");

});
