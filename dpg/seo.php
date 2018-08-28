<?php
require_once "page-options.php";
/*
* Otimizações de SEO e meta campos para configuração da página
*/
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-options',
		'title' => 'Configurações da Página',
		'fields' => array (
			array (
				'key' => 'field_5b67244a188e4',
				'label' => 'Informações da Página',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5b5fa5331ae7d',
				'label' => 'Título',
				'name' => 'title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa5591ae7e',
				'label' => 'Descrição - meta description',
				'name' => 'description',
				'type' => 'textarea',
				'instructions' => 'Atualmente é possível ter uma descrição de até 320 caracteres. Contudo recomendamos o tamanho padrão de 153 caracteres.
	
	Acesse o link a baixo para conferir algumas dicas
	https://www.agenciamestre.com/seo/seo-para-meta-description-tags/',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => 320,
				'rows' => '',
				'formatting' => 'none',
			),
			array (
				'key' => 'field_5b5fa5a31ae7f',
				'label' => 'Domínio',
				'name' => 'domain',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5f9afc1ae79',
				'label' => 'Logo',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => 'Logotipo. Procure utilizar imagens otimizadas e com tamanho máximo de 200px de largura',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b5fa3f71ae7b',
				'label' => 'Logo - Compartilhamento',
				'name' => 'logo_share',
				'type' => 'image',
				'instructions' => 'Logotipo. Procure utilizar imagens otimizadas e com tamanho máximo de 400px de largura',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b5fc1045bbec',
				'label' => 'Favicon',
				'name' => 'favicon',
				'type' => 'image',
				'instructions' => 'Utilize ícone de 64x64px',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b5fa4231ae7c',
				'label' => 'Imagem de Compartilhamento',
				'name' => 'image_og',
				'type' => 'image',
				'instructions' => 'Procure utilizar imagens otimizadas e com tamanho único de de 800x400px',
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5b6727dba8322',
				'label' => 'Meta Data',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5b5fa5dc1ae80',
				'label' => 'Nome da Empresa',
				'name' => 'company_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa73d1ae89',
				'label' => 'Seguimento',
				'name' => 'company_seguiment',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa60d1ae82',
				'label' => 'Telefone 1',
				'name' => 'company_phone',
				'type' => 'text',
				'instructions' => 'Não utilize +55, somente o ddd + nº da linha',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa6551ae83',
				'label' => 'Telefone 2',
				'name' => 'company_phone_2',
				'type' => 'text',
				'instructions' => 'Não utilize +55, somente o ddd + nº da linha',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fc336c87f7',
				'label' => 'E-mail',
				'name' => 'company_email',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa6651ae84',
				'label' => 'Endereço',
				'name' => 'company_address',
				'type' => 'text',
				'instructions' => 'Nome da Rua/Av + Nº',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa67c1ae85',
				'label' => 'Cidade',
				'name' => 'company_city',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa68c1ae86',
				'label' => 'Estado / UF',
				'name' => 'company_uf',
				'type' => 'text',
				'instructions' => 'Ex: SP',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa6a01ae87',
				'label' => 'CEP',
				'name' => 'company_zipcode',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa6e11ae88',
				'label' => 'Geolocation',
				'name' => 'geolocation',
				'type' => 'text',
				'instructions' => 'Insira a Latitude e Longitude, isso otimizará sua empresa para o Google Maps
	Ex: 148.565,-76.884',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa7521ae8a',
				'label' => 'Usuário Twitter',
				'name' => 'company_twitter',
				'type' => 'text',
				'instructions' => 'Ex: @ericsoncardosoweb',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa7831ae8b',
				'label' => 'Facebook',
				'name' => 'company_facebook',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa7911ae8c',
				'label' => 'Linkedin',
				'name' => 'company_linkedin',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa79f1ae8d',
				'label' => 'Instagram',
				'name' => 'company_instagram',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa7ae1ae8e',
				'label' => 'Google Plus',
				'name' => 'company_google',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa7bb1ae8f',
				'label' => 'Youtube',
				'name' => 'company_youtube',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5f82271ae75',
				'label' => 'Integrações e Customização',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5b5f9a601ae76',
				'label' => 'Scripts',
				'name' => 'scripts',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5b5f9aba1ae77',
				'label' => 'Styles',
				'name' => 'styles',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5b5f9acb1ae78',
				'label' => 'Scripts and Styles',
				'name' => 'scripts_and_styles',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'html',
			),
			array (
				'key' => 'field_5b5fa60b1ae81',
				'label' => 'Google Analytics Tracking ID',
				'name' => 'google_analytics',
				'type' => 'text',
				'instructions' => 'Ex: UA-00000000-1',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa8261ae90',
				'label' => 'Google Tag Manager ID',
				'name' => 'google_tag_manager_id',
				'type' => 'text',
				'instructions' => 'Ex: GTM-0000000',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa83c1ae91',
				'label' => 'Google Search Console Verification',
				'name' => 'google_search_console_verification',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5fa8631ae92',
				'label' => 'Facebook Custom Audience Pixel ID',
				'name' => 'facebook_custom_audience_pixel_id',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b5f81ff1ae73',
				'label' => 'Cores e Variáveis',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5b672532188e5',
				'label' => 'Container',
				'name' => 'container',
				'type' => 'text',
				'required' => 1,
				'default_value' => '1200px',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b7d68b11ac91',
				'label' => 'Espaçamentos',
				'name' => 'spaces',
				'type' => 'text',
				'required' => 1,
				'default_value' => '80px',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b67258b188e6',
				'label' => 'Tamanho da Fonte Padrão',
				'name' => 'font-size',
				'type' => 'text',
				'instructions' => 'Os componentes trabalham com a unidade \'em\'. Por tanto se ajustarão proporcionalmente ao valor matriz. ',
				'required' => 1,
				'default_value' => '16px',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b6725ea188e7',
				'label' => 'Fonte Primária',
				'name' => 'fonte_primaria',
				'type' => 'text',
				'required' => 1,
				'default_value' => '\'Montserrat\', sans-serif',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b672610188e8',
				'label' => 'Fonte Secondária',
				'name' => 'fonte_secondaria',
				'type' => 'text',
				'required' => 1,
				'default_value' => '\'Roboto\', sans-serif',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5b67262c188e9',
				'label' => 'Cor Primária',
				'name' => 'cor_primaria',
				'type' => 'color_picker',
				'default_value' => '#333957',
			),
			array (
				'key' => 'field_5b6726da188ea',
				'label' => 'Cor Secondária',
				'name' => 'cor_secondaria',
				'type' => 'color_picker',
				'default_value' => '#8B909B',
			),
			array (
				'key' => 'field_5b6726f2188eb',
				'label' => 'Cor de Contraste',
				'name' => 'cor_contrast',
				'type' => 'color_picker',
				'default_value' => '#E74750',
			),
			array (
				'key' => 'field_5b672707188ec',
				'label' => 'Cor de Destaque',
				'name' => 'cor_de_destaque',
				'type' => 'color_picker',
				'default_value' => '#25CDB9',
			),
			array (
				'key' => 'field_5b67274a188ed',
				'label' => 'Cor de Paralela',
				'name' => 'cor_paralela',
				'type' => 'color_picker',
				'default_value' => '#ADA035',
			),
			array (
				'key' => 'field_5b672a84efe9e',
				'label' => 'Cor de Texto',
				'name' => 'cor_de_texto',
				'type' => 'color_picker',
				'default_value' => '#121212',
			),
			array (
				'key' => 'field_5b672a9fefe9f',
				'label' => 'Cor de Texto Contrast',
				'name' => 'cor_de_texto_contrast',
				'type' => 'color_picker',
				'default_value' => '#fff',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'page-templates/landing-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'excerpt',
				1 => 'custom_fields',
				2 => 'discussion',
				3 => 'comments',
				4 => 'author',
				5 => 'format',
				6 => 'featured_image',
				7 => 'categories',
				8 => 'tags',
				9 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
 
/* ====================== MetaTags ====================== */
function hook_seometatags() { ?>
  <meta name="referrer" content="always">
  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta http-equiv="Accept-CH" content="Device-Memory">

  <meta name="google-site-verification" content="<?= get_option('search_verification'); ?>" />
  <meta class="theme-color" name="theme-color" content="<?= get_option('cor_primaria'); ?>">
  <meta class="theme-color" name="msapplication-navbutton-color" content="<?= get_option('cor_primaria'); ?>">
  <meta class="theme-color" name="apple-mobile-web-app-status-bar-style" content="<?= get_option('cor_primaria'); ?>">
  
  <meta property="og:type" content="business.business" />
  <meta property="og:locale" content="pt_BR" />
  <!-- <meta property="og:image" content="<?php //get_option('ga'); ?>" />
  <meta property="og:site_name" content="Base LP" /> -->

  <meta property="business:contact_data:website" content="<?= get_bloginfo('url'); ?>" />
  <meta property="business:contact_data:phone_number" content="+55<?= get_option('company_whatsapp'); ?>" />
  <meta property="business:contact_data:fax_number" content="+55<?= get_option('company_phone'); ?>" />
  <meta property="business:contact_data:street_address" content="<?= get_option('company_address'); ?>" />
  <meta property="business:contact_data:locality" content="<?= get_option('company_city'); ?>" />
  <meta property="business:contact_data:region" content="<?= get_option('company_uf'); ?>" />
  <meta property="business:contact_data:postal_code" content="<?= get_option('company_zipcode'); ?>" />
  <meta property="business:contact_data:country_name" content="BR" />
  <meta name="geo.placename" content=", " />
  <meta name="geo.position" content="<?= get_option('geolocation'); ?>" />
  <meta name="geo.region" content="pt-BR" />
	<?php $geolocationMD=get_option('geolocation'); $geolocationMD=explode(',',$geolocationMD); ?>	
  <meta property="place:location:latitude" content="<?= $geolocationMD[0]; ?>" />
  <meta property="place:location:longitude" content="<?= $geolocationMD[1]; ?>" />
  <meta name="copyright"content="<?= get_bloginfo('title'); ?>">
  <meta name="format-detection" content="telephone=no">

  <!-- <meta name="twitter:card" content="summary" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" /> -->

  <!-- <link rel="shortcut icon" type="image/png" href="" /> -->

  <meta name="generator" content="Orgulhosamente criado e desenvolvido pelo Grupo DPG, empresa especialista em Marketing Digital Contábil" />
  <meta name="designer" content="Grupo DPG">
  <meta name="application-name" content="Grupo DPG, empresa especialista em Marketing Digital Contábil"/>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org/",
			"@type": "LocalBusiness",
			"name": "<?= get_option('company_name'); ?>",
			"url": "<?= get_bloginfo('url'); ?>",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "<?= get_option('company_address'); ?>",
				"addressLocality": "<?= get_option('company_city'); ?>",
				"addressRegion": "<?= get_option('company_uf'); ?>",
				"postalCode": "<?= get_option('company_zipcode'); ?>",
				"addressCountry": "BR"
			},
			"telephone": "+55<?= get_option('company_whatsapp'); ?>",
			"contactPoint": {
				"@type": "ContactPoint",
				"url": "<?= get_option('contact_page'); ?>",				
				"email": "<?= get_option('company_email'); ?>",
				"contactType": "customer service"
			},			
			"image": "<?= get_option('image_og'); ?>"",
			"logo": "<?= get_option('logo'); ?>""
		}
	</script>

  <?php if( !function_exists('yoast_breadcrumb') ) : ?>
		<meta property="og:title" content="<?= get_option('ga'); ?>" />
		<meta property="og:description" content="<?= get_option('ga'); ?>" />
		<meta property="og:url" content="<?= get_option('ga'); ?>" />
  <?php endif; ?>

	<?php $gtm = get_option('gtm'); if(!empty($gtm)) : ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','<?= $gtm; ?>');</script>
	<!-- End Google Tag Manager -->
	<?php endif; ?>
<?php } add_action('wp_head', 'hook_seometatags');
/* ====================== / MetaTags ====================== */

