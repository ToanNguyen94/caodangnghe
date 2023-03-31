<?php
$image = rwmb_meta('form-bg');
$image_url = isset($image['ID']) ? wp_get_attachment_image_url($image['ID'], 'full')  : '';
$title1 = rwmb_meta('title1');
$title2 = rwmb_meta('title2');
?>
<section class="register-bottom" style="background-image: url('<?= esc_url($image_url) ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<div class="register-bottom-left">
					<h3 class="title-2"><?= wpautop($title1) ?></h3>
					<h2 class="title-1"><?= $title2 ?></h2>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="register-bottom-right">
					<?= do_shortcode('[fluentform id="1"]') ?>
					<!-- <form action="https://hnivc.edu.vn/dang-ky-tuyen-sinh.html" method="post" id="formAdmission">
						<h3 class="title-3">ĐĂNG KÝ TƯ VẤN TUYỂN SINH</h3>
						<div class="col-md-12 ">
							<div class="error" style="display: none;">
							</div>
						</div>
						<input type="hidden" name="message" class="message" value="trống" placeholder="Rỗng">
						<input type="text" name="fullname" class="fullname" placeholder="Họ và tên">
						<input type="text" name="namsinh" class="namsinh" placeholder="Ngày sinh">
						<input type="text" name="phone" class="phone" placeholder="Số điện thoại">
						<input type="text" name="email" class="email" placeholder="Email">
						<input type="text" name="address" class="address" placeholder="Địa chỉ">
						<select name="nganhhoc" class="nganhhoc" id="">
							<option value="Rỗng">Chọn ngành học</option>
							<option value="30">Lĩnh vực: Chăm sóc sắc đẹp</option>
							<option value="31">|----Chăm sóc sắc đẹp</option>

							<option value="32">|----Kỹ thuật chăm sóc tóc</option>

							<option value="40">|----Thiết kế tạo mẫu tóc</option>

							<option value="39">|----Vẽ móng nghệ thuật</option>

							<option value="1">Lĩnh vực: Công nghệ thông tin</option>
							<option value="19">|----Thiết Kế Đồ Hoạ</option>

							<option value="17">|----Công Nghệ Thông Tin (Ứng Dụng Phần Mềm)</option>

							<option value="2">Lĩnh vực: Công nghệ kỹ thuật điện - điện tử - điện lạnh
							</option>
							<option value="21">|----Điện Công Nghiệp</option>

							<option value="22">|----Điện Dân Dụng</option>

							<option value="23">|----Điện Tử Công Nghiệp</option>

							<option value="24">|----Điện Tử Dân Dụng</option>

							<option value="25">|----Kỹ Thuật Máy Lạnh &amp; Điều Hoà Không Khí</option>

							<option value="26">|----Tự Động Hoá Công Nghiệp</option>

							<option value="27">|----Lắp đặt Thiết Bị Lạnh</option>

							<option value="3">Lĩnh vực: Công nghệ kỹ thuật cơ khí</option>
							<option value="41">|----Hàn</option>

							<option value="15">|----Nguội Chế Tạo</option>

							<option value="14">|----Công nghệ kỹ thuật cơ khí</option>

							<option value="13">|----Cắt Gọt Kim Loại</option>

							<option value="12">|----Cơ Điện Tử</option>

							<option value="4">Lĩnh vực: Công nghệ ÔTÔ</option>
							<option value="16">|----Công Nghệ Ô Tô</option>

							<option value="9">Lĩnh vực: Kinh tế - Du lịch</option>
						</select>
						<select name="trinhdo" class="trinhdo" id="">
							<option value="Rỗng">Chọn trình độ</option>
							<option value="Sơ cấp">Sơ cấp</option>
							<option value=" Trung cấp"> Trung cấp</option>
							<option value=" Cao đẳng"> Cao đẳng</option>
							<option value=" Hệ 9+"> Hệ 9+ </option>
						</select>

						<div class="center">
							<input id="submitform" type="submit" value="Đăng ký">
							<input id="gif" type="button" value="Dữ liệu đang được xử lý..." style="display: none; font-size: 14px; text-transform: uppercase; height: 40px; background: rgb(254, 99, 50); color: rgb(255, 255, 255); padding: 0px 25px; border-radius: 5px; line-height: 36px;">
						</div>
					</form> -->
				</div>
			</div>
		</div>
	</div>
</section>