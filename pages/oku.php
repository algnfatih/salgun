<?php if(!isset($GLOBALS['secure'] )) { header("Location: ../index.php?sayfa=home"); } ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('assets/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Esnafın Kaleminden</h1>
                        <hr class="small">
                        <span class="subheading">Süleyman Algün | Köşe Yazıları</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			
			<?php if(isset($_GET['id'])){
				$id = $_GET['id'];
				$yazi = yazi($id);
			}
			else {
				header("Location: index.php?sayfa=home");
			}
			
			?>
				
                <div class="post-preview">
                        <h2 class="post-title">
                            <?php echo $yazi -> yazi_baslik ?>
                        </h2>
						
						<h3><div class="fb-like" data-href="<?php echo $yazi -> yazi_link ?>" data-send="false" data-layout="button_count" data-show-faces="false" data-font="tahoma" data-share="false"></div> </h3>
						<p class="post-meta"><a href="index.php?sayfa=hakkimda">Süleyman Algün</a> | <?php echo $yazi -> yazi_tarih ?> 
						 | <a target="_blank" href="<?php echo $yazi -> yazi_link ?>"> Denge Gazetesi'nde oku! </a> </p>
						
						</div>
						
                         <p> <?php echo nl2br($yazi -> yazi_icerik) ?> </p>
                        
					
					
                
			<hr>
			
			<div class="fb-comments" data-href="<?php echo $yazi -> yazi_link ?>" data-width="%100" data-mobile="true"></div>
			
			<hr>
            
			
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <?php 
						$next = $_GET['id'] + 1 ;
						echo '<a href=index.php?sayfa=oku&id=' . $next . '>  GEÇMİŞ YAZI &rarr;</a>'; ?>
                    </li>
					
					<?php if($_GET['id']=='1'){
						echo "";
					}
					else {
						$previous = $_GET['id'] - 1;
						echo '<li class="previous">
							<a href=index.php?sayfa=oku&id=' . $previous . '> &larr; YENİ YAZI </a>
						</li>';
					} ?>
                </ul>
            </div>
        </div>
    </div>

    <hr>