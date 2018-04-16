// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/new/employee/barChartData.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var item1 = data.tea;
			var item2 = data.coffee;
			var item3 = data.samosa;
			var item4 = data.cake;

      var chartdata = {
        labels: ["Quantity"],
        datasets: [
          {
            label: "Tea",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: item1
          },
          {
            label: "Coffee",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(239, 02, 255, 0.75)",
            borderColor: "rgba(129, 202, 25, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 100, 133, 1)",
            data: item2
          },
					{
            label: "Samosa",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 25, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 102, 255, 1)",
            data: item3
          },
					{
            label: "Cake",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(25, 202, 25, 0.75)",
            borderColor: "rgba(229, 22, 255, 1)",
            pointHoverBackgroundColor: "rgba(239, 22, 235, 1)",
            pointHoverBorderColor: "rgba(229, 102, 255, 1)",
            data: item4
          },
        ]
      };

			var options = {
				legend : {
					display : true,
					position : "bottom"
				}
			};


      //get canvas
      var ctx = $("#myBarChart");

			var chart = new Chart( ctx, {
				type : "bar",
				data : chartdata,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});
