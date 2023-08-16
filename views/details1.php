<section class="section details">
	<!-- details background -->
	<div class="details__bg" data-bg="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/home/home__bg.jpg"></div>
	<!-- end details background -->

	<!-- details content -->
	<div class="container">
		<div class="row">
			<!-- title -->
			<div class="col-12">
				<h1 class="details__title">I Dream in Another Language</h1>
			</div>
			<!-- end title -->

			<!-- content -->
			<div class="col-12 col-xl-6">
				<div class="card card--details">
					<!-- card cover -->
					<div class="card__cover">
						<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover.jpg" alt="">
					</div>
					<!-- end card cover -->

					<!-- card content -->
					<div class="card__content">
						<div class="card__wrap">
							<span class="card__rate"> 8.4</span>

							<ul class="card__list">
								<li>HD</li>
								<li>16+</li>
							</ul>
						</div>

						<ul class="card__meta">
							<li><span>Genre:</span> <a href="#">Action</a>
							<a href="#">Triler</a></li>
							<li><span>Release year:</span> 2017</li>
							<li><span>Running time:</span> 120 min</li>
							<li><span>Country:</span> <a href="#">USA</a> </li>
						</ul>

						<div class="card__description card__description--details">
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
						</div>
					</div>
					<!-- end card content -->
				</div>
			</div>
			<!-- end content -->

			<!-- player -->
			<div class="col-12 col-xl-6">
				<video controls crossorigin playsinline poster="../../../../cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" id="player">
					<!-- Video files -->
					<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
					<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
					<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">
					<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1440p.mp4" type="video/mp4" size="1440">

					<!-- Caption files -->
					<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
					    default>
					<track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">

					<!-- Fallback for browsers that don't support the <video> element -->
					<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" download>Download</a>
				</video>
			</div>
			<!-- end player -->
		</div>
	</div>
	<!-- end details content -->
</section>
<!-- end details -->

