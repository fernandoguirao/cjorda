<?php get_header(); ?>
	<?php get_carousel();?>
	<div class="container-fluid">
		<div class="minibarra"></div>
		<div class="row-fluid no-space">
			<div class="span8" id="home_content">
				<?php get_noticias_box();?>
				
				
				
				<div class="noticia">
					<div class="minibarra"></div>
					<img src="<?php bloginfo("template_url");?>/img/cjorda.png">
					<div class="fecha_noticia"><p>25 DE DICIEMBRE DE 2013</p></div>
					<div class="titulo_noticia"><p>Este es el título de la noticia en dos líneas</p></div>
					<div class="cuerpo_entrada"><p>Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.
					</p></div>
					<div class="container-fluid container_botones">
						<div class="row-fluid">
							<div class="span5 btn_seguir">Seguir Leyendo</div>
							<div class="span5 btn_compartir">Compartir</div>
						</div>
					</div>
				</div>
				
				<div class="noticia">
					<div class="minibarra"></div>
					<img src="<?php bloginfo("template_url");?>/img/cjorda.png">
					<div class="fecha_noticia"><p>25 DE DICIEMBRE DE 2013</p></div>
					<div class="titulo_noticia"><p>Este es el título de la noticia en dos líneas</p></div>
					<div class="cuerpo_entrada"><p>Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.
					</p></div>
					<div class="container-fluid container_botones">
						<div class="row-fluid">
							<div class="span5 btn_seguir">Seguir Leyendo</div>
							<div class="span5 btn_compartir">Compartir</div>
						</div>
					</div>
				</div>
				
				<div class="noticia">
					<div class="minibarra"></div>
					<img src="<?php bloginfo("template_url");?>/img/cjorda.png">
					<div class="fecha_noticia"><p>25 DE DICIEMBRE DE 2013</p></div>
					<div class="titulo_noticia"><p>Este es el título de la noticia en dos líneas</p></div>
					<div class="cuerpo_entrada"><p>Curabitur blandit tempus porttitor. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.
					</p></div>
					<div class="container-fluid container_botones">
						<div class="row-fluid">
							<div class="span5 btn_seguir">Seguir Leyendo</div>
							<div class="span5 btn_compartir">Compartir</div>
						</div>
					</div>
				</div>
				
			</div>
			<?php get_barraderecha();?>
		</div>
	</div>
<?php get_footer(); ?>