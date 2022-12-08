<!-- CONTENT START -->
<div class="col-lg-9 col-md-7">
	<div class="card mb-3 col-lg-8">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title"><?= $user['name']; ?></h5>
					<p class="card-text"><?= $user['email']; ?></p>
					<p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="product__discount">
		<div class="section-title product__discount__title">
			<h2>Sale Off</h2>
		</div>
		<div class="row">
			<div class="product__discount__slider owl-carousel">
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-1.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Dried Fruit</span>
							<h5><a href="#">Raisin’n’nuts</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-2.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Vegetables</span>
							<h5><a href="#">Vegetables’package</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-3.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Dried Fruit</span>
							<h5><a href="#">Mixed Fruitss</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-4.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Dried Fruit</span>
							<h5><a href="#">Raisin’n’nuts</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-5.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Dried Fruit</span>
							<h5><a href="#">Raisin’n’nuts</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="product__discount__item">
						<div class="product__discount__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/discount/pd-6.jpg">
							<div class="product__discount__percent">-20%</div>
							<ul class="product__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="product__discount__item__text">
							<span>Dried Fruit</span>
							<h5><a href="#">Raisin’n’nuts</a></h5>
							<div class="product__item__price">$30.00 <span>$36.00</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="filter__item">
		<div class="row">
			<div class="col-lg-4 col-md-5">
				<div class="filter__sort">
					<span>Sort By</span>
					<select>
						<option value="0">Default</option>
						<option value="0">Default</option>
					</select>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="filter__found">
					<h6><span>16</span> Products found</h6>
				</div>
			</div>
			<div class="col-lg-4 col-md-3">
				<div class="filter__option">
					<span class="icon_grid-2x2"></span>
					<span class="icon_ul"></span>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-1.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-2.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-3.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-4.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-5.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-6.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-7.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-8.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-9.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-10.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-11.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="product__item">
				<div class="product__item__pic set-bg" data-setbg="<?= base_url('ui_assets/'); ?>img/product/product-12.jpg">
					<ul class="product__item__pic__hover">
						<li><a href="#"><i class="fa fa-heart"></i></a></li>
						<li><a href="#"><i class="fa fa-retweet"></i></a></li>
						<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
					</ul>
				</div>
				<div class="product__item__text">
					<h6><a href="#">Crab Pool Security</a></h6>
					<h5>$30.00</h5>
				</div>
			</div>
		</div>
	</div> -->
	<!-- <div class="product__pagination">
		<a href="#">1</a>
		<a href="#">2</a>
		<a href="#">3</a>
		<a href="#"><i class="fa fa-long-arrow-right"></i></a>
	</div> -->
</div>
<!-- CONTENT END -->
</div>
</div>
</section>
<!-- Product Section End -->