<!-- content -->
<section class="content">
	<div class="content__head">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- content title -->
					<h2 class="content__title">Discover</h2>
					<!-- end content title -->

					<!-- content tabs nav -->
					<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a>
						</li>

						<li class="nav-item" role="presentation">
							<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a>
						</li>
					</ul>
					<!-- end content tabs nav -->

					<!-- content mobile tabs nav -->
					<div class="content__mobile-tabs" id="content__mobile-tabs">
						<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<input type="button" value="Comments">
							<span></span>
						</div>

						<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Comments</a></li>

								<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Reviews</a></li>

								<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Photos</a></li>
							</ul>
						</div>
					</div>
					<!-- end content mobile tabs nav -->
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-8 col-xl-8">
				<!-- content tabs -->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
						<div class="row">
							<!-- comments -->
							<div class="col-12">
								<div class="comments">
									<ul class="comments__list">
										<li class="comments__item">
											<div class="comments__autor">
												<img class="comments__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="comments__name">John Doe</span>
												<span class="comments__time">30.08.2018, 17:53</span>
											</div>
											<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											<div class="comments__actions">
												<div class="comments__rate">
													<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>12</button>

													<button type="button">7<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
												</div>

												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
											</div>
										</li>

										<li class="comments__item comments__item--answer">
											<div class="comments__autor">
												<img class="comments__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="comments__name">John Doe</span>
												<span class="comments__time">24.08.2018, 16:41</span>
											</div>
											<p class="comments__text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
											<div class="comments__actions">
												<div class="comments__rate">
													<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>8</button>

													<button type="button">3<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
												</div>

												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
											</div>
										</li>

										<li class="comments__item comments__item--quote">
											<div class="comments__autor">
												<img class="comments__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="comments__name">John Doe</span>
												<span class="comments__time">11.08.2018, 11:11</span>
											</div>
											<p class="comments__text"><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</span>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
											<div class="comments__actions">
												<div class="comments__rate">
													<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>11</button>

													<button type="button">1<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
												</div>

												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
											</div>
										</li>

										<li class="comments__item">
											<div class="comments__autor">
												<img class="comments__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="comments__name">John Doe</span>
												<span class="comments__time">07.08.2018, 14:33</span>
											</div>
											<p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
											<div class="comments__actions">
												<div class="comments__rate">
													<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>99</button>

													<button type="button">35<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
												</div>

												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
											</div>
										</li>

										<li class="comments__item">
											<div class="comments__autor">
												<img class="comments__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="comments__name">John Doe</span>
												<span class="comments__time">02.08.2018, 15:24</span>
											</div>
											<p class="comments__text">Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
											<div class="comments__actions">
												<div class="comments__rate">
													<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.3,10.08A3,3,0,0,0,19,9H14.44L15,7.57A4.13,4.13,0,0,0,11.11,2a1,1,0,0,0-.91.59L7.35,9H5a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17.73a3,3,0,0,0,2.95-2.46l1.27-7A3,3,0,0,0,21.3,10.08ZM7,20H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H7Zm13-7.82-1.27,7a1,1,0,0,1-1,.82H9V10.21l2.72-6.12A2.11,2.11,0,0,1,13.1,6.87L12.57,8.3A2,2,0,0,0,14.44,11H19a1,1,0,0,1,.77.36A1,1,0,0,1,20,12.18Z"/></svg>74</button>

													<button type="button">13<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,2H6.27A3,3,0,0,0,3.32,4.46l-1.27,7A3,3,0,0,0,5,15H9.56L9,16.43A4.13,4.13,0,0,0,12.89,22a1,1,0,0,0,.91-.59L16.65,15H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2ZM15,13.79l-2.72,6.12a2.13,2.13,0,0,1-1.38-2.78l.53-1.43A2,2,0,0,0,9.56,13H5a1,1,0,0,1-.77-.36A1,1,0,0,1,4,11.82l1.27-7a1,1,0,0,1,1-.82H15ZM20,12a1,1,0,0,1-1,1H17V4h2a1,1,0,0,1,1,1Z"/></svg></button>
												</div>
												
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.707,11.293l-8-8A.99991.99991,0,0,0,12,4V7.54492A11.01525,11.01525,0,0,0,2,18.5V20a1,1,0,0,0,1.78418.62061,11.45625,11.45625,0,0,1,7.88672-4.04932c.0498-.00635.1748-.01611.3291-.02588V20a.99991.99991,0,0,0,1.707.707l8-8A.99962.99962,0,0,0,21.707,11.293ZM14,17.58594V15.5a.99974.99974,0,0,0-1-1c-.25488,0-1.2959.04932-1.56152.085A14.00507,14.00507,0,0,0,4.05176,17.5332,9.01266,9.01266,0,0,1,13,9.5a.99974.99974,0,0,0,1-1V6.41406L19.58594,12Z"/></svg>Reply</button>
												<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19,14a1,1,0,0,0-1.22.72A7,7,0,0,1,11,20H5.41l.64-.63a1,1,0,0,0,0-1.41A7,7,0,0,1,9.25,6.22a1,1,0,0,0-.5-1.94A9,9,0,0,0,4,18.62L2.29,20.29a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h8a9,9,0,0,0,8.72-6.75A1,1,0,0,0,19,14ZM21,2a1,1,0,0,0-1,1h0a5,5,0,1,0,.3,7.75A1,1,0,1,0,19,9.25,3,3,0,1,1,17,4a3,3,0,0,1,2.23,1H18a1,1,0,0,0,0,2h3a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2Z"/></svg>Quote</button>
											</div>
										</li>
									</ul>

									<form action="#" class="form">
										<textarea id="text" name="text" class="form__textarea" placeholder="Add comment"></textarea>
										<button type="button" class="form__btn">Send</button>
									</form>
								</div>
							</div>
							<!-- end comments -->
						</div>
					</div>

					<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
						<div class="row">
							<!-- reviews -->
							<div class="col-12">
								<div class="reviews">
									<ul class="reviews__list">
										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></svg>8.4</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>

										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></svg>9.0</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>

										<li class="reviews__item">
											<div class="reviews__autor">
												<img class="reviews__avatar" src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/user.svg" alt="">
												<span class="reviews__name">Best Marvel movie in my opinion</span>
												<span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

												<span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M22,10.1c0.1-0.5-0.3-1.1-0.8-1.1l-5.7-0.8L12.9,3c-0.1-0.2-0.2-0.3-0.4-0.4C12,2.3,11.4,2.5,11.1,3L8.6,8.2L2.9,9C2.6,9,2.4,9.1,2.3,9.3c-0.4,0.4-0.4,1,0,1.4l4.1,4l-1,5.7c0,0.2,0,0.4,0.1,0.6c0.3,0.5,0.9,0.7,1.4,0.4l5.1-2.7l5.1,2.7c0.1,0.1,0.3,0.1,0.5,0.1v0c0.1,0,0.1,0,0.2,0c0.5-0.1,0.9-0.6,0.8-1.2l-1-5.7l4.1-4C21.9,10.5,22,10.3,22,10.1z"></path></svg>7.5</span>
											</div>
											<p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
										</li>
									</ul>

									<form action="#" class="form">
										<input type="text" class="form__input" placeholder="Title">
										<textarea class="form__textarea" placeholder="Review"></textarea>
										<div class="form__slider">
											<div class="form__slider-rating" id="slider__rating"></div>
											<div class="form__slider-value" id="form__slider-value"></div>
										</div>
										<button type="button" class="form__btn">Send</button>
									</form>
								</div>
							</div>
							<!-- end reviews -->
						</div>
					</div>

					<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="3-tab">
						<!-- project gallery -->
						<div class="gallery" itemscope>
							<div class="row row--grid">
								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-1.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-1.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 1</figcaption>
								</figure>
								<!-- end gallery item -->

								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-2.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-2.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 2</figcaption>
								</figure>
								<!-- end gallery item -->

								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-3.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-3.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 3</figcaption>
								</figure>
								<!-- end gallery item -->

								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-4.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-4.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 4</figcaption>
								</figure>
								<!-- end gallery item -->

								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-5.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-5.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 5</figcaption>
								</figure>
								<!-- end gallery item -->

								<!-- gallery item -->
								<figure class="col-12 col-sm-6 col-xl-4" itemprop="associatedMedia" itemscope>
									<a href="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-6.jpg" itemprop="contentUrl" data-size="1920x1280">
										<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/gallery/project-6.jpg" itemprop="thumbnail" alt="Image description" />
									</a>
									<figcaption itemprop="caption description">Some image caption 6</figcaption>
								</figure>
								<!-- end gallery item -->
							</div>
						</div>
						<!-- end project gallery -->
					</div>
				</div>
				<!-- end content tabs -->
			</div>

			<!-- sidebar -->
			<div class="col-12 col-lg-4 col-xl-4">
				<div class="row row--grid">
					<!-- section title -->
					<div class="col-12">
						<h2 class="section__title section__title--sidebar">You may also like...</h2>
					</div>
					<!-- end section title -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover3.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover2.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Whitney</a></h3>
								<span class="card__category">
									<a href="#">Romance</a>
									<a href="#">Drama</a>
									<a href="#">Music</a>
								</span>
								<span class="card__rate">6.3</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover6.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Blindspotting</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
									<a href="#">Drama</a>
								</span>
								<span class="card__rate">7.9</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover4.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">I Dream in Another Language</a></h3>
								<span class="card__category">
									<a href="#">Action</a>
									<a href="#">Triler</a>
								</span>
								<span class="card__rate">8.4</span>
							</div>
						</div>
					</div>
					<!-- end card -->

					<!-- card -->
					<div class="col-6 col-sm-4 col-lg-6">
						<div class="card">
							<a href="index.php?act=details1" class="card__cover">
								<img src="view/abc/dmitryvolkov.me/demo/flixgo2.0/main/img/covers/cover5.jpg" alt="">
								<span class="card__play">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"/></svg>
								</span>
							</a>
							<div class="card__content">
								<h3 class="card__title"><a href="#">Benched</a></h3>
								<span class="card__category">
									<a href="#">Comedy</a>
								</span>
								<span class="card__rate">7.1</span>
							</div>
						</div>
					</div>
					<!-- end card -->
				</div>
			</div>
			<!-- end sidebar -->
		</div>
	</div>
</section>