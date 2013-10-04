<?php
$themename = "Administra&ccedil;&atilde;o";


function dado($Opt = ""){
	$configuracoes = json_decode(get_option('configuracoes'));
	
	$strDado = "";
	$Opt = str_ireplace(" ","_", $Opt);
	eval('$strDado = @$configuracoes->'.$Opt.';');
	return $strDado;
}

function mytheme_add_admin() {
 
global $themename, $shortname, $options;

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/_functions/functions.css", false, "1.0", "all");

if(!is_null($_GET) && !empty($_GET) && array_key_exists('page', $_GET)){
       if(basename(__FILE__) == $_GET['page']){
		if($_POST){
			update_option('configuracoes', json_encode($_POST));
			header("Location: admin.php?page=admin_pages_fully.php&saved=true");
		}
	}
	
}

$icon = get_bloginfo('template_directory')."/_functions/generic.png";
$file_dir=get_bloginfo('template_directory');  
wp_enqueue_style("functions", $file_dir."/_functions/functions.css", false, "1.0", "all");  
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin', $icon, 3);

}
function mytheme_admin() {
?>
<div class="wrap rm_wrap">
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript">
	addItem = function(){
		
		item = prompt ("Nome do Item?");
		
		if(item){
			html = '<br class="clear" />';
			html += '<div class="rm_input rm_text">';
			html += '	<label>'+item+'</label>';
			html += '	<textarea name="'+item+'"></textarea>';
			html += '	<a href="javascript:;" onclick="$(this).parent().remove();">remover</a>';
			html += '</div>';
			
			$(".rm_options").append(html);
		}
	}
	</script>
	<style type="text/css">
	.rm_input {position:relative;}
	.rm_input a {position:absolute; bottom:5px; right:5px; color:#db2020;}
	</style>
	<h2>P&aacute;gina de Administra&ccedil;&atilde;o</h2>
	
	<div class="rm_opts">
			<p></p>
		<div class="rm_section">
		<form method="post" action="">
			<div class="rm_title"><h3>Configura&ccedil;&otilde;es</h3>
				<span class="submit"><input type="submit" value="Salvar"></span>
				<div class="clearfix"></div>
			</div>
			<div class="rm_options">
				<?php
				$configuracoes = json_decode(get_option('configuracoes'));
				
				if(sizeof($configuracoes))
					foreach($configuracoes as $dado => $val){
					?>
					<div class="rm_input rm_text">
						<label><?=ucwords($dado)?></label>
						<textarea style="height:50px;width:500px;" name="<?=$dado?>"><?=$val?></textarea>
						<a href="javascript:;" onclick="if(confirm('Deseja remover este item'))$(this).parent().fadeOut(function(){$(this).remove()});">remover</a>
					</div>
					<?php				
					}
				?>
				
			</div>
		</form>
		</div>
		<a href="javascript:;" class="add-new-h2" style="float:left;margin:10px 0 0 635px;" onclick="addItem()">Adicionar opção</a>
	</div>
</div>
<?php
if(!is_null($_GET) && !empty($_GET) && array_key_exists('saved', $_GET)):
	if($_GET['saved'] == "true"): ?>
    		    <div id="message" class="updated">Configura&ccedil;&otilde;es Salvas</div>  
	<?php endif;
endif;
}

//add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>
