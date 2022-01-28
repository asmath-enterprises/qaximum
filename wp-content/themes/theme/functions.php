<?php

if ( ! function_exists( 'Qaximum_setup' ) ) :

    function Qaximum_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-thumbnails', array( 'post' ) );      
        add_theme_support( 'post-thumbnails', array( 'page' ) ); 
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
        add_theme_support( 'menus' );
      

        register_nav_menus( array(

            'top-menu' => __('Top Menu','theme'),
        ));
    }
endif;

add_action( 'after_setup_theme', 'Qaximum_setup' );


 //add css
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri().'/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
    
    wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');

    wp_register_style('color', get_template_directory_uri().'/assets/css/color.css', array(), 1, 'all');
    wp_enqueue_style('color');
        
  

}
add_action('wp_enqueue_scripts', 'load_stylesheets');



//custom image
add_image_size('slider_image_large', 2560, 785, true);
add_image_size('slider_image_small', 892, 408, false);









//add widgets
function desktop_register_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'textdomain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        
        register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer-4',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
        register_sidebar( array(
            'name' => 'Footer Area 5',
            'id' => 'footer-5',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
     
}
add_action( 'widgets_init', 'desktop_register_widgets_init' );



// //font icon
// function wpb_load_fa() {
 
//     wp_enqueue_script( 'wpb-fa', 'https://use.fontawesome.com/123456abc.js', array(), '1.0.0', true );
     
//     }
     
//     add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );
 
if(function_exists('acf_add_options_page')){
    acf_add_options_page();
    acf_add_options_sub_page('About');
    acf_add_options_sub_page('Packages');
     acf_add_options_sub_page('Form');
   
}

add_action( 'admin_menu', 'my_admin_menu' );
	
	function customerview_admin_page(){
	?>
<div class="wrap">
    <h2>Customer Details</h2>
    <?php
 global $wpdb;
 $sql = $wpdb->get_results("select * from contactdetails");
 ?>
    <input type="text" name id="myInput" style="
 float: right;
    width: 300px;
    margin-bottom: 22px;" placeholder="search by name" onkeyup="searchfun()">

    <table id="myTable" class="widefat fixed">
        <thead>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PHONE NO</th>
                <th>SELECTION</th>
                <th>MESSAGE</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
        foreach($sql as $results){?>
            <tr>
                <td><?php echo $results->id;?></td>
                 <td><?php echo $results->date;?></td>
                <td><?php echo $results->name;?></td>
                <td><?php echo $results->email;?></td>
                <td><?php echo $results->phoneno;?></td>
                <td><?php echo $results->selection;?></td>
                <td><?php echo $results->message;?></td>
            </tr>
            <?php }?>
        </tbody>

    </table>
    <?php
		?>
</div>
<script>
const searchfun = () =>{
let filter = document.getElementById('myInput').value.toUpperCase()
let myTable = document.getElementById('myTable');
let tr = myTable.getElementsByTagName('tr');
for(var i=0;  i<tr.length; i++){
    tr[i].style.display="";
    let td = tr[i].getElementsByTagName('td')[0];
    let td1 = tr[i].getElementsByTagName('td')[1];
    let td2 = tr[i].getElementsByTagName('td')[2];
    let td3 = tr[i].getElementsByTagName('td')[3];
    let td4 = tr[i].getElementsByTagName('td')[4];
    let td5 = tr[i].getElementsByTagName('td')[5];
    let td6 = tr[i].getElementsByTagName('td')[6];
    if(td && td1){
        let textvalue = td.textContent || td.innerHTML;
        let textvalue1 = td1.textContent || td1.innerHTML;
        let textvalue2 = td2.textContent || td2.innerHTML;
        let textvalue3 = td3.textContent || td3.innerHTML;
        let textvalue4 = td4.textContent || td4.innerHTML;
        let textvalue5 = td5.textContent || td5.innerHTML;
        let textvalue6 = td6.textContent || td6.innerHTML;
        if(textvalue.toUpperCase().indexOf(filter) > -1 
        || textvalue1.toUpperCase().indexOf(filter) > -1
        || textvalue2.toUpperCase().indexOf(filter) > -1
        || textvalue3.toUpperCase().indexOf(filter) > -1
        || textvalue4.toUpperCase().indexOf(filter) > -1
        || textvalue5.toUpperCase().indexOf(filter) > -1
        || textvalue6.toUpperCase().indexOf(filter) > -1
        )
        {
            tr[0].style.display="";
        }else{
            tr[i].style.display= "none";
        }
    }
}
}
        </script>
<?php
	}
     
                              
                        
                        
                        
	function my_admin_menu() {
		add_menu_page('Customer Request View', 'Customer Requests', 'manage_options', 'myplugin/View_Customer_Details.php', 'customerview_admin_page', 'dashicons-tag', 6  );
	}?>
