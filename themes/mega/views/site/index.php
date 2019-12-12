<?php
/**
 * Created by PhpStorm.
 * User: purwa
 * Date: 8/20/17
 * Time: 8:50 AM
 *
 * @var $this \yii\web\View
 */
use yii\helpers\Url;

$this->title = 'Beranda';
?>

<div id="mega-slider" class="carousel slide " data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#mega-slider" data-slide-to="0" class="active"></li>
		<li data-target="#mega-slider" data-slide-to="1"></li>
		<li data-target="#mega-slider" data-slide-to="2"></li>
	</ol>
	
	<!-- Wrapper for slides -->
	<div class="carousel-inner" role="listbox">
		<div class="item active beactive">
			<img src="<?= $this->theme->baseUrl ?>/images/slide-2.jpg" alt="...">
			<div class="carousel-caption">
				<img src="<?= $this->theme->baseUrl ?>/images/stars.png" alt="">
				<h2>Welcome to Daily Inn Hotel</h2>
				<p>An ideal and most suitable place for corporate meetings and seminars</p>
			</div>
		</div>
		<div class="item">
			<img src="<?= $this->theme->baseUrl ?>/images/slide-3.jpg" alt="...">
			<div class="carousel-caption">
				<img src="<?= $this->theme->baseUrl ?>/images/stars.png" alt="">
				<h2 style="color: #444444">Feel Like Your Home</h2>
				<p style="color: #444444">We serve you with the best facility</p>
			</div>
		</div>
		<div class="item">
			<img src="<?= $this->theme->baseUrl ?>/images/slide-1.jpg" alt="...">
			<div class="carousel-caption">
				<img src="<?= $this->theme->baseUrl ?>/images/stars.png" alt="">
				<h2>Perfect Place for Dining</h2>
				<p>We offer traditional Indonesian food and western food</p>
			</div>
		</div>
	</div>
	
	<!-- Controls -->
	<a class="left carousel-control" href="#mega-slider" role="button" data-slide="prev">
	</a>
	<a class="right carousel-control" href="#mega-slider" role="button" data-slide="next">
	</a>
</div>

<div class="mg-book-now">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h2 class="mg-bn-title">Search Rooms <span class="mg-bn-big">For rates & availability</span></h2>
			</div>
			<div class="col-md-9">
				<div class="mg-bn-forms">
					<form action="<?= Url::to(['site/booking'])?>">
						<div class="row">
							<div class="col-md-3 col-xs-6">
								<div class="input-group date mg-check-in">
									<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Check In" name="checkin">
								</div>
							</div>
							<div class="col-md-3 col-xs-6">
								<div class="input-group date mg-check-out">
									<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Check Out" name="checkout">
								</div>
							</div>
							<div class="col-md-4">
								<div class="row">
									<div class="col-xs-6 col-md-8">
										<select class="cs-select cs-skin-elastic" name="room">
											<option value="" disabled selected>Room Type</option>
											<option value="Suite Room">Suite Room</option>
											<option value="Executive Room">Executive Room</option>
											<option value="Deluxe Room">Deluxe Room</option>
											<option value="Superior Room">Superior Room</option>
											<option value="Standard Room">Standard Room</option>
										</select>
									</div>
									<div class="col-xs-6 col-md-4">
										<select class="cs-select cs-skin-elastic" name="qty">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="4">5</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<button type="submit" class="btn btn-main btn-block" name="book">Book Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mg-best-rooms">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mg-sec-title">
					<h2>Our Best Rooms</h2>
					<p>These best rooms chosen by our customers</p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<figure class="mg-room">
							<img src="<?= $this->theme->baseUrl ?>/images/room-1.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Suite Room</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
								<div class="mg-room-price">IDR 1,000<sup> 000/Night</sup></div>
								<p>The 33 square meter room with classic modern design.</p>
								<a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
								<a href="#" class="btn btn-main">Book</a>
							</figcaption>
						</figure>
					</div>
					<div class="col-sm-4">
						<figure class="mg-room">
							<img src="<?= $this->theme->baseUrl ?>/images/room-3.png" alt="img11" class="img-responsive">
							<figcaption>
								<h2>Deluxe Room</h2>
								<div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
								<div class="mg-room-price">IDR 600<sup>,000/Night</sup></div>
								<p>The 20 square meter room with classic modern design.</p>
								<a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
								<a href="#" class="btn btn-main">Book</a>
							</figcaption>
						</figure>
					</div>
                    <div class="col-sm-4">
                        <figure class="mg-room">
                            <img src="<?= $this->theme->baseUrl ?>/images/room-2.png" alt="img11" class="img-responsive">
                            <figcaption>
                                <h2>Superior Room</h2>
                                <div class="mg-room-rating"><i class="fa fa-star"></i> 5.00</div>
                                <div class="mg-room-price">IDR 500<sup>,000/Night</sup></div>
                                <p>The 18 square meter room with classic modern design</p>
                                <a href="#" class="btn btn-link">View Details <i class="fa fa-angle-double-right"></i></a>
                                <a href="#" class="btn btn-main">Book</a>
                            </figcaption>
                        </figure>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<hr>
		</div>
	</div>
