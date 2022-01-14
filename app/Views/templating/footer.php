<?= $this->renderSection('footer')?>

<footer class="footer">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="/index.html">
                CodeMassive Education
              </a>
            </li>
            <li>
              <a href="/profile.html">
                About Me
              </a>
            </li>
            <li>
              <a href="/comingsoon.html">
                Pelajaran
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, CodeMassive Education Web
        </div>
      </div>
    </footer>
  </div>
  
  <script src="/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="/assets/js/plugins/bootstrap-switch.js"></script>
  <script src="/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <script src="/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>