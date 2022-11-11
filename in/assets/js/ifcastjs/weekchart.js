

		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {type: 'line',

			data: {

				labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Friday', 'Sat','Sun'],

				datasets: [{

					label: '',

					data: [2, 9, 7, 5, 2, 8, 4],

					backgroundColor: [

						'rgba(255, 99, 132, 0.2)',

						'rgba(54, 162, 235, 0.2)',

						'rgba(255, 206, 86, 0.2)',

						'rgba(75, 192, 192, 0.2)',

						'rgba(153, 102, 255, 0.2)',

						'rgba(255, 159, 64, 0.2)'

					],

					borderColor: [

						'rgba(255, 99, 132, 1)',

						'rgba(54, 162, 235, 1)',

						'rgba(255, 206, 86, 1)',

						'rgba(75, 192, 192, 1)',

						'rgba(153, 102, 255, 1)',

						'rgba(255, 159, 64, 1)'

					],

					borderWidth: 1

				}]

			},

			options: {

				scales: {

					yAxes: [{

						ticks: {

							beginAtZero: true

						}

					}]

				}

			}

        });

        





        var ctx2 = document.getElementById('myChart2').getContext('2d');

		var myChart = new Chart(ctx2, {

			type: 'line',

			data: {

				labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Friday', 'Sat','Sun'],

				datasets: [{

					label: '',

					data: [2, 3, 6, 4, 7, 8, 5],

					backgroundColor: [

						'rgba(99, 255, 125, 0.2);',

						'rgba(54, 162, 235, 0.2)',

						'rgba(255, 206, 86, 0.2)',

						'rgba(75, 192, 192, 0.2)',

						'rgba(153, 102, 255, 0.2)',

						'rgba(255, 159, 64, 0.2)'

					],

					borderColor: [

						'rgba(255, 99, 132, 1)',

						'rgba(54, 162, 235, 1)',

						'rgba(255, 206, 86, 1)',

						'rgba(75, 192, 192, 1)',

						'rgba(153, 102, 255, 1)',

						'rgba(255, 159, 64, 1)'

					],

					borderWidth: 1

				}]

			},

			options: {

				scales: {

					yAxes: [{

						ticks: {

							beginAtZero: true

						}

					}]

				}

			}

		});





		