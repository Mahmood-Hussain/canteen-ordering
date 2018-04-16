// Chart.js scripts
// -- Set new default font family and font color to mimic Bootstrap's default styling
$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/new/employee/pieChartData.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var item1 = data.tea;
			var item2 = data.coffee;
			var item3 = data.samosa;
			var item4 = data.cake;
			var data = [];
			data.push(item1);
			data.push(item2);
			data.push(item3);
			data.push(item4);
			console.log(data);
			var chartdata = {
						labels : ["Tea", "Coffee", "Samosa", "Cake"],
						datasets : [
							{
								label : "TeamA score",
								data : data,
								backgroundColor : [
				                    "#DEB887",
				                    "#A9A9A9",
				                    "#DC143C",
				                    "#F4A460",
				                ],
				                borderColor : [
				                    "#CDA776",
				                    "#989898",
				                    "#CB252B",
				                    "#E39371",
				                ],
				                borderWidth : [1, 1, 1, 1]
											}
										]
									};

							var options = {
								title : {
									display : true,
									position : "top",
									text : "Prodects Sold",
									fontSize : 18,
									fontColor : "#111"
								},
								legend : {
									display : true,
									position : "bottom"
								}
							};


      //get canvas
      var ctx = $("#myPieChart");

			var chart = new Chart( ctx, {
				type : "pie",
				data : chartdata,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});
