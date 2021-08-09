<?php if( ! is_front_page() ): ?>
            </div>
          </div>
        </main>
      </div>
    </div>
<?php endif; ?>
  <footer class="footer" id="footer">
      <div class="footerContents">
        <div class="footerContents-contact">
          <div class="enterprise-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Mejiro Medical Corp" />
          </div>
          <div class="enterprise-detail">
            <p class="name">医療法人目白会</p>
            <p class="address">
						東京都豊島区目白0-0-0<br />
						目白クイーンビル 
            </p>
          </div>
        </div>
        <div class="footerContents-sitemap">
          <nav class="footer-nav">
<?php
wp_nav_menu(
  array (
    'theme_location' => 'place_footer',
    'container' => false,
  )
);
?>
          </nav>
        </div>
      </div>
      <ul class="sns-navi">
        <li class="twitter"><a href="https://twitter.com/ultrakiricub"></a></li>
        <li class="facebook"><a href="#"></a></li>
        <li class="instagram"><a href="#"></a></li>
      </ul>
      <p class="copyright">
        <small class="copyright-text">&#169; 2021 Mejiro Medical Corporation.</small>
      </p>
    </footer>
  </div><!-- /.container -->
  <?php wp_footer(); ?>
</body>
</html>