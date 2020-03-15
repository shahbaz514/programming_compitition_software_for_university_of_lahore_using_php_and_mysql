<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }
  include 'inc.php';
?>
        <div class="container" style="margin-top: 75px;">
          <div class="row">
            <div class="col-sm-12">
              <div class="card hovercard">
                <iframe src="https://www.onlinegdb.com/online_c++_compiler" style="width: 100%; height: 100%;"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background: #003300; padding: 16px; color: #ffffff;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://uol.edu.pk/" style="color: yellow;"> UOL SGD</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
</body>
</html>