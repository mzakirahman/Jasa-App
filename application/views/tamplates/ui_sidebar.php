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
								</ul>
							<?php endforeach; ?>

						<?php endforeach; ?>


						<ul>

							</li>
							<li><a href="#">Vegetables</a></li>
							<li><a href="#">Fruit & Nut Gifts</a></li>

						</ul>
					</div>
					<div class="sidebar__item">
						<h4>Department</h4>
						<ul>
							<li><a class="fa fa-angle-right" href="#"> Fresh Meat</a></li>
							<li><a href="#">Vegetables</a></li>
							<li><a href="#">Fruit & Nut Gifts</a></li>
							<li><a href="#">Fresh Berries</a></li>
							<li><a href="#">Ocean Foods</a></li>
							<li><a href="#">Butter & Eggs</a></li>
							<li><a href="#">Fastfood</a></li>
							<li><a href="#">Fresh Onion</a></li>
							<li><a href="#">Papayaya & Crisps</a></li>
							<li><a href="#">Oatmeal</a></li>
						</ul>
					</div>
					<div class="sidebar__item">
						<h4>Price</h4>
						<div class="price-range-wrap">
							<div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
								<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
							</div>
							<div class="range-slider">
								<div class="price-input">
									<input type="text" id="minamount">
									<input type="text" id="maxamount">
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar__item sidebar__item__color--option">
						<h4>Colors</h4>
						<div class="sidebar__item__color sidebar__item__color--white">
							<label for="white">
								White
								<input type="radio" id="white">
							</label>
						</div>
						<div class="sidebar__item__color sidebar__item__color--gray">
							<label for="gray">
								Gray
								<input type="radio" id="gray">
							</label>
						</div>
						<div class="sidebar__item__color sidebar__item__color--red">
							<label for="red">
								Red
								<input type="radio" id="red">
							</label>
						</div>
						<div class="sidebar__item__color sidebar__item__color--black">
							<label for="black">
								Black
								<input type="radio" id="black">
							</label>
						</div>
						<div class="sidebar__item__color sidebar__item__color--blue">
							<label for="blue">
								Blue
								<input type="radio" id="blue">
							</label>
						</div>
						<div class="sidebar__item__color sidebar__item__color--green">
							<label for="green">
								Green
								<input type="radio" id="green">
							</label>
						</div>
					</div>
					<div class="sidebar__item">
						<h4>Popular Size</h4>
						<div class="sidebar__item__size">
							<label for="large">
								Large
								<input type="radio" id="large">
							</label>
						</div>
						<div class="sidebar__item__size">
							<label for="medium">
								Medium
								<input type="radio" id="medium">
							</label>
						</div>
						<div class="sidebar__item__size">
							<label for="small">
								Small
								<input type="radio" id="small">
							</label>
						</div>
						<div class="sidebar__item__size">
							<label for="tiny">
								Tiny
								<input type="radio" id="tiny">
							</label>
						</div>
					</div>
					<div class="sidebar__item">
						<div class="latest-product__text">
							<h4>Latest Products</h4>
							<div class="latest-product__slider owl-carousel">
								<div class="latest-prdouct__slider__item">
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-1.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-2.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-3.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
								</div>
								<div class="latest-prdouct__slider__item">
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-1.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-2.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
									<a href="#" class="latest-product__item">
										<div class="latest-product__item__pic">
											<img src="<?= base_url('ui_assets/'); ?>img/latest-product/lp-3.jpg" alt="">
										</div>
										<div class="latest-product__item__text">
											<h6>Crab Pool Security</h6>
											<span>$30.00</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
