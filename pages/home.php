<!-- Carousel -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./img/wallpaper.jpg" alt="image">
			<div class="carousel-caption">
				<h1 class="display-2">The Smart key for transportations</h1>
                <a href="https://www.youtube.com/watch?v=-fSk-w2jzA4&t=14s" target="_blank" class="btn btn-outline-warning" role="button" aria-pressed="true">Video</a>
			</div>
		</div>
		<div class="carousel-item">
			<img src="./img/wallpaper.jpg" alt="image">
		</div>
	</div>
</div>
<!-- Site-Waraper -->
<div class="homepage">
    <div class="container">
        <div id="homenews">
            <?php 
                $news = getHomeNews();
                while( $row = $news->fetch_array(MYSQLI_ASSOC)) { 
            ?>
            <div class="row padding">
                <div class="col-md-12 col-lg-6">
                    <img src="./img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="image">
                </div>
                <div class="col-lg-6">
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['body'] ?></p>
                    <br>
                </div>
            </div>      
            <?php 
             }
            ?>
        </div>
        <div class="row padding">
            <div class="col-md-12">
                <h2>SKT - Hệ thống quản lý Vận hành có gì?</h2>
            </div>
        </div>
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <i class="fas fa-calendar-times"></i>
                <h5>Xếp lịch</h5>
                <p>Xếp lịch làm việc & phát hành lệnh vận chuyển</p>					
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-tasks"></i>			
                <h5>Quản lý</h5>
                <p>Quản lý kho vé, quản lý KPI nhân viên, quản lý mua hàng</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-ticket-alt"></i>	
                <h5>Bán vé</h5>
                <p>Bán vé & Tích điểm qua điện thoại</p>
            </div>
        </div>	
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4 ">
                <i class="fas fa-universal-access"></i>
                <h5>Theo dõi</h5>
                <p>Theo dõi dầu & công tơ mét</p>					
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fas fa-dollar-sign"></i>		
                <h5>Tính lương</h5>
                <p>Tính lương lái xe, phụ xe & nhân viên văn phòng</p>
            </div>
            <div class="col-sm-12 col-md-4">
                <i class="fas fa-wrench"></i>		
                <h5>Bảo dưỡng</h5>
                <p>Bảo dưỡng & sửa chữa</p>
            </div>
        </div>	
        <div class="row text-center padding" style="padding-bottom: 5rem;">
            <div class="col-xs-12">
                <h2>Hãy mở khóa cho doanh nghiệp của bạn. Liên hệ với chúng tôi ngay!</h2>
                <p>Quản lý doanh nghiệp thật dễ dàng. Bạn còn đang băn khoăn? Hãy để chúng tôi mang giải pháp đến cho bạn.</p>				
            </div>
        </div>	
    </div>
</div>