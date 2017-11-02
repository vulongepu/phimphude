@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
   

<div class="slider">
	<img src="https://msmobile.com.vn/upload_images/images/xiaomi-mi-notebook-air-15.jpeg" alt="" width="100%" height="300px">
</div>
<div class="features">
	<div class="container-fluid">
		<div class="col-md-4 module">
			<a href="http://www.hocvientienganh.com/methods#luyen-noi" class="media">
				<div class="media-object pull-left"> <i class="fa fa-microphone img-rounded"></i> </div>
				<div class="media-body">
					<h3 class="media-heading">Luyện nói Tiếng Anh thông minh</h3>
					<p>Thực hành luyện nói tiếng anh mỗi ngày thông qua phụ đề thông ngữ thông minh. Giúp trau dồi được khả năng phát âm tiếng anh qua phim, ngữ điệu cùng phản xạ nói cực kỳ nhanh chóng.</p>
				</div>
			</a>
		</div>
		<div class="col-md-4 module">
			<a href="http://www.hocvientienganh.com/methods#luyen-nghe" class="media">
				<div class="media-object pull-left"> <i class="fa fa-headphones img-rounded"></i> </div>
				<div class="media-body">
					<h3 class="media-heading">Chế độ luyện nghe hiệu quả</h3>
					<p>Cung cấp chế độ luyện nghe tiếng anh qua phim riêng biệt cho người học, nâng cao khả năng nghe cực kỳ hiệu quả mà chưa có phương pháp luyện nghe tiếng anh nào làm được.</p>
				</div>
			</a>
		</div>
		<div class="col-md-4 module">
			<a href="http://www.hocvientienganh.com/methods#hoc-tu-vung" class="media">
				<div class="media-object pull-left"> <i class="fa fa-book img-rounded"></i> </div>
				<div class="media-body">
					<h3 class="media-heading">Nâng cao vốn từ vựng tiếng anh</h3>
					<p>Gia tăng vốn từ tiếng anh của bạn với vô số từ mới dùng trong giao tiếp thông qua việc xem phim phụ đề tiếng anh. Phụ đề tiếng anh song ngữ Anh-Việt giúp việc học và ghi chép từ vựng tiếng anh chưa bao giờ dễ dàng hơn.</p>
				</div>
			</a>
		</div>
	</div>
