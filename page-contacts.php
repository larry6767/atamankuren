<?php
/**
 * Template Name: contacts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package atamankuren
 */

get_header('main'); ?>
  <section class="contacts">
    <ul class="contacts__list">

      <?php
      $contacts = get_field('contacts');
      foreach ($contacts as $key => $item) { ?>

        <li class="contacts__item">
          <div class="contacts__title"><?php echo $item['contacts_title']; ?></div>
          <div class="contacts__description">
            <?php echo $item['contacts_text']; ?>
          </div>
          <a href="mailto:<?php echo $item['contacts_email']; ?>" class="contacts__link">
            <?php echo $item['contacts_email']; ?>
          </a>
          <a href="<?php echo $item['contacts_phone_link']; ?>" class="contacts__link">
            <?php echo $item['contacts_phone']; ?>
          </a>
        </li>

      <?php } ?>

    </ul>
    <div class="contacts__filter"></div>
  </section>
  <section
    class="contacts-map"
    id="YMapsID"
    center-x="39.76444039541996"
    center-y="47.21694749460608"

    name1="Атаманский и гостиница Атаманская"
    hint1="г. Ростов-на-Дону, Левобережная улица, 8В"
    mark-geo1-x="39.76256016690064"
    mark-geo1-y="47.20597229932539"

    name2="Казачий курень"
    hint2="г. Ростов-на-Дону, Левобережная улица, 5"
    mark-geo2-x="39.80992029563134"
    mark-geo2-y="47.21815029911763"

    name3="Казачий курень"
    hint3="г. Ростов-на-Дону, проспект Соколова, 43"
    mark-geo3-x="39.71934419510647"
    mark-geo3-y="47.22716403164736"
  >

  </section>
<?php get_footer('main'); ?>
