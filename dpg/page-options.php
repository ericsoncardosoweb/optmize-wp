<?php
/* Grupo DPG Settings Page */
class grupodpg_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_sections' ) );
		add_action( 'admin_init', array( $this, 'wph_setup_fields' ) );
		add_action( 'admin_footer', array( $this, 'media_fields' ) );
		add_action( 'admin_enqueue_scripts', 'wp_enqueue_media' );
	}
	public function wph_create_settings() {
		$page_title = 'Otimização de Temas - Grupo DPG';
		$menu_title = 'Grupo DPG';
		$capability = 'manage_options';
		$slug = 'grupodpg';
		$callback = array($this, 'wph_settings_content');
		$icon = 'dashicons-admin-settings';
		$position = 75;
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
	}
	public function wph_settings_content() { ?>
		<div class="wrap">
			<h1>Otimização de Temas - Grupo DPG</h1>
			<?php settings_errors(); ?>
			<form method="POST" action="options.php">
				<?php
					settings_fields( 'grupodpg' );
					do_settings_sections( 'grupodpg' );
					submit_button();
				?>
			</form>
		</div> <?php
	}
	public function wph_setup_sections() {
		add_settings_section( 'grupodpg_section', '', array(), 'grupodpg' );
	}
	public function wph_setup_fields() {
		// Meta Data
		$fields = array(
			array(
				'label' => 'Logos',
				'id' => 'logo',
				'type' => 'media',
				'section' => 'grupodpg_section',
				'desc' => 'Logotipo. Procure utilizar imagens otimizadas e com tamanho máximo de 200px de largura',
			),
			array(
				'label' => 'Imagem de Compartilhamento',
				'id' => 'image_og',
				'type' => 'media',
				'section' => 'grupodpg_section',
				'desc' => 'Procure utilizar imagens otimizadas e com tamanho único de de 800x400px',
			),
			array(
				'label' => 'Nome da Empresa',
				'id' => 'company_name',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Seguimento',
				'id' => 'company_seguiment',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'WhatsApp',
				'id' => 'company_whatsapp',
				'type' => 'text',
				'section' => 'grupodpg_section',
				'desc' => 'Celular ou WhatsApp Principal',
			),
			array(
				'label' => 'Telefone 1',
				'id' => 'company_phone',
				'type' => 'text',
				'section' => 'grupodpg_section',
				'desc' => 'Telefone Fixo',
			),
			array(
				'label' => 'E-mail',
				'id' => 'company_email',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Endereço',
				'id' => 'company_address',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cidade',
				'id' => 'company_city',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Estado / UF',
				'id' => 'company_uf',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'CEP',
				'id' => 'company_zipcode',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Geolocation',
				'id' => 'geolocation',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'URL da Página de Contato',
				'id' => 'contact_page',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Usuário Twitter',
				'id' => 'company_twitter',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Facebook',
				'id' => 'company_facebook',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Linkedin',
				'id' => 'company_linkedin',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Instagram',
				'id' => 'company_instagram',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Container',
				'id' => 'container',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Espaçamentos',
				'id' => 'spaces',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => '	 Tamanho da Fonte Padrão',
				'id' => 'font-size',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Fonte Primária',
				'id' => 'fonte_primaria',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Fonte Secondária',
				'id' => 'fonte_secondaria',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor Primária',
				'id' => 'cor_primaria',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor Secondária',
				'id' => 'cor_secondaria',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor de Contraste',
				'id' => 'cor_contrast',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor de Destaque',
				'id' => 'cor_de_destaque',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor de Paralela',
				'id' => 'cor_paralela',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor de Texto',
				'id' => 'cor_de_texto',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Cor de Texto Contrast',
				'id' => 'cor_de_texto_contrast',
				'type' => 'color',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Google Analytics Tracking ID',
				'id' => 'ga', 
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => '	 Google Tag Manager ID',
				'id' => 'gtm',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Google Search Console Verification',
				'id' => 'search_verification',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
			array(
				'label' => 'Facebook Custom Audience Pixel ID',
				'id' => 'fb_pixel',
				'type' => 'text',
				'section' => 'grupodpg_section',
			),
		);
		foreach( $fields as $field ){
			add_settings_field( $field['id'], $field['label'], array( $this, 'wph_field_callback' ), 'grupodpg', $field['section'], $field );
			register_setting( 'grupodpg', $field['id'] );
		}

	}
	public function wph_field_callback( $field ) {
		$value = get_option( $field['id'] );
		switch ( $field['type'] ) {
				case 'media':
					printf(
						'<input style="width: 40%%" id="%s" name="%s" type="text" value="%s"> <input style="width: 19%%" class="button grupodpg-media" id="%s_button" name="%s_button" type="button" value="Upload" />',
						$field['id'],
						$field['id'],
						$value,
						$field['id'],
						$field['id']
					);
					break;
			default:
				printf( '<div class="form-group"><input name="%1$s" id="%1$s" type="%2$s" class="form-control" placeholder="%3$s" value="%4$s" /></div>',
					$field['id'],
					$field['type'],
					$field['placeholder'],
					$value
				);
		}
		if( $desc = $field['desc'] ) {
			printf( '<p class="description">%s </p>', $desc );
		}
	}	
	public function media_fields() {
		?><script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$('.grupodpg-media').click(function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id').replace('_button', '');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$('input#'+id).val(attachment.url);
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
		</script><?php
	}

}
new grupodpg_Settings_Page();