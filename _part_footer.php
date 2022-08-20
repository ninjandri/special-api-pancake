<script src="assets/jquery/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script>
    window.onload = function() {
        clocks();
    }

    function clocks() {
        var e = document.getElementById('clock'),
            d = new Date(),
            h, m, s;
        h = d.getHours();
        m = set(d.getMinutes());
        s = set(d.getSeconds());

        e.innerHTML = h + ':' + m + ':' + s;

        setTimeout('clocks()', 1000);
    }

    function set(e) {
        e = e < 10 ? '0' + e : e;
        return e;
    }
</script>


</body>

</html>