/* ====================== SCRIPTS ====================== */
function hook_seoscriptstags() { ?>
<?php 
	$facebookId = get_option('fb_pixel'); 
	$ga = get_option('ga'); 
?>
<?php if(!empty(get_option('gtm'))) : ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= get_option('gtm'); ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<?php if(!empty($ga)) : ?>
<?php endif; ?>
<?php if(!empty($facebookId)) : ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
// Insert Your Facebook Pixel ID below. 
fbq('init', '<?= $facebookId; ?>');
fbq('track', 'PageView');
</script>
<!-- Insert Your Facebook Pixel ID below. --> 
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<?= $facebookId; ?>&amp;ev=PageView&amp;noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php endif; ?>
<?php } add_action('wp_footer', 'hook_seoscriptstags');
/* ====================== / SCRIPTS ====================== */

/* ====================== Images ====================== */
// Remove link automático nas imagens no editor WP
update_option('image_default_link_type','none');
update_option('image_default_link_type','post');

// Add meta-data in images
add_action( 'add_attachment', 'my_set_image_meta_upon_image_upload' );
function my_set_image_meta_upon_image_upload( $post_ID ) {

	$site_name = get_bloginfo('name');
	// Check if uploaded file is an image, else do nothing
	if ( wp_attachment_is_image( $post_ID ) ) {
		$my_image_title = get_post( $post_ID )->post_title;
		// Sanitize the title:  remove hyphens, underscores & extra spaces:
		$my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',  $my_image_title );
		// Sanitize the title:  capitalize first letter of every word (other letters lower case):
		$my_image_title = ucwords( strtolower( $my_image_title ) );
		// Create an array with the image meta (Title, Caption, Description) to be updated
		// Note:  comment out the Excerpt/Caption or Content/Description lines if not needed
		$my_image_meta = array(
			'ID'		=> $post_ID,			// Specify the image (ID) to be updated
			'post_title'	=> $my_image_title .' - '. $site_name,		// Set image Title to sanitized title
			// 'post_excerpt'	=> $my_image_title .' - '. $site_name,		// Set image Caption (Excerpt) to sanitized title
			'post_content'	=> $my_image_title .' - '. $site_name,		// Set image Description (Content) to sanitized title
		);
		// Set the image Alt-Text
		update_post_meta( $post_ID, '_wp_attachment_image_alt', $my_image_title .' - ' . $site_name );
		// Set the image meta (e.g. Title, Excerpt, Content)
		wp_update_post( $my_image_meta );
	} 
}
/* ====================== / Images ====================== */