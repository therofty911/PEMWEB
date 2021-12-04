<script>
    const doParticles = true;

    const getWidth = () => {
        return Math.max(
            document.body.scrollWidth,
            document.documentElement.scrollWidth,
            document.body.offsetWidth,
            document.documentElement.offsetWidth,
            document.documentElement.clientWidth
        );
    };

    if (doParticles) {
        if (getWidth() < 400) $.firefly({
            minPixel: 1,
            maxPixel: 5,
            total: 40
        });
        else $.firefly({
            minPixel: 1,
            maxPixel: 5,
            total: 70
        });
    }
</script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 5000);
</script>

</body>

</html>