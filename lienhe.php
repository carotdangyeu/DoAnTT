﻿

<div class="adv">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="breadcrumb clearfix">
					<ul>
						<li itemtype="http://shema.org/Breadcrumb" itemscope="" class="home">
							<a title="Đến trang chủ" href="index.php" itemprop="url"><span itemprop="title">Trang chủ</span></a>
						</li>
						<li class="icon-li"><strong>Liên hệ</strong> </li>
					</ul>
				</div>
				<script type="text/javascript">
					$(".link-site-more").hover(function () { $(this).find(".s-c-n").show(); }, function () { $(this).find(".s-c-n").hide(); });
				</script>
			</div>
		</div>
	</div>
</div>


<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<script src="http://maps.google.com/maps/api/js?key=AIzaSyBO93-_2pxx4UBTNduADxfoWpsFrHAFKsA&amp;sensor=true" type="text/javascript"></script>
				<script src="app/services/contactServices.js"></script>
				<script src="app/controllers/contactController.js"></script>
				<!--Begin-->
				<div class="contact-content clearfix" ng-controller="contactController" ng-init="initController('Shop','Maps')" style="padding-left: 10px;">
					<h1 class="title">
						<span>
							Thông tin liên hệ
						</span>
					</h1>
					<div class="contact-block clearfix">
						<div class="row">
							<div class="col-md-3">
								<a href="index.php">
									<img class="img-responsive" src="Uploads/shop264/images/logo.png" />
								</a>
							</div>
							<div class="col-md-9">
								<div class="contact-info">
									<div class="docs"><b class="name">CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME</b></div>
									<div class="docs">
										<i class="fa fa-map-marker"></i>
										<b>Địa chỉ:</b> 5/12A Quang Trung, P.14, Q.Gò Vấp, Tp.HCM
									</div>
									<div class="docs">
										<i class="fa fa-phone"></i>
										<b>Điện thoại:</b> (08) 66 85 85 38
									</div>
									<div class="docs">
										<i class="fa fa-mobile"></i>
										<b>Hotline</b>  0908 77 00 95
									</div>
									<div class="docs">
										<i class="fa fa-fax"></i>
										<b>Fax:</b> (08) 66 85 85 38
									</div>
									<div class="docs">
										<i class="fa fa-envelope"></i>
										<a href="mailto:#">info@gmail.com</a>
									</div>
								</div>
							</div>
						</div>
						<hr class="" />
						<h3 class="title">Gửi thông tin liên hệ</h3>
						<div class="description">
							Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="contact-feedback">
									<form action="insert_lienhe.php" method="post" name="frm" onsubmit="return kiemtra()">
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon glyphicon-user"></i></span>
											<input name="hoten"  type="text" placeholder="Họ tên" ng-model="Name" class="form-control" required />
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
											<input type="text" placeholder="Địa chỉ" ng-model="Address" class="form-control" />
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
											<input name="email" type="email" placeholder="Email" ng-model="Email" class="form-control" required />
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
											<input  name="dienthoai"  type="text" placeholder="Điện thoại" ng-model="Phone" class="form-control" required />
										</div>
										<div class="form-group input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
											<input name="chude"  type="text" placeholder="Tiêu đề" ng-model="Title" class="form-control" required />
										</div>
										<div class="form-group">
											<textarea name="noidung" placeholder="Nội dung" class="form-control" rows="3" ng-model="Content" required></textarea>
										</div>
										
										<button class="btn btn-default" name="submit" type="submit">Gửi</button>
									</form>

								</div>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="map clearfix" style="width: 545px;">
									<div class="map-canvas" id="map_canvas"></div>
									<div class="map-information" ng-if="Maps.length>1">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
					var map;
					var infowindow;
					var marker = new Array();
					var old_id = 0;
					var infoWindowArray = new Array();
					var infowindow_array = new Array();
					function initialize() {
						var defaultLatLng = new google.maps.LatLng(10.845064529472292, 106.636744831799320);

						var myOptions = { zoom: 16, center: defaultLatLng, scrollwheel: true, mapTypeId: google.maps.MapTypeId.ROADMAP };
						map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
						map.setCenter(defaultLatLng);

						if (Maps.length <= 0) {
							var arrLatLng = new google.maps.LatLng(10.845064529472292, 106.636744831799320);
							var myHtml = "<div class='map-description'> <strong>" + firstMap.Name + "</strong><br/>Địa chỉ: <span>" + firstMap.Address + "</span><br/>Điện thoại: <span>" + firstMap.Phone + "</span><br/></div>";
							infoWindowArray[firstMap.Id] = myHtml;
							loadMarker(arrLatLng, infoWindowArray[firstMap.Id], firstMap.Id);
						}

						$.each(Maps, function (index, it) {
							var arrLatLng = new google.maps.LatLng(it.PosX, it.PosY);
							var myHtml = "<div class='map-description'> <strong>" + it.Name + "</strong><br/>Địa chỉ: <span>" + it.Address + "</span><br/>Điện thoại: <span>" + it.Phone + "</span><br/></div>";
							infoWindowArray[it.Id] = myHtml;
							loadMarker(arrLatLng, infoWindowArray[it.Id], it.Id);
						});


						moveToMaker(firstMap.Id);
					}
					function loadMarker(myLocation, myInfoWindow, id) {
						marker[id] = new google.maps.Marker({ position: myLocation, map: map, visible: true });
						var popup = myInfoWindow;
						infowindow_array[id] = new google.maps.InfoWindow({ content: popup });
						google.maps.event.addListener(marker[id], 'click', function () {
							if (id == old_id) return;
							if (old_id > 0)
								infowindow_array[old_id].close();
							infowindow_array[id].open(map, marker[id]);
							old_id = id;
						});
						google.maps.event.addListener(infowindow_array[id], 'closeclick', function () { old_id = 0; });
					}
					function moveToMaker(id) {
						var location = marker[id].position;
						map.setCenter(location);
						if (old_id > 0)
							infowindow_array[old_id].close();
						infowindow_array[id].open(map, marker[id]);
						old_id = id;
					}
				</script>
				<!--End-->
				<script type="text/javascript">
					var firstMap= {"Id":264,"ShopId":0,"Name":"CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME","Address":"5/12A Quang Trung, P.14, Q.Gò Vấp, Tp.HCM","Phone":"(08) 66 85 85 38","PosX":10.844895933994351,"PosY":106.636744831799320,"Index":0,"Inactive":false};
					var Maps= [];
					window.Maps = Maps;
					window.Shop = {"Name":"CÔNG TY TNHH PHÁT TRIỂN CÔNG NGHỆ RUNTIME","Email":"info@runtime.vn","Phone":"(08) 66 85 85 38","Logo":"/Uploads/shop264/images/logo.png","Fax":"(08) 66 85 85 38","Website":"http://www.runtime.vn","Hotline":"0908 77 00 95","Address":"5/12A Quang Trung, P.14, Q.Gò Vấp, Tp.HCM","Fanpage":"https://www.facebook.com/runtime.vn","Google":null,"Facebook":"https://www.facebook.com/runtime.vn","Youtube":null,"Twitter":null,"IsBanner":false,"IsFixed":false,"BannerImage":null};
					$(document).ready(function () {
						initialize();
					});
				</script>
			</div>
		</div>
	</div>
</div>
