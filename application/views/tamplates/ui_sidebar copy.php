<!-- Product Section Begin -->
<section class="product spad pt-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-5">
        <div class="sidebar">
          <div class="sidebar__item">


            <!-- query menu -->
            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <!-- looping menu -->
            <?php foreach ($menu as $m) : ?>
              <h4> <?= $m['menu']; ?></h4>
              <!-- SIAPKAN SUB-MENU SESUAI MENU -->

              <?php
              $menuId = $m['id'];
              $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";
              $subMenu = $this->db->query($querySubMenu)->result_array();
              ?>

              <?php foreach ($subMenu as $sm) : ?>
                <?php if ($title == $sm['title']) : ?>

                <?php else : ?>
                <?php endif; ?>
                <ul>
                  <li>
                    <a href="<?= base_url($sm['url']); ?>">
                      <i class="<?= $sm['icon']; ?>">
                      </i>
                      <span><?= $sm['title']; ?>
                      </span>
                    </a>
                  </li>
                </ul>
              <?php endforeach; ?>

            <?php endforeach; ?>

          </div>

        </div>
      </div>