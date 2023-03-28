<footer class="pt-5 d-flex justify-content-between">
  <span>Copyright © 2019-2020 <a href="https://themesberg.com">Themesberg</a></span>
  <ul class="nav m-0">
      <li class="nav-item">
        <a class="nav-link text-secondary" aria-current="page" href="#">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="#">Terms and conditions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-secondary" href="#">Contact</a>
      </li>
    </ul>
</footer>
<style>
    footer{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
</main>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script>
    new Chartist.Line('#traffic-chart', {
    labels: ['January', 'Februrary', 'March', 'April', 'May', 'June'],
    series: [
      [23000, 25000, 19000, 34000, 56000, 64000]
    ]
  }, {
  low: 0,
  showArea: true
});
</script>   
</body>
</html>