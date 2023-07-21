google.charts.load('current', {
    'packages': ['corechart'],
    'language': 'de'
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {

    var datenKreis = google.visualization.arrayToDataTable([
        ['Standort', 'Einschreibungen'],
        ['Hagen', 725],
        ['Iserlohn', 820],
        ['Meschede', 872],
        ['Soest', 776]
    ]);

    var dataBalken = google.visualization.arrayToDataTable([
        ['Standort', 'Erstsemester', 'Studierende'],
        ['Hagen', 725, 2845],
        ['Iserlohn', 820, 2660],
        ['Meschede', 872, 5036],
        ['Soest', 776, 2944]

    ]);

    var optKreis = {
        title: 'Einschreibungen 2012'
    };

    var chart = new google.visualization.PieChart(document.getElementById('pieChart'));
    var chartZwei = new google.visualization.ColumnChart(document.getElementById('columnChart'));

    chart.draw(datenKreis, optKreis);
    chartZwei.draw(dataBalken);
}