</div>
<div class="half-push"></div>
<div class="cd-user-modal">
	<div class="cd-user-modal-container">
		<div id="cd-change-pwd">
			<form method="POST" action="http://www.hocvientienganh.com/users/508470" accept-charset="UTF-8" class="cd-form">
				<input name="_token" type="hidden" value="kEvcPcDcI0XOdsg4SJkXsgx03RjystLowElSEZMg">
				<p class="fieldset"> <label>Full Name a</label> <input class="full-width has-padding has-border" name="full_name" type="text" value="Bảo Kim"> </p>
				<p class="fieldset"> <label class="image-replace cd-password" for="signin-password">Old Password</label> <input class="full-width has-padding has-border" placeholder="Mật khẩu cũ của bạn" name="password" type="password" value=""> <a href="#0" class="hide-password">Hide</a> </p>
				<p class="fieldset"> <label>New Password</label> <input class="full-width has-padding has-border" placeholder="Mật khẩu mới" name="new_password" type="password" value=""> <a href="#0" class="hide-password">Hide</a> </p>
				<p class="fieldset"> <label>New Password Confirmation</label> <input class="full-width has-padding has-border" placeholder="Nhập lại mật khẩu mới" name="password_confirmation" type="password" value=""> <a href="#0" class="hide-password">Hide</a> </p>
				<p class="fieldset checkbox"> <label><input type="checkbox" id="isChangePass" checked="checked" name="isChangePass" value="1"><b>Đổi mật khẩu</b></label> </p>
				<p class="fieldset"> <input class="full-width has-padding" type="submit" value="Cập nhật"> </p>
			</form>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div id="main">
			<div class="col-md-9">
				<div id="content">
					<h3 class="text-danger"><a href="http://www.hocvientienganh.com/movies/filter?sortBy=recommended">Phim Học Tiếng Anh nổi bật</a></h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="129">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>30</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/extra?episode=30"> <img src="/system/movies/129/thumbnails/medium/phim-extra-english.jpg" class="img-responsive" alt="Extra" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/extra"><strong style="text-transform: uppercase;">Extra</strong></a><br> <small style="text-transform: capitalize;"><em>Phim Extra </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">197955</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/extra')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1368">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>68</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/english-communication?episode=68"> <img src="/system/movies/1368/thumbnails/medium/1.PNG" class="img-responsive" alt="English Communication" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/english-communication"><strong style="text-transform: uppercase;">English Communication</strong></a><br> <small style="text-transform: capitalize;"><em>Học Tiếng Anh Giao Tiếp Cơ Bản </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">61287</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/english-communication')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="815">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>10</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/young-and-hungry-season-1?episode=10"> <img src="/system/movies/815/thumbnails/medium/1.jpg" class="img-responsive" alt="Young And Hungry - Season 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/young-and-hungry-season-1"><strong style="text-transform: uppercase;">Young And Hungry - Season 1</strong></a><br> <small style="text-transform: capitalize;"><em>Tuổi Trẻ v&agrave; Khao Kh&aacute;t </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">10679</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/young-and-hungry-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="64">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>22</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/how-i-met-your-mother-season-1?episode=22"> <img src="/system/movies/64/thumbnails/medium/how-i-met-your-mother.jpg" class="img-responsive" alt="HOW I MET YOUR MOTHER - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/how-i-met-your-mother-season-1"><strong style="text-transform: uppercase;">HOW I MET YOUR MOTHER - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>Khi Bố Gặp Mẹ - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">67646</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/how-i-met-your-mother-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="63">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>24</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/friends-season-1?episode=24"> <img src="/system/movies/63/thumbnails/medium/gVxbfbVQEl7oNrSjdB2eIo9x8e8.jpg" class="img-responsive" alt="FRIENDS - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/friends-season-1"><strong style="text-transform: uppercase;">FRIENDS - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>Những Người Bạn - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">81021</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/friends-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="725">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>22</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/mom-season-1?episode=22"> <img src="/system/movies/725/thumbnails/medium/1.jpg" class="img-responsive" alt="MOM - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/mom-season-1"><strong style="text-transform: uppercase;">MOM - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>Mom - season 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">20347</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/mom-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1342">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>23</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/the-flash-season-2?episode=23"> <img src="/system/movies/1342/thumbnails/medium/1.jpg" class="img-responsive" alt="The Flash - Season 2" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/the-flash-season-2"><strong style="text-transform: uppercase;">The Flash - Season 2</strong></a><br> <small style="text-transform: capitalize;"><em>Người H&ugrave;ng Tia Chớp - Phần 2 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">20065</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/the-flash-season-2')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="121">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>23</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/the-flash-season-1?episode=23"> <img src="/system/movies/121/thumbnails/medium/1.jpg" class="img-responsive" alt="The Flash - Season 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/the-flash-season-1"><strong style="text-transform: uppercase;">The Flash - Season 1</strong></a><br> <small style="text-transform: capitalize;"><em>Người H&ugrave;ng Tia Chớp - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">13743</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/the-flash-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="16" data-href="movies/filter?sortBy=recommended&perPage=8"></ul>
					<div class="clearfix"></div>
					<h3 class="text-danger"><a href="http://www.hocvientienganh.com/movies/filter?sortBy=latest">Phim Học Tiếng Anh mới nhất (3097 bộ)</a></h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2614">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/cars-3-2017?episode=1"> <img src="/system/movies/2614/thumbnails/medium/36h3Sw4y4COqMeNg31ST0h5xRae (1).jpg" class="img-responsive" alt="Cars 3 (2017)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/cars-3-2017"><strong style="text-transform: uppercase;">Cars 3 (2017)</strong></a><br> <small style="text-transform: capitalize;"><em>Vương Quốc Xe Hơi 3 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">19</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/cars-3-2017')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2613">
										<div class="movie-icon">  <span class="label latest">Mới</span>    <span class="movie-episodes"><i class="label">Tập</i>10</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/mindhunter-season-1?episode=10"> <img src="/system/movies/2613/thumbnails/medium/790XO8Vw3mx64LiqePeMRVGbwv4 (1).jpg" class="img-responsive" alt="Mindhunter - Season 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/mindhunter-season-1"><strong style="text-transform: uppercase;">Mindhunter - Season 1</strong></a><br> <small style="text-transform: capitalize;"><em>Kẻ Săn Suy Nghĩ 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">3</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/mindhunter-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2612">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/marvel-iron-fist-season-1?episode=0"> <img src="/system/movies/2612/thumbnails/medium/TV_-_Marvel's_Iron_Fist.jpg" class="img-responsive" alt="Marvel Iron Fist ( season 1 )" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/marvel-iron-fist-season-1"><strong style="text-transform: uppercase;">Marvel Iron Fist ( season 1 )</strong></a><br> <small style="text-transform: capitalize;"><em>Thiết quyền - phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">10</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/marvel-iron-fist-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2611">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/the-english-patient-1996?episode=1"> <img src="/system/movies/2611/thumbnails/medium/mn1GTWYUpWs7jQnI6C0PJsqa8UI (1).jpg" class="img-responsive" alt="The English Patient (1996)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/the-english-patient-1996"><strong style="text-transform: uppercase;">The English Patient (1996)</strong></a><br> <small style="text-transform: capitalize;"><em>B&ecirc;nh Nh&acirc;n Người Anh </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">11</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/the-english-patient-1996')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2610">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/blended-2014?episode=1"> <img src="/system/movies/2610/thumbnails/medium/jpeg-blended-mov-a.png" class="img-responsive" alt="Blended 2014" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/blended-2014"><strong style="text-transform: uppercase;">Blended 2014</strong></a><br> <small style="text-transform: capitalize;"><em>Kỳ nghỉ chết cười </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">45</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/blended-2014')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1116">
										<div class="movie-icon">  <span class="label latest">Mới</span>    <span class="movie-episodes"><i class="label">Tập</i>25</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/new-girl-season-2?episode=25"> <img src="/system/movies/1116/thumbnails/medium/1.jpg" class="img-responsive" alt="New Girl - Season 2" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/new-girl-season-2"><strong style="text-transform: uppercase;">New Girl - Season 2</strong></a><br> <small style="text-transform: capitalize;"><em>C&ocirc; G&aacute;i Kỳ Quặc Phần 2 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">971</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/new-girl-season-2')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2608">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/chicken-run-2000?episode=1"> <img src="/system/movies/2608/thumbnails/medium/maxresdefault.jpg" class="img-responsive" alt="Chicken Run (2000)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/chicken-run-2000"><strong style="text-transform: uppercase;">Chicken Run (2000)</strong></a><br> <small style="text-transform: capitalize;"><em>Phi đội g&agrave; bay </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">80</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/chicken-run-2000')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2607">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/evan-almighty-2007?episode=1"> <img src="/system/movies/2607/thumbnails/medium/cKVcHq9qdctpY8v9XMmqcwuG2Jn.jpg" class="img-responsive" alt="Evan Almighty (2007)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/evan-almighty-2007"><strong style="text-transform: uppercase;">Evan Almighty (2007)</strong></a><br> <small style="text-transform: capitalize;"><em>Evan to&agrave;n năng </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">37</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/evan-almighty-2007')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="285" data-href="movies/filter?perPage=8"></ul>
					<div class="clearfix"></div>
					<!-- client testimonial -->
					<div class="client-testimonial">
						<div id="quotes-carousel" class="carousel carousel-fade slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-1.jpg">
											<div class="media-body">
												<blockquote>
													<p>Tôi cảm thấy việc học tiếng anh qua phim có phụ đề trở nên thú vị hơn, dễ học hơn, cải thiện nhiều về kỹ năng nghe nói của mình. Cảm ơn Hocvientienganh đã lập ra một trang web học tiếng anh qua phim có phụ đề hiệu quả như vậy.</p>
													<small>Ngân Hoàng - Sinh viên đại học RMIT</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-2.png">
											<div class="media-body">
												<blockquote>
													<p>Mình thật sự rất ấn tượng với phương pháp xem phim phụ đề song ngữ anh việt tiếng anh của Hocvientienganh. Mỗi buổi sáng thức dậy, công việc yêu thích của mình là chọn một bộ phim tiếng anh và luyện tập với phim tiếng anh đó.<a href="http://www.hocvientienganh.com/top-5-phan-mem-hoc-tieng-anh-tot-nhat-hien-nay">Phần mềm học tiếng anh</a> này thật sự rất bổ ích</p>
													<small>Lưu Văn - Sinh viên đại học Luật</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-3.jpg">
											<div class="media-body">
												<blockquote>
													<p>Sau một thời gian học tiếng anh trên website Hocvientienganh, kỹ năng giao tiếp Tiếng Anh của mình đã tiến bộ một cách rõ rệt. Cảm ơn website học tiếng anh qua phim có phụ đề rất hiệu quả này.</p>
													<small>Trí Nguyễn - Sinh viên đại học quốc gia HCM.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-4.png">
											<div class="media-body">
												<blockquote>
													<p>Trước kia mình rất ghét học Tiếng Anh, nhưng từ khi biết tới trang web học tiếng anh qua phim phụ đề tiếng anh tốt nhất này, việc học Tiếng Anh hằng ngày thông qua mỗi bộ phim tiếng anh song ngữ khiến mình càng ngày càng thích môn này hơn.</p>
													<small>Đinh Thị Ly - Sinh viên đại học Hoa Sen.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h3 class="text-danger">
						<a href="http://www.hocvientienganh.com/movies/filter?level=level-1"><i class="fa fa-signal"></i> Phim Học Tiếng Anh level 1</a>
					</h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="464">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>13</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/12-monkeys-season-1?episode=13"> <img src="/system/movies/464/thumbnails/medium/nền.jpg" class="img-responsive" alt="12 MONKEYS - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/12-monkeys-season-1"><strong style="text-transform: uppercase;">12 MONKEYS - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>12 Con Khỉ - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">2029</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/12-monkeys-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="61">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>23</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/desperate-housewives?episode=23"> <img src="/system/movies/61/thumbnails/medium/2.jpg" class="img-responsive" alt="Desperate Housewives" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/desperate-housewives"><strong style="text-transform: uppercase;">Desperate Housewives</strong></a><br> <small style="text-transform: capitalize;"><em>Những B&agrave; Nội Trợ Kiểu Mỹ - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">4514</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/desperate-housewives')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="347">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>24</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/the-big-bang-theory-season-8?episode=24"> <img src="/system/movies/347/thumbnails/medium/1.jpg" class="img-responsive" alt="THE BIG BANG THEORY - SEASON 8" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/the-big-bang-theory-season-8"><strong style="text-transform: uppercase;">THE BIG BANG THEORY - SEASON 8</strong></a><br> <small style="text-transform: capitalize;"><em>Vụ Nổ Lớn - Phần 8 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">2389</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/the-big-bang-theory-season-8')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="64">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>22</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/how-i-met-your-mother-season-1?episode=22"> <img src="/system/movies/64/thumbnails/medium/how-i-met-your-mother.jpg" class="img-responsive" alt="HOW I MET YOUR MOTHER - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/how-i-met-your-mother-season-1"><strong style="text-transform: uppercase;">HOW I MET YOUR MOTHER - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>Khi Bố Gặp Mẹ - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">67646</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/how-i-met-your-mother-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="63">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>24</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/friends-season-1?episode=24"> <img src="/system/movies/63/thumbnails/medium/gVxbfbVQEl7oNrSjdB2eIo9x8e8.jpg" class="img-responsive" alt="FRIENDS - SEASON 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/friends-season-1"><strong style="text-transform: uppercase;">FRIENDS - SEASON 1</strong></a><br> <small style="text-transform: capitalize;"><em>Những Người Bạn - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">81021</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/friends-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="129">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>30</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/extra?episode=30"> <img src="/system/movies/129/thumbnails/medium/phim-extra-english.jpg" class="img-responsive" alt="Extra" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/extra"><strong style="text-transform: uppercase;">Extra</strong></a><br> <small style="text-transform: capitalize;"><em>Phim Extra </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">197955</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/extra')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1368">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>68</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/english-communication?episode=68"> <img src="/system/movies/1368/thumbnails/medium/1.PNG" class="img-responsive" alt="English Communication" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/english-communication"><strong style="text-transform: uppercase;">English Communication</strong></a><br> <small style="text-transform: capitalize;"><em>Học Tiếng Anh Giao Tiếp Cơ Bản </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">61287</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/english-communication')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="116">
										<div class="movie-icon">   <span class="label popular">Hot</span>   <span class="movie-episodes"><i class="label">Tập</i>26</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/hannah-montana-season-1?episode=26"> <img src="/system/movies/116/thumbnails/medium/ezx3NkXNqf2KnJCP6Nfj1bfCFut.jpg" class="img-responsive" alt="Hannah Montana - Season 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/hannah-montana-season-1"><strong style="text-transform: uppercase;">Hannah Montana - Season 1</strong></a><br> <small style="text-transform: capitalize;"><em>Hannah Montana - Phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">11857</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/hannah-montana-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="10" data-href="movies/filter?level=level-1&perPage=8"></ul>
					<div class="clearfix"></div>
					<hr>
					<h3 class="text-danger"><a href="http://www.hocvientienganh.com/movies/filter?level=level-2"><i class="fa fa-signal"></i> Phim Học Tiếng Anh level 2</a></h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2608">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/chicken-run-2000?episode=1"> <img src="/system/movies/2608/thumbnails/medium/maxresdefault.jpg" class="img-responsive" alt="Chicken Run (2000)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/chicken-run-2000"><strong style="text-transform: uppercase;">Chicken Run (2000)</strong></a><br> <small style="text-transform: capitalize;"><em>Phi đội g&agrave; bay </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">80</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/chicken-run-2000')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2581">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/tom-and-jerry-robin-hood-and-his-merry-mouse-2012?episode=1"> <img src="/system/movies/2581/thumbnails/medium/tom-jerry-02.jpg" class="img-responsive" alt="Tom And Jerry: Robin Hood and His Merry Mouse (2012)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/tom-and-jerry-robin-hood-and-his-merry-mouse-2012"><strong style="text-transform: uppercase;">Tom And Jerry: Robin Hood and His Merry Mouse (2012)</strong></a><br> <small style="text-transform: capitalize;"><em>Tom And Jerry: Robin Hood v&agrave; Ch&uacute; Chuột Vui Vẻ </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">117</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/tom-and-jerry-robin-hood-and-his-merry-mouse-2012')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2578">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/tom-and-jerry-shiver-me-whiskers-2006?episode=1"> <img src="/system/movies/2578/thumbnails/medium/maxresdefault.jpg" class="img-responsive" alt="Tom and Jerry: Shiver Me Whiskers (2006)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/tom-and-jerry-shiver-me-whiskers-2006"><strong style="text-transform: uppercase;">Tom and Jerry: Shiver Me Whiskers (2006)</strong></a><br> <small style="text-transform: capitalize;"><em>Tom and Jerry: Nổi sợ h&atilde;i của Tom </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">140</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/tom-and-jerry-shiver-me-whiskers-2006')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2576">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/tom-and-jerry-meet-sherlock-holmes-2010?episode=1"> <img src="/system/movies/2576/thumbnails/medium/pwcjzawxr4meh73rs6ths38dcq2.jpg" class="img-responsive" alt="Tom and Jerry: Meet Sherlock Holmes (2010)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/tom-and-jerry-meet-sherlock-holmes-2010"><strong style="text-transform: uppercase;">Tom and Jerry: Meet Sherlock Holmes (2010)</strong></a><br> <small style="text-transform: capitalize;"><em>Tom and jerry: Gặp gỡ Sherlock Holmes </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">78</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/tom-and-jerry-meet-sherlock-holmes-2010')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2577">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/tom-and-jerry-the-wizard-of-oz-2011?episode=1"> <img src="/system/movies/2577/thumbnails/medium/maxresdefault.jpg" class="img-responsive" alt="Tom and Jerry: The Wizard of Oz (2011)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/tom-and-jerry-the-wizard-of-oz-2011"><strong style="text-transform: uppercase;">Tom and Jerry: The Wizard of Oz (2011)</strong></a><br> <small style="text-transform: capitalize;"><em>Tom v&agrave; Jerry: Ph&ugrave; Thủy Xứ Oz </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">74</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/tom-and-jerry-the-wizard-of-oz-2011')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2570">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/tinker-bell-secret-of-the-wings-2012?episode=1"> <img src="/system/movies/2570/thumbnails/medium/tien4.jpg" class="img-responsive" alt="Tinker Bell: Secret of the Wings (2012)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/tinker-bell-secret-of-the-wings-2012"><strong style="text-transform: uppercase;">Tinker Bell: Secret of the Wings (2012)</strong></a><br> <small style="text-transform: capitalize;"><em>Ti&ecirc;n nữ Tinker Bell: B&iacute; mật đ&ocirc;i c&aacute;nh </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">184</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/tinker-bell-secret-of-the-wings-2012')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2568">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/valiant-2005?episode=1"> <img src="/system/movies/2568/thumbnails/medium/00149a49.jpeg" class="img-responsive" alt="Valiant (2005)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/valiant-2005"><strong style="text-transform: uppercase;">Valiant (2005)</strong></a><br> <small style="text-transform: capitalize;"><em>Biệt đội bồ c&acirc;u </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">60</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/valiant-2005')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2560">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/strange-magic-2015?episode=1"> <img src="/system/movies/2560/thumbnails/medium/strangemagic_01-3cd511a07316.jpg" class="img-responsive" alt="Strange Magic (2015)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/strange-magic-2015"><strong style="text-transform: uppercase;">Strange Magic (2015)</strong></a><br> <small style="text-transform: capitalize;"><em>Phép thu&acirc;̣t kỳ lạ </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">201</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/strange-magic-2015')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="22" data-href="movies/filter?level=level-2&perPage=8"></ul>
					<div class="clearfix"></div>
					<hr>
					<!-- client testimonial -->
					<div class="client-testimonial">
						<div id="quotes-carousel" class="carousel carousel-fade slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-1.jpg">
											<div class="media-body">
												<blockquote>
													<p>Các bộ phim có phụ đề tiếng anh ở hocvientienganh.com thật sự rất hữu ích. Mình chỉ xem phim học tiếng anh một thời gian ở website này mà kỹ năng tiếng anh đã tăng đáng kể</p>
													<small>Ngân Hoàng - Sinh viên đại học Kinh Tế</small>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-2.png">
											<div class="media-body">
												<blockquote>
													<p>Sau một thời gian hoc tieng anh qua phim trên website Hocvientienganh. Bây giờ mình đã có thể tự tin giao tiếp tiếng anh với người nước ngoài hơn trước rất nhiều.</p>
													<small>Lưu Văn - Sinh viên đại học Ngoại Thương</small>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-3.jpg">
											<div class="media-body">
												<blockquote>
													<p>Cách hoc tieng anh qua phim phụ đề tiếng anh này thực sự rất hiệu quả. Mình chỉ xem một vài bộ phim có phụ đề tiếng anh là khả năng đã tăng lên nhanh chóng</p>
													<small>Trí Nguyễn - Sinh viên đại học Hồng Bàng.</small>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-4.png">
											<div class="media-body">
												<blockquote>
													<p>Mình là sinh viên mới ra trường. Công việc nhiều bận rộn nên không có thời gian học tiếng anh. Từ khi hoc tieng anh qua phim phụ đề tiếng anh trên website này vừa hiệu quả vừa tiết kiệm thời gian </p>
													<small>Hoàng Thị Lý - Sinh viên đại học Tôn Đức Thắng.</small>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h3 class="text-danger"><a href="http://www.hocvientienganh.com/movies/filter?level=level-3"><i class="fa fa-signal"></i> Phim Học Tiếng Anh level 3</a></h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2614">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/cars-3-2017?episode=1"> <img src="/system/movies/2614/thumbnails/medium/36h3Sw4y4COqMeNg31ST0h5xRae (1).jpg" class="img-responsive" alt="Cars 3 (2017)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/cars-3-2017"><strong style="text-transform: uppercase;">Cars 3 (2017)</strong></a><br> <small style="text-transform: capitalize;"><em>Vương Quốc Xe Hơi 3 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">19</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/cars-3-2017')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2613">
										<div class="movie-icon">  <span class="label latest">Mới</span>    <span class="movie-episodes"><i class="label">Tập</i>10</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/mindhunter-season-1?episode=10"> <img src="/system/movies/2613/thumbnails/medium/790XO8Vw3mx64LiqePeMRVGbwv4 (1).jpg" class="img-responsive" alt="Mindhunter - Season 1" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/mindhunter-season-1"><strong style="text-transform: uppercase;">Mindhunter - Season 1</strong></a><br> <small style="text-transform: capitalize;"><em>Kẻ Săn Suy Nghĩ 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">3</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/mindhunter-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2612">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/marvel-iron-fist-season-1?episode=0"> <img src="/system/movies/2612/thumbnails/medium/TV_-_Marvel's_Iron_Fist.jpg" class="img-responsive" alt="Marvel Iron Fist ( season 1 )" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/marvel-iron-fist-season-1"><strong style="text-transform: uppercase;">Marvel Iron Fist ( season 1 )</strong></a><br> <small style="text-transform: capitalize;"><em>Thiết quyền - phần 1 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">10</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/marvel-iron-fist-season-1')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2611">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/the-english-patient-1996?episode=1"> <img src="/system/movies/2611/thumbnails/medium/mn1GTWYUpWs7jQnI6C0PJsqa8UI (1).jpg" class="img-responsive" alt="The English Patient (1996)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/the-english-patient-1996"><strong style="text-transform: uppercase;">The English Patient (1996)</strong></a><br> <small style="text-transform: capitalize;"><em>B&ecirc;nh Nh&acirc;n Người Anh </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">11</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/the-english-patient-1996')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2610">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/blended-2014?episode=1"> <img src="/system/movies/2610/thumbnails/medium/jpeg-blended-mov-a.png" class="img-responsive" alt="Blended 2014" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/blended-2014"><strong style="text-transform: uppercase;">Blended 2014</strong></a><br> <small style="text-transform: capitalize;"><em>Kỳ nghỉ chết cười </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">45</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/blended-2014')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1116">
										<div class="movie-icon">  <span class="label latest">Mới</span>    <span class="movie-episodes"><i class="label">Tập</i>25</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/new-girl-season-2?episode=25"> <img src="/system/movies/1116/thumbnails/medium/1.jpg" class="img-responsive" alt="New Girl - Season 2" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/new-girl-season-2"><strong style="text-transform: uppercase;">New Girl - Season 2</strong></a><br> <small style="text-transform: capitalize;"><em>C&ocirc; G&aacute;i Kỳ Quặc Phần 2 </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">971</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/new-girl-season-2')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2607">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/evan-almighty-2007?episode=1"> <img src="/system/movies/2607/thumbnails/medium/cKVcHq9qdctpY8v9XMmqcwuG2Jn.jpg" class="img-responsive" alt="Evan Almighty (2007)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/evan-almighty-2007"><strong style="text-transform: uppercase;">Evan Almighty (2007)</strong></a><br> <small style="text-transform: capitalize;"><em>Evan to&agrave;n năng </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">37</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/evan-almighty-2007')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2606">
										<div class="movie-icon">  <span class="label latest">Mới</span>    </div>
										<a href="http://www.hocvientienganh.com/movies/gone-with-the-wind-1939?episode=1"> <img src="/system/movies/2606/thumbnails/medium/GONE-WITH-THE-WIND-POSTER.jpg" class="img-responsive" alt="Gone With The Wind (1939)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/gone-with-the-wind-1939"><strong style="text-transform: uppercase;">Gone With The Wind (1939)</strong></a><br> <small style="text-transform: capitalize;"><em>Cuốn Theo Chiều Gi&oacute; </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li>&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">79</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/gone-with-the-wind-1939')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="239" data-href="movies/filter?level=level-3&perPage=8"></ul>
					<div class="clearfix"></div>
					<hr>
					<!-- client testimonial -->
					<div class="client-testimonial">
						<div id="quotes-carousel" class="carousel carousel-fade slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-1.jpg">
											<div class="media-body">
												<blockquote>
													<p>Trang web học tiếng anh qua cách xem phim phụ đề tiếng anh này thật sự rất hiệu quả, đặc biệt đối với những người muốn học tiếng anh giao tiếp qua phim.</p>
													<small>Nghĩa Hoàng - Sinh viên đại học Kinh Tế</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-2.png">
											<div class="media-body">
												<blockquote>
													<p>Phương pháp xem phim phụ đề tiếng anh với phụ đề tiếng anh của Hocvientienganh thật sự rất hữu ích. Mỗi ngày mình đều vào website để vừa xem phim vừa học tiếng anh.</p>
													<small>Hoàng Vinh - Sinh viên đại học Ngoại Thương</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-3.jpg">
											<div class="media-body">
												<blockquote>
													<p>Sau một thời gian xem phim phụ đề tiếng anh trên website Hocvientienganh, kỹ năng giao tiếp Tiếng Anh của mình đã tiến bộ một cách rõ rệt. Cảm ơn BQT đã tạo ra website xem phim phụ đề tiếng anh rất hiệu quả này.</p>
													<small>Tuấn Nguyễn - Sinh viên đại học Hồng Bàng.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-4.png">
											<div class="media-body">
												<blockquote>
													<p>Các bộ phim tiếng anh ở website học tiếng anh qua phim này rất dễ nghe , đặc biệt là những bộ phim như Extra, Friends. Chúng giúp ích mình rất nhiều vì kỹ năng học tiếng anh qua xem phim phụ đề tiếng anh của mình tương đối kém.</p>
													<small>Nguyễn Mai Hồng Phúc - Sinh viên đại học Hoa Sen.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<h3 class="text-danger"><a href="http://www.hocvientienganh.com/movies/filter?level=level-4"><i class="fa fa-signal"></i> Phim Học Tiếng Anh level 4</a></h3>
					<div class="movie-row">
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2575">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>06</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/walking-with-dinosaurs-1999?episode=6"> <img src="/system/movies/2575/thumbnails/medium/extinction10 (1).jpg" class="img-responsive" alt="Walking with Dinosaurs  (1999)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/walking-with-dinosaurs-1999"><strong style="text-transform: uppercase;">Walking with Dinosaurs  (1999)</strong></a><br> <small style="text-transform: capitalize;"><em>Dạo Bước C&ugrave;ng Khủng Long </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">102</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/walking-with-dinosaurs-1999')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2541">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>06</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/south-pacific-2009?episode=6"> <img src="/system/movies/2541/thumbnails/medium/jqzH9pAu6sZNUinLn3LzTLgQkIU.jpg" class="img-responsive" alt="South Pacific (2009)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/south-pacific-2009"><strong style="text-transform: uppercase;">South Pacific (2009)</strong></a><br> <small style="text-transform: capitalize;"><em>Nam Th&aacute;i B&igrave;nh Dương </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">62</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/south-pacific-2009')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2534">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/oceans-2009?episode=1"> <img src="/system/movies/2534/thumbnails/medium/gapHWgRfMyEIkCx0eIymz2x5DS3 (1).jpg" class="img-responsive" alt="Oceans (2009)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/oceans-2009"><strong style="text-transform: uppercase;">Oceans (2009)</strong></a><br> <small style="text-transform: capitalize;"><em>Đại Dương Xanh Thẳm </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">138</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/oceans-2009')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2533">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/voyage-of-time-life-s-journey-2016?episode=1"> <img src="/system/movies/2533/thumbnails/medium/iE0fIZNpKUOhdu56vu3uQHjtNM3 (1).jpg" class="img-responsive" alt="Voyage of Time: Life's Journey (2016)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/voyage-of-time-life-s-journey-2016"><strong style="text-transform: uppercase;">Voyage of Time: Life&#039;s Journey (2016)</strong></a><br> <small style="text-transform: capitalize;"><em>Biến Chuyển Của Sự Sống: H&agrave;nh Tr&igrave;nh Xuy&ecirc;n Thời Gian </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">62</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/voyage-of-time-life-s-journey-2016')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2137">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>05</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/life-in-the-undergrowth-2005?episode=5"> <img src="/system/movies/2137/thumbnails/medium/Untitled.png" class="img-responsive" alt="LIFE IN THE UNDERGROWTH (2005)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/life-in-the-undergrowth-2005"><strong style="text-transform: uppercase;">LIFE IN THE UNDERGROWTH (2005)</strong></a><br> <small style="text-transform: capitalize;"><em>Thế Giới C&ocirc;n Tr&ugrave;ng </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">821</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/life-in-the-undergrowth-2005')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="2136">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>06</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/planet-earth-ii-2016?episode=6"> <img src="/system/movies/2136/thumbnails/medium/Untitled.png" class="img-responsive" alt="PLANET EARTH II (2016)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/planet-earth-ii-2016"><strong style="text-transform: uppercase;">PLANET EARTH II (2016)</strong></a><br> <small style="text-transform: capitalize;"><em>H&agrave;nh Tinh Xanh II </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">631</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/planet-earth-ii-2016')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1706">
										<div class="movie-icon">    </div>
										<a href="http://www.hocvientienganh.com/movies/food-inc-2008?episode=1"> <img src="/system/movies/1706/thumbnails/medium/1.jpg" class="img-responsive" alt="Food Inc (2008)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/food-inc-2008"><strong style="text-transform: uppercase;">Food Inc (2008)</strong></a><br> <small style="text-transform: capitalize;"><em>Sự Thật Về Nền C&ocirc;ng Nghiệp Thực Phẩm   </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">1527</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/food-inc-2008')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="thumbnail">
									<div class="movie-img" data-tooltips="1476">
										<div class="movie-icon">    <span class="movie-episodes"><i class="label">Tập</i>06</span>  </div>
										<a href="http://www.hocvientienganh.com/movies/bbc-life-2009?episode=6"> <img src="/system/movies/1476/thumbnails/medium/1.jpg" class="img-responsive" alt="BBC: Life (2009)" /> </a>
									</div>
									<div class="caption">
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"> 0 % </div>
										</div>
										<h4 class="movie-title"> <a href="http://www.hocvientienganh.com/movies/bbc-life-2009"><strong style="text-transform: uppercase;">BBC: Life (2009)</strong></a><br> <small style="text-transform: capitalize;"><em>BBC Life - Cuộc sống hoang d&atilde; </em></small> </h4>
										<div class="movie-label text-muted pull-left">
											<ul class="list-inline movie-level">
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
												<li class="active">&nbsp;</li>
											</ul>
										</div>
										<div class="movie-label text-muted pull-right"> <span class="movie-view"><i class="fa fa-user fa-2x"></i> <span class="number">5346</span> Học viên</span> </div>
										<div class="movie-label text-muted pull-right" style="margin-right: 10px; cursor: pointer"> <span class="movie-view" onclick="addFavorite('http://www.hocvientienganh.com/movies/likes/bbc-life-2009')"><i class="fa fa-heart fa-2x text-danger"></i></span> </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">   </div>
					</div>
					<ul class="movies-pagination pagination-sm pull-right" data-total="14" data-href="movies/filter?level=level-4&perPage=8"></ul>
					<div class="clearfix"></div>
					<div class="client-testimonial">
						<div id="quotes-carousel" class="carousel carousel-fade slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-1.jpg">
											<div class="media-body">
												<blockquote>
													<p>Các bộ phim có phụ đề tiếng anh trên Hocvientienganh làm Tôi cảm thấy việc học Tiếng Anh qua cách xem phim phim phụ đề tiếng anh trở nên thú vị hơn, dễ học hơn, cải thiện nhiều về kỹ năng nghe nói của mình. Cảm ơn Hocvientienganh đã lập ra một trang web học Tiếng Anh qua phim hiệu quả như vậy.</p>
													<small>Ngân Hoàng - Sinh viên đại học Kinh Tế</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-2.png">
											<div class="media-body">
												<blockquote>
													<p>Mình thật sự rất ấn tượng với cách học tiếng anh qua phương pháp xem phim phụ đề song ngữ anh việt của Hocvientienganh. Mỗi buổi sáng thức dậy, công việc yêu thích của mình là chọn một bộ phim có phụ đề tiếng anh và xem phim phụ đề tiếng anh đó.</p>
													<small>Lưu Văn - Sinh viên đại học Ngoại Thương</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-3.jpg">
											<div class="media-body">
												<blockquote>
													<p>Sau một thời gian học tiếng anh qua phim trên website Hocvientienganh, kỹ năng giao tiếp Tiếng Anh của mình đã tiến bộ một cách rõ rệt. Cảm ơn website học tiếng anh qua phim rất hiệu quả này.</p>
													<small>Trí Nguyễn - Sinh viên đại học Hồng Bàng.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="media">
											<img class="media-object img-responsive img-circle pull-left" src="img/client-4.png">
											<div class="media-body">
												<blockquote>
													<p>Các bộ phim có phụ đề tiếng anh ở website học tiếng anh qua phim này rất dễ nghe , đặc biệt là những bộ phim có phụ đề tiếng anh hoạt hình cartoon . Chúng giúp ích mình rất nhiều vì kỹ năng học tiếng anh qua phim mình tương đối kém.</p>
													<small>Đinh Thị Ly - Sinh viên đại học Hoa Sen.</small>
													<div style="float:left;clear:left" itemprop="aggregateRating" class="keng" itemscope="" itemtype="http://schema.org/AggregateRating"><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i><i class="fa fa-star text-danger"></i> <span itemprop="ratingValue">10</span>/<span itemprop="bestRating">10</span> trên tổng số <span itemprop="ratingCount">113665</span> bình chọn</div>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div id="sidebar">
					<div class="widget-box">
						<div class="panel-body">
							<div class="media">
								<img class="media-object pull-left" src="http://graph.facebook.com/256634398177144/picture?type=large" style="width:64px;height:auto">
								<div class="media-body">
									<h5 class="media-heading"> <strong>Bảo Kim </strong> </h5>
									<p> <b>Email:</b> hotro.baokim7@gmail.com<br> <b>Số dư tài khoản:</b> <span class="text-danger">0 VNĐ</span><br>    </p>
								</div>
							</div>
						</div>
						<div class="panel-body"> <a href="http://www.hocvientienganh.com/users/profile/couplet" class="btn btn-success form-control"><i class="fa fa-pencil-square-o fa-lg"></i>&nbsp; TẤT CẢ CẶP CÂU ĐÃ HỌC</a> <br><br> <img style="width:100%;padding: 0px;" src="img/tuvung2.png" class="img-responsive center-block"> <i class="pull-right"]>Cách lưu và ôn tập cặp câu <a href="http://www.hocvientienganh.com/Cach-luu-tu-vung-va-on-tap-tren-Hocvientienganh" target='_blank' >tại đây</a></i> <a href="http://www.hocvientienganh.com/users/profile/word" class="btn btn-success form-control" style="margin-top:5px;"><i class="fa fa-cubes fa-lg"></i>&nbsp; TẤT CẢ TỪ VỰNG ĐÃ HỌC</a> <img style="width:100%;padding: 0px;" src="img/tuvung.png" class="img-responsive center-block"> <br><i class="pull-right"]>Cách học từ vựng <a href="http://www.hocvientienganh.com/cach-hoc-tu-vung-tren-Hocvientienganh" target='_blank' >tại đây</a></i> </div>
					</div>
					<div class="widget-box">
						<div class="sidebar-inner">
							<div class="input-group"> <input class="form-control"> <span class="input-group-btn"> <a href="http://www.hocvientienganh.com/request" class="btn btn-primary">Yêu cầu phim</a> </span> </div>
						</div>
					</div>
					<div class="widget-box">
						<div class="sidebar-inner">
							<div class="follow-box center-block text-center" style="margin: 0px 0px 0px -140px;">
								<script src="https://apis.google.com/js/platform.js"></script>
								<div style="margin-left: 65px;font-weight: 500;margin-bottom: 6px;"><i class="fa fa-hand-o-right" aria-hidden="true"></i> ĐĂNG KÝ KÊNH <b>YOUTUBE</b></div>
								<div class="g-ytsubscribe" data-channelid="UCnFN34vGu2kcp7qayG5hNRg" data-layout="default" data-count="default" ></div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="sidebar-inner">
							<div class="follow-box center-block text-center">
								<div class="fb-page" data-href="https://www.facebook.com/hocvientienganh.com/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
									<div class="fb-xfbml-parse-ignore">
										<blockquote cite="https://www.facebook.com/hocvientienganh.com/"><a href="https://www.facebook.com/hocvientienganh.com/"></a></blockquote>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<h3 class="text-danger">Hỏi đáp nhanh</h3>
						<div class="sidebar-inner asks-container">
							<form method="POST" action="http://www.hocvientienganh.com/asks" accept-charset="UTF-8" id="ask-question">
								<input name="_token" type="hidden" value="kEvcPcDcI0XOdsg4SJkXsgx03RjystLowElSEZMg">
								<div class="form-group"> <textarea class="form-control" name="question" cols="10" rows="3"></textarea> </div>
								<div class="form-group"> <button type="submit" class="btn btn-danger btn-xs img-rounded">Gửi câu hỏi</button> </div>
							</form>
							<div class="ask-list-group">
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Lana Ng:</strong></span>  Tại sao đã nạp VIP mà vẫn không mở được phim để xem? Khi bấm mở màn hình chỉ báo loading? </p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2385">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Tessa Ta:</strong></span>  ad ơi mình vừa nạp 100k vào tài khoản nhưng sau khi xem một tập phim xong thì bị đứng, không xem được nữa. cũng không vào profile được, mong ad check lại giùm mình với</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2384">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Hương Lê:</strong></span>  trên web không có phân ra thể loại phim à?
										mình muốn xem phi hoạt hình mà cũng chẳng biết ở chỗ nào
									</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2383">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Dũng Cold:</strong></span>  mình chọn phim từ dễ đến khó hay phim nào cũng vậy ạ</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2382">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Trang Hoang:</strong></span>  Up phim Trân Châu Cảng đi add </p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2375">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Việt Hùng:</strong></span>  có phim the office k ạ</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2367">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Gấu Panda:</strong></span>  Ad ơi, để bỏ chọn phim yêu thích thì làm sao ạ</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2366">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>lương xuân thành:</strong></span>  mình nghỉ wed nên có phần ôn tập riêng cho mỗi tập phim, và có phần ôn tập riêng cho mỗi bộ phim, chứ chung chung hết cho cả bộ thì khó on tập quá. thanks</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2364">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Nguyen Nam:</strong></span>  lam phim The Emoji Movie (ĐỘI QUÂN CẢM XÚC) di admin</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2363">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Admin:</strong></span>  Các bạn ở nước ngoài không xem được phim vui lòng truy cập: https://cmyip.com/ , copy phần My IP Address is, inbox m.me/hocvientienganh.com nhé.</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2355">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Cỏ Ngọt:</strong></span>  ad ơi,dạo này vào bằng laptop không được, nó cứ quay vòng vòng,mình dùng điện thoại không sao, nhưng nhanh hết pin lắm, ad xem giúp mình với, cảm ơn rất nhiều</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2354">Trả lời: 1</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Nhung Nguyen:</strong></span>  Minh ở Mỹ và không coi được phim</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2344">Trả lời: 4</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Jenny Nguyen:</strong></span>  Mình rất hy vọng có app trên ios!!!</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2336">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Tâm:</strong></span>  Mình nghĩ wed hay, có sáng tạo. Théo ý kiến của mình thì phần màn hình xem còn hạn chế. Théo góp ý của mình thì ad nên thêm vào tác vụ "tắt đèn" để khung xem được mở rộng hơn, và người xem tập trung vào câu thoại và học tốt hơn. Nếu có phần chèn hình ảnh thì mình có thể se chụp màn hình tác vụ này của 1 web khác  VD https://phimbathu.com/xem-phim/phim-anh-trang-moonlight-2016-6576.</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2335">Trả lời: 0</button>
								</div>
								<div class="ask-list-item">
									<p><span class="text-danger"><strong>Mạnh Cường:</strong></span>  mình ở Hàn và mình không xem được phim</p>
									<button class="btn btn-default btn-xs ask-answer-btn" data-question="2332">Trả lời: 9</button>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<h3 class="text-danger">Thành viên mới nhất</h3>
						<div class="sidebar-inner">
							<ul class="media-list">
								<li class="media" style="border-bottom:1px solid #ddd">
									<a class="pull-left" href="#"> <img class="media-object" src="/assets/img/default-avatar.jpg" style="width:20px;height:auto;"> </a>
									<div class="media-body">
										<h5 class="media-heading">tran quang vu </h5>
									</div>
								</li>
								<li class="media" style="border-bottom:1px solid #ddd">
									<a class="pull-left" href="#"> <img class="media-object" src="/assets/img/default-avatar.jpg" style="width:20px;height:auto;"> </a>
									<div class="media-body">
										<h5 class="media-heading">Thu Nguyễn </h5>
									</div>
								</li>
								<li class="media" style="border-bottom:1px solid #ddd">
									<a class="pull-left" href="#"> <img class="media-object" src="/assets/img/default-avatar.jpg" style="width:20px;height:auto;"> </a>
									<div class="media-body">
										<h5 class="media-heading">nguyễn thị tường vi </h5>
									</div>
								</li>
								<li class="media" style="border-bottom:1px solid #ddd">
									<a class="pull-left" href="#"> <img class="media-object" src="http://graph.facebook.com/690553087818098/picture?type=large" style="width:20px;height:auto;"> </a>
									<div class="media-body">
										<h5 class="media-heading">Hoài Hoàng </h5>
									</div>
								</li>
								<li class="media" style="border-bottom:1px solid #ddd">
									<a class="pull-left" href="#"> <img class="media-object" src="/assets/img/default-avatar.jpg" style="width:20px;height:auto;"> </a>
									<div class="media-body">
										<h5 class="media-heading">Phan Hoang Ha  </h5>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="widget-box">
						<h3 class="text-danger">Phim lẻ xem nhiều</h3>
						<ul class="nav nav-pills nav-justified" role="tablist" id="statistic">
							<li class="active"><a href="#movie-daily" role="tab" data-toggle="tab">Ngày</a></li>
							<li><a href="#movie-weekly" role="tab" data-toggle="tab">Tuần</a></li>
							<li><a href="#movie-monthly" role="tab" data-toggle="tab">Tháng</a></li>
						</ul>
						<div class="sidebar-inner">
							<div class="tab-content">
								<div class="tab-pane active" id="movie-daily">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/shrek-4" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/86/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>SHREK 4</strong><br> <small><em>Gã Chằn Tinh Tốt Bụng 4 </em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/lilo-and-stitch-2002" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2361/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Lilo And Stitch (2002)</strong><br> <small><em>LILO VÀ STITCH</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-dyatlov-pass-incident-devil-s-pass" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/981/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Dyatlov Pass Inciden...</strong><br> <small><em>Mật mã Dyatlov</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/if-i-stay" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/171/thumbnails/thumb/lHobthLAeSznVJ9FRKnrdJAqgpA.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>If i stay</strong><br> <small><em>Nếu em ở lại</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/step-up-2-the-streets-2008" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1839/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Step Up 2: The Streets (...</strong><br> <small><em>BƯỚC NHẢY ĐƯỜNG PHỐ 2: TRÊN...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/fading-gigolo" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/590/thumbnails/thumb/Fading Gigolo.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Fading Gigolo</strong><br> <small><em>Trai Bao</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
								<div class="tab-pane" id="movie-weekly">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/crimson-peak-2015" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2518/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Crimson Peak (2015)</strong><br> <small><em>Lâu Đài Đẫm Máu</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-gift-2015" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2490/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Gift (2015)</strong><br> <small><em>QUÀ TẶNG BÍ ẨN</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-conjuring-1-2013" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1822/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Conjuring 1 (2013)</strong><br> <small><em>ÁM ẢNH KINH HOÀNG</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/lilo-and-stitch-2002" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2361/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Lilo And Stitch (2002)</strong><br> <small><em>LILO VÀ STITCH</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-good-lie" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/961/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Good Lie</strong><br> <small><em>Lời Nói Dối Ngọt Ngào</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/kung-fu-panda" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/81/thumbnails/thumb/dWRy3NHHSjYP8bmuIyRebRg7wBz.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Kung Fu Panda</strong><br> <small><em>Kung Fu Gấu Trúc</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
								<div class="tab-pane" id="movie-monthly">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/jason-bourne-2016" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2214/thumbnails/thumb/download (3).jpeg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong> Jason Bourne (2016)</strong><br> <small><em>Siêu Điệp Viên Jason Bourne</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/finding-dory-2016" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1894/thumbnails/thumb/iWRKYHTFlsrxQtfQqFOQyceL83P.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Finding Dory (2016)</strong><br> <small><em>Đi Tìm Dory</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/epic-2013" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/75/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Epic (2013)</strong><br> <small><em>Xứ sở lá cây</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-art-of-getting-by-2011" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2428/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Art Of Getting By (2...</strong><br> <small><em>NGHỆ THUẬT ĐỐI PHÓ</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/fast-and-furious-7" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/888/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Fast And Furious 7</strong><br> <small><em>Quá Nhanh Qúa Nguy Hiểm 7</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/crimson-peak-2015" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2518/thumbnails/thumb/GOTT.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Crimson Peak (2015)</strong><br> <small><em>Lâu Đài Đẫm Máu</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="sidebar-inner ads">
							<div id="ads-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
								<div class="carousel-inner">
									<div class="item  active"> <img src="img/ads/high/highly-1.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-2.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-3.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-4.jpg" class="img-responsive"> </div>
								</div>
								<ol class="carousel-indicators">
									<li data-target="#ads-carousel" data-slide-to="0" class="active"></li>
									<li data-target="#ads-carousel" data-slide-to="1"></li>
									<li data-target="#ads-carousel" data-slide-to="2"></li>
									<li data-target="#ads-carousel" data-slide-to="4"></li>
								</ol>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<h3 class="text-danger">Phim bộ xem nhiều</h3>
						<ul class="nav nav-pills nav-justified" role="tablist" id="statistic">
							<li class="active"><a href="#movie-daily" role="tab" data-toggle="tab">Ngày</a></li>
							<li><a href="#movie-weekly" role="tab" data-toggle="tab">Tuần</a></li>
							<li><a href="#movie-monthly" role="tab" data-toggle="tab">Tháng</a></li>
						</ul>
						<div class="sidebar-inner">
							<div class="tab-content">
								<div class="tab-pane active" id="movie-daily">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/mom-season-2" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/432/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>MOM - SEASON 2</strong><br> <small><em>Mom - Phần 2</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/into-the-badlands-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1416/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Into The BadLands - Seas...</strong><br> <small><em>Vùng Đất Tử Địa - Phần 1</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/walking-with-dinosaurs-1999" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2575/thumbnails/thumb/extinction10 (1).jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Walking with Dinosaurs...</strong><br> <small><em>Dạo Bước Cùng Khủng Long</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/arrow-season-2" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/473/thumbnails/thumb/2yfXq8JFNz6719MjCA5GgQne04b.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>ARROW - SEASON 2</strong><br> <small><em>Mũi Tên Xanh - Phần 2</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/desperate-housewives-season-4" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2372/thumbnails/thumb/desperate_housewives1680x1050.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Desperate Housewives - S...</strong><br> <small><em>Những Bà Nội Trợ Kiểu Mỹ - P...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/masterchef-us-season-6" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1251/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>MasterChef US - Season 6</strong><br> <small><em>Vua Đầu Bếp 6</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
								<div class="tab-pane" id="movie-weekly">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/hemlock-grove-season-2" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2600/thumbnails/thumb/Hemlock-Grove-Landon-Liboiron-e1405098189742.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Hemlock Grove ( season 2...</strong><br> <small><em>Thị trấn Hemlock Grove phần...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-lost-world-season-1-1999" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2492/thumbnails/thumb/Untitled-4.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Lost World season 1...</strong><br> <small><em>Thế giới bị mất</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/desperate-housewives-season-4" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2372/thumbnails/thumb/desperate_housewives1680x1050.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Desperate Housewives - S...</strong><br> <small><em>Những Bà Nội Trợ Kiểu Mỹ - P...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-last-man-on-earth-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/826/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The Last Man on Earth -...</strong><br> <small><em>Người Đàn Ông Cuối Cùng Trên...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/desperate-housewives-season-2" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/1530/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Desperate Housewives - S...</strong><br> <small><em>Những Bà Nội Trợ Kiểu Mỹ - P...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/scandal-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/649/thumbnails/thumb/jmA3bbPkFGenLHMDgGbTv3Gs97t.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>SCANDAL - SEASON 1</strong><br> <small><em>Những Vụ Bê Bối</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
								<div class="tab-pane" id="movie-monthly">
									<div class="media-list">
										<a href="http://www.hocvientienganh.com/movies/selfie-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/658/thumbnails/thumb/1.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Selfie - Season 1</strong><br> <small><em>Tự Sướng - Phần 1</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/spartacus-season-1-blood-and-sand" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/621/thumbnails/thumb/tI6HegqWeJzogdR9ToIiRdGeGf8.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Spartacus Season 1: Bloo...</strong><br> <small><em>Spartacus Máu Và Cát</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/mindhunter-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2613/thumbnails/thumb/790XO8Vw3mx64LiqePeMRVGbwv4 (1).jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Mindhunter - Season 1</strong><br> <small><em>Kẻ Săn Suy Nghĩ 1</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/the-x-files-season-1-1993" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2549/thumbnails/thumb/davinci-1-201610382.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>The X-Files: Season 1 (1...</strong><br> <small><em>HỒ SƠ TUYỆT MẬT 1</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/supernatural-season-6-2010" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2096/thumbnails/thumb/Untitled.png" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Supernatural Season 6 (2...</strong><br> <small><em>SIÊU NHIÊN PHẦN 6</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
										<a href="http://www.hocvientienganh.com/movies/hemlock-grove-season-1" class="media text-muted">
											<img src="http://www.hocvientienganh.com/system/movies/2598/thumbnails/thumb/tải xuống.jpg" class="media-object pull-left" style="width:90px;height:auto">
											<div class="media-body">
												<h5 class="media-heading"> <strong>Hemlock Grove ( season 1...</strong><br> <small><em>Thị trấn Hemlock Grove phần...</em></small> </h5>
												<ul class="list-inline movie-level">
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li class="active">&nbsp;</li>
													<li>&nbsp;</li>
												</ul>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="sidebar-inner ads">
							<div id="ads-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
								<div class="carousel-inner">
									<div class="item  active"> <img src="img/ads/high/highly-1.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-2.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-3.jpg" class="img-responsive"> </div>
									<div class="item "> <img src="img/ads/high/highly-4.jpg" class="img-responsive"> </div>
								</div>
								<ol class="carousel-indicators">
									<li data-target="#ads-carousel" data-slide-to="0" class="active"></li>
									<li data-target="#ads-carousel" data-slide-to="1"></li>
									<li data-target="#ads-carousel" data-slide-to="2"></li>
									<li data-target="#ads-carousel" data-slide-to="4"></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.number.min.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/jquery.ba-bbq.min.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/jBox.min.js"></script>
<script src="js/main.js"></script>

<script src="js/jquery.qtip.min.js"></script>
<script src="js/jquery.twbsPagination.min.js"></script>
<!-- Custom JS -->
<script src="js/asks.js"></script>
<script src="js/movie.js"></script>
<script type="text/javascript">
    (function() {
        // Set options for home route
        Movie.setOptions({
            'paginate'	: '.movies-pagination',
            'qtip'		: '.movie-img'
        });
        // Initialize necessary features
        Movie.initCarousel('.carousel');
        Movie.initPagination();
        Movie.initQtips();
    })();
</script>

@stop