</div> -->
<div class="mg-about parallax">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h2 class="mg-sec-left-title">About Daily Inn Hotel</h2>
				<p>Daily Inn Hotel is an ideal and most suitable place for corporate meetings and seminars, as well for
                    social event (family gatherings, birthdays and weddings) and exhibition. It is strategically located
                    in the prime area of  Central Jakarta at Jalan Jendral Achmad Yani Kav. 67 Cempaka Putih Jakarta Pusat, Indonesia,
                    only few minutes from  University Negeri Jakarta (UNJ), National Monument (Monas), shopping malls (ITC Cempaka Mas, Trans Mart),
                    International – standard hospitals (Omni Hospital), and it only takes 20 minutes from Halim Perdana Kusuma Airport and
                    40 minutes from Soekarno Hatta International Airport, Pulogadung Jakarta Industrial Estate, Government Offices etc.
                    </p>

			</div>
			<div class="col-md-8">
				<div class="img-responsive">
                    <div class="video-responsive">
                        <iframe src="https://www.youtube.com/embed/s4eTSViCF_0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
				</div>
			</div>
            <div class="col-md-12">
                <h4 style="color: white">Please note for the couple's guests we would ask you to show marriage certificate or valid ID with the same address as our hotel regulation.</h4>
            </div>
		</div>
	</div>
</div>

