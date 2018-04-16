// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/new/employee/lineChartData.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var order_date = [];
      var quantity = [];

			var len = data.length;

			for (var i in data) {
        if (data[i].order_date = data[i].order_date) {
          var date = data[i].order_date;
        }
				order_date.push(date);
        quantity.push(data[i].quantity);
			}

      var chartdata = {
        labels: order_date,
        datasets: [
          {
            label: "Date",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(59, 89, 152, 0.75)",
            borderColor: "rgba(59, 89, 152, 1)",
            pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: order_date
          },
          {
            label: "Sales",
            fill: false,
            lineTension: 0.3,
            backgroundColor: "rgba(29, 202, 255, 0.75)",
            borderColor: "rgba(29, 202, 255, 1)",
            pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
            pointHoverBorderColor: "rgba(29, 202, 255, 1)",
            data: quantity
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
      var ctx = $("#myLineChart");

			var chart = new Chart( ctx, {
				type : "line",
				data : chartdata,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});
