<?php defined('_JEXEC') or die; ?>

<head>
	<style>
		.grand_icon a {border-radius: <?php echo $params->get('borderradius'); ?>}
		.grandopt{
			float:<?php echo $params->get('align'); ?>;
			margin-right:<?php echo $params->get('margr'); ?>;
			margin-left:<?php echo $params->get('margl'); ?>;
			
		}
		
		.grandopt a{
			padding:<?php echo $params->get('padding'); ?>;
			
		}
		
		.s1 a{
			color: <?php echo $params->get('color1'); ?>;
			background: <?php echo $params->get('bgcolor1'); ?>;
		}
		.s1 a:hover{
			color: <?php echo $params->get('colorhover1'); ?>;
		}
		.s2 a{
			color: <?php echo $params->get('color2'); ?>;
			background: <?php echo $params->get('bgcolor2'); ?>;
		}
		.s2 a:hover{
			color: <?php echo $params->get('colorhover2'); ?>;
		}
		
		.s3 a{
			color: <?php echo $params->get('color3'); ?>;
			background: <?php echo $params->get('bgcolor3'); ?>;
		}
		.s3 a:hover{
			color: <?php echo $params->get('colorhover3'); ?>;
		}
		
		.s4 a{
			color: <?php echo $params->get('color4'); ?>;
			background: <?php echo $params->get('bgcolor4'); ?>;
		}
		.s4 a:hover{
			color: <?php echo $params->get('colorhover4'); ?>;
		}
		
		.s5 a{
			color: <?php echo $params->get('color5'); ?>;
			background: <?php echo $params->get('bgcolor5'); ?>;
		}
		.s5 a:hover{
			color: <?php echo $params->get('colorhover5'); ?>;
		}
		
		.s6 a{
			color: <?php echo $params->get('color6'); ?>;
			background: <?php echo $params->get('bgcolor6'); ?>;
		}
		.s6 a:hover{
			color: <?php echo $params->get('colorhover6'); ?>;
		}
		
		.s7 a{
			color: <?php echo $params->get('color7'); ?>;
			background: <?php echo $params->get('bgcolor7'); ?>;
		}
		.s7 a:hover{
			color: <?php echo $params->get('colorhover7'); ?>;
		}
		
		.s8 a{
			color: <?php echo $params->get('color8'); ?>;
			background: <?php echo $params->get('bgcolor8'); ?>;
		}
		.s8 a:hover{
			color: <?php echo $params->get('colorhover8'); ?>;
		}
		
		.s9 a{
			color: <?php echo $params->get('color9'); ?>;
			background: <?php echo $params->get('bgcolor9'); ?>;
		}
		.s9 a:hover{
			color: <?php echo $params->get('colorhover9'); ?>;
		}
		
		.s10 a{
			color: <?php echo $params->get('color10'); ?>;
			background: <?php echo $params->get('bgcolor10'); ?>;
		}
		.s10 a:hover{
			color: <?php echo $params->get('colorhover10'); ?>;
		}
		
		.s11 a{
			color: <?php echo $params->get('color11'); ?>;
			background: <?php echo $params->get('bgcolor11'); ?>;
		}
		.s11 a:hover{
			color: <?php echo $params->get('colorhover11'); ?>;
		}
		
		.s12 a{
			color: <?php echo $params->get('color12'); ?>;
			background: <?php echo $params->get('bgcolor12'); ?>;
		}
		.s12 a:hover{
			color: <?php echo $params->get('colorhover12'); ?>;
		}
    
	</style>
</head>
<div class="clearfix grandicons<?php echo $moduleclass_sfx ?>">
	<div class="grand_icon s1 grandopt" style="display:<?php echo $params->get('dis1'); ?>;">
		<a href="<?php echo $params->get('link1'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon1'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s2 grandopt" style="display:<?php echo $params->get('dis2'); ?>;">
		<a href="<?php echo $params->get('link2'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon2'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s3 grandopt" style="display:<?php echo $params->get('dis3'); ?>;">
		<a href="<?php echo $params->get('link3'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon3'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s4 grandopt" style="display:<?php echo $params->get('dis4'); ?>;">
		<a href="<?php echo $params->get('link4'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon4'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s5 grandopt" style="display:<?php echo $params->get('dis5'); ?>;">
		<a href="<?php echo $params->get('link5'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon5'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s6 grandopt" style="display:<?php echo $params->get('dis6'); ?>;">
		<a href="<?php echo $params->get('link6'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon6'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s7 grandopt" style="display:<?php echo $params->get('dis7'); ?>;">
		<a href="<?php echo $params->get('link7'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon7'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s8 grandopt" style="display:<?php echo $params->get('dis8'); ?>;">
		<a href="<?php echo $params->get('link8'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon8'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s9 grandopt" style="display:<?php echo $params->get('dis9'); ?>;">
		<a href="<?php echo $params->get('link9'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon9'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s10 grandopt" style="display:<?php echo $params->get('dis10'); ?>;">
		<a href="<?php echo $params->get('link10'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon10'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s11 grandopt" style="display:<?php echo $params->get('dis11'); ?>;">
		<a href="<?php echo $params->get('link11'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon11'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
	<div class="grand_icon s12 grandopt" style="display:<?php echo $params->get('dis12'); ?>;">
		<a href="<?php echo $params->get('link12'); ?>" target="<?php echo $params->get('openwin'); ?>"> <i class= "fa fa-<?php echo $params->get('icon12'); ?> <?php echo $params->get('sizeicon'); ?>"> </i></a>
	</div>
	
</div>