<div class="mg-features">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="mg-sec-title">
					<h2>Hotel facilties</h2>
					<p>These best rooms chosen by our customers</p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="mg-feature">
							<div class="mg-feature-icon-title">
								<i class="fp-ht-receptionist"></i>
								<h3>24-hour reception</h3>
							</div>
							<p>You can order / check in anytime you want. Our staff will be very happy to help</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="mg-feature">
							<div class="mg-feature-icon-title">
								<i class="fa fa-cogs"></i>
								<h3>Room service</h3>
							</div>
							<p>Make sure your room is clean and comfortable. </p>
						</div>
					</div>
                    <div class="col-sm-4">
                        <div class="mg-feature">
                            <div class="mg-feature-icon-title">
                                <i class="fa fa-signal"></i>
                                <h3>Free Wi-Fi</h3>
                            </div>
                            <p>Up to 30 mbps high speed internet for browsing, chatting and streaming.</p>
                        </div>
                    </div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="mg-feature">
							<div class="mg-feature-icon-title">
								<i class="fa fa-shopping-cart   "></i>
								<h3>Warly Plaza and Mart</h3>
							</div>
							<p>Various of famous F & B Outlets  that can be your choice for your  dining or meeting point with  friends / colleague.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="mg-feature">
							<div class="mg-feature-icon-title">
								<i class="fa fa-coffee"></i>
								<h3>Sky Restaurant</h3>
							</div>
							<p>A perfect place for meeting point about business or negotiation. Dining and enjoying the elegance atmosphere with beautiful sky view</p>
						</div>
					</div>
                    <div class="col-sm-4">
                        <div class="mg-feature">
                            <div class="mg-feature-icon-title">
                                <i class="fa fa-dashboard"></i>
                                <h3>Sky Lounge</h3>
                            </div>
                            <p>A cozy lounge for relaxing with business clients or with family.Sky   Lounge is a perfect place for hang out or relaxing with friends or colleague.</p>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="mg-testi-partners parallax">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2 class="mg-sec-left-title">Testimonial</h2>
				<div class="mg-testimonial-slider" id="mg-testimonial-slider">
					<blockquote>
						<p>Very good breakfast, good beds and pillows. Very nice location on the street and nice views. Very helpful staff. Would stay again when in Cempaka Putih Central Jakarta.</p>
                        <footer>Abdullah A,  Palembang</footer>
                    </blockquote>
                    <blockquote>
                        <p>I had a very wonderful stay in Daily Inn. The room is very clean with a very nice city view. Welcome fruits were also nice and fresh. Hope the hotel can manage the situation better in the future.</p>
                        <footer>Anton S, Bandung</footer>
                    </blockquote>
                    <blockquote>
                        <p>Nicest hotel in Central Jakarta, Modern Hotel, New n Good location with value price too... Huge lobby , and breakfast area with street city view ... we are very happy stayed there.... 
Very recommended guys</p>
                        <footer>Eviliana I, Bogor</footer>
					</blockquote>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="mg-sec-left-title">Our Partners</h2>
				<ul class="mg-part-logos" id="mg-part-logos" style="text-align:center">
                    <li><img src="<?= $this->theme->baseUrl ?>/images/logo-sari-ayu.jpeg" alt="Sari Ayu Halal Beauty Center" class="img-responsive"></li>
                    <li><img src="<?= $this->theme->baseUrl ?>/images/starbucks.png" alt="Starbucks Coffee"></li>
                    <li><img src="<?= $this->theme->baseUrl ?>/images/indomaret.png" alt="Indomaret"></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="mg-news-gallery">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2 class="mg-sec-left-title">Recent News</h2>
				<ul class="mg-recnt-posts">
					<li>
						<div class="mg-recnt-post">
							<div class="mg-rp-date">09 <div class="mg-rp-month">Dec</div> 2019</div>
							<h3><a href="#">Sari Ayu Martha Tilaar</a></h3>
							<p>Now Open, Halal Beaty Center. Enjoy 20% discount from 09 December 2019 until 09 January 2020 </p>
						</div>
					</li>
					<li>
						<div class="mg-recnt-post">
							<div class="mg-rp-date">05 <div class="mg-rp-month">Dec</div>2019</div>
							<h3><a href="#">Indomaret Plaza Warly</a></h3>
							<p>Near hotel entrance. Available access from hotel lobby</p>
						</div>
					</li>
					<li>
						<div class="mg-recnt-post">
							<div class="mg-rp-date">01 <div class="mg-rp-month">dec</div>2019</div>
							<h3><a href="#">Starbuck Plaza Walry</a></h3>
							<p>Coffee and pastry, hangout with friends, meeting with partner</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="col-md-7">
				<h2 class="mg-sec-left-title">Our Gallery</h2>
				
				<div class="mg-gallery-container">
					<ul class="mg-gallery" id="mg-gallery">
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-01.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-02.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-05.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-06.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-07.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-08.png" alt="Partner Logo"></li>
					</ul>
					<ul class="mg-gallery-thumb" id="mg-gallery-thumb">
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-01.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-02.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-05.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-06.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-07.png" alt="Partner Logo"></li>
						<li><img src="<?= $this->theme->baseUrl ?>/images/gallery-thumb-08.png" alt="Partner Logo"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>