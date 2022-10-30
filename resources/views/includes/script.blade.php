<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="/vendor/jquery/jquery.slim.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script>
	function navbarResponsive() {
      const navbar = document.getElementById('navbarNav');
      if (navbar.className === 'nav flex-column nav-top') {
        navbar.className += ' responsive';
      } else {
        navbar.className =
          "nav flex-column nav-top";
      }
    }
</script>