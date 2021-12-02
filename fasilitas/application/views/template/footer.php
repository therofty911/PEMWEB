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
            total: 20
        });
        else $.firefly({
            minPixel: 1,
            maxPixel: 5,
            total: 40
        });
    }
</script>
</body>

</html>