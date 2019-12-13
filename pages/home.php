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
			
			<?php if(isset($_GET['sira'])){
				$sira = $_GET['sira'] * 5;
			}
			else {
				$_GET['sira'] = 1;
				$sira = 5;
			}
				$yazilar = yazilar($sira);
				
			foreach ($yazilar as $yazi){
				
                echo '<div class="post-preview">
                    <a href="index.php?sayfa=oku&id=' . $yazi -> yazi_id . '">
                        <h2 class="post-title">
                            ' . $yazi -> yazi_baslik . '
                        </h2>					
                        <h3 class="post-subtitle">
                            '. substr($yazi -> yazi_icerik, 0, 250) .' ...
                        </h3> 
					</a>
					<h3><div class="fb-like" data-href="'. $yazi -> yazi_link . '" data-send="false" data-layout="button_count" data-show-faces="false" data-font="tahoma" data-share="false"></div> </h3>
                    <p class="post-meta"><a href="index.php?sayfa=hakkimda">Süleyman Algün</a> | '. $yazi -> yazi_tarih .' 
					 | <a target="_blank" href="'. $yazi -> yazi_link .'"> Denge Gazetesi\'nde oku! </a> </p>
                </div>
			<hr> ';
				
			} ?>
            
			
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <?php 
						$next = $_GET['sira'] + 1 ;
						echo '<a href=index.php?sayfa=home&sira=' . $next . '> GEÇMİŞ YAZILAR &rarr;</a>'; ?>
                    </li>
					
					<?php if($_GET['sira']=='1'){
						echo "";
					}
					else {
						$previous = $_GET['sira'] - 1;
						echo '<li class="previous">
							<a href=index.php?sayfa=home&sira=' . $previous . '> &larr; YENİ YAZILAR </a>
						</li>';
					} ?>
                </ul>
            </div>
        </div>
    </div>

    <hr>