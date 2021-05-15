	add_theme_support( 'disable-custom-colors' );
	add_theme_support( 'disable-custom-gradients' );

	function tt_theme_name_disable_gutenberg_custom_color_picker() {

 		add_theme_support( 'editor-color-palette', array(
      array(
          'name' => __( 'Red', 'theme_name' ),
          'slug' => 'rar-red',
          'color' => '#E31B23',
      ),
      array(
          'name' => __( 'Teal', 'theme_name' ),
          'slug' => 'rar-teal',
          'color' => '#008677',
      ),
      array(
          'name' => __( 'Gray', 'theme_name' ),
          'slug' => 'rar-gray',
          'color' => '#85696B',
      ),
      array(
          'name' => __( 'Gold', 'theme_name' ),
          'slug' => 'rar-gold',
          'color' => '#ECAC00',
      ),
			array(
          'name' => __( 'Blue', 'theme_name' ),
          'slug' => 'rar-blue',
          'color' => '#318EBA',
      ),
			array(
          'name' => __( 'Green', 'theme_name' ),
          'slug' => 'rar-green',
          'color' => '#8FB73E',
      ),
			array(
          'name' => __( 'Purple', 'theme_name' ),
          'slug' => 'rar-purple',
          'color' => '#7E48A7',
      ),
			array(
          'name' => __( 'White', 'theme_name' ),
          'slug' => 'rar-white',
          'color' => '#FFFFFF',
      ),
			array(
          'name' => __( 'Black', 'theme_name' ),
          'slug' => 'rar-black',
          'color' => '#000000',
      ),
			array(
          'name' => __( 'Dark Gray', 'theme_name' ),
          'slug' => 'rar-dark-gray',
          'color' => '#666666',
      ),
			array(
          'name' => __( 'Medium Gray', 'theme_name' ),
          'slug' => 'rar-medium-gray',
          'color' => '#999999',
      ),
			array(
          'name' => __( 'Light Gray', 'theme_name' ),
          'slug' => 'rar-light-gray',
          'color' => '#F6F6F6',
      ),
  	));

		add_theme_support( 'editor-gradient-presets', array(
      array(
          'name'     => __( 'Red Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#e9484e 0%, #E31B23 80%)',
          'slug'     => 'rar-red-gradient'
      ),
			array(
          'name'     => __( 'Teal Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#00d1ba 0%, #008677 80%)',
          'slug'     =>  'rar-teal-gradient',
      ),
			array(
          'name'     => __( 'Gray Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#9f8587 0%, #85696B 80%)',
          'slug'     =>  'rar-gray-gradient',
      ),
			array(
          'name'     => __( 'Gold Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#ffc936 0%, #ECAC00 80%)',
          'slug'     =>  'rar-gold-gradient',
      ),
			array(
          'name'     => __( 'Blue Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#51a8d1 0%, #318EBA 80%)',
          'slug'     =>  'rar-blue-gradient',
      ),
			array(
          'name'     => __( 'Green Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg,#aece6e 0%, #8FB73E 80%)',
          'slug'     =>  'rar-green-gradient',
      ),
			array(
          'name'     => __( 'Purple Gradient', 'theme_name' ),
          'gradient' => 'linear-gradient(135deg, #a174c3 0%, #7E48A7 80%)',
          'slug'     =>  'rar-purple-gradient',
      ),
  	));
	}
	add_action( 'after_setup_theme', 'tt_theme_name_disable_gutenberg_custom_color_picker', 100 );
