<!-- Footer Component -->
<footer class="footer">
    <div class="footer__social-media">
        <ul class="navbar__menu center">
            <li><a href="https://www.facebook.com/brindiii/"><img src="../img/facebook.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/bindferri/"><img src="../img/instagram.png" alt=""></a></li>
            <li><a href="https://github.com/bindferri"><img src="../img/github.png" alt=""></a></li>
        </ul>
    </div>
    <div>
        <p class="footer__content">2022 &copy; BIND FERRI - ALL RIGHTS RESERVED</p>
    </div>
</footer>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Data', 'Items'],
            ["Hero", <?php echo $heroCount ?>],
            ["Projects", <?php echo $projectCount ?>],
            ["Contact", <?php echo $contactCount ?>],
            ["Skills", <?php echo $skillsCount ?>],
            ['Footer', <?php echo $footerCount ?>]

            // ['Posts', 1000],

        ]);

        var options = {
            chart: {
                title: 'Activity',
                subtitle: '',
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>
</body>
</html>
