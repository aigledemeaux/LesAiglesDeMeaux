    <?php wp_footer() ?>
<footer class="footer">
  <div class="firstpart">
    <h4 class="firstpart__title">Lien direct</h4>
    <!--<ul>
      <li>Forum</li>
      <li>Faq</li>
      <li>Contactez nous</li>
    </ul>-->
    <?php wp_nav_menu( array( 
    'theme_location' => 'menu lien direct',
    'menu_class' => '',
    'container' => 'ul',
    ) ); ?>
  </div>
  
  <div class="secondpart">
    <h4 class="secondpart__title">Nos partenaires</h4>
    <?php wp_nav_menu( array( 
    'theme_location' => 'partenaire',
    'menu_class' => '',
    'container' => 'ul',
    ) ); ?>
    <!--<ul>
      <li>Partenaire 1</li>
      <li>Partenaire 2</li>
      <li>Partenaire 3</li>
      <li>Partenaire 4</li>
      <li>Partenaire 5</li>
    </ul>-->
  </div>
  <div class="thirdpart">
  <h4 class="thirdpart__title">Contactez nous</h4>
   <?= do_shortcode('[contact-form-7 id="5" title="formulaire de contact du footer"]')?>
</div>
  <div class="fourthpart">
    <h4 class="fourthpart__title">Réseaux sociaux</h4>
    <div class="fourthpart__logo">
      <a target="blank" href="https://www.facebook.com/lesaiglesdemeaux/?__tn__=%2Cd%2CP-R&eid=ARA5WzUReg4VF4VUJn-sJaIw_BxZu0_cObJuddWOIvqWRX7DX5KJy9D7v5P4Jn6EBwDR6asX3RR3QZjb" class="fourthpart__logo__fb">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
      </a>
      <a href="#" class="fourthpart__logo__insta">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
    </div>
    


  </div>
</footer>

</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.1.0.js">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>