<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
function load_data(id){
	$.post( "test.php", { name: "John", time: "2pm" })
	  .done(function( data ) {
		alert( "Data Loaded: " + data );
	  });	
}
</script>
<?php
/*require_once("../wp_load.php");
if ( is_user_logged_in() ) {
    echo 'Welcome, registered user!';
} else {
    echo 'Welcome, visitor!';
}*/
$patch=dirname(__DIR__);
$patch=$patch.'/wp-load.php';
require ($patch);
$html='';
if ( is_user_logged_in() ){

    global $current_user;
    get_currentuserinfo();//echo   '<a href="'.$uu.'">TITLE</a><br>';   
    $author_query = array('posts_per_page' => '-1','author' => $current_user->ID);
    $author_posts = new WP_Query($author_query);
	//$author_posts->have_posts()
	//$author_posts->the_post()
    while($author_posts->have_posts()) : $author_posts->the_post();
	$id_post=get_the_ID();
	$uu=get_the_title();
     $link=get_permalink();  
	 $tags=wp_get_post_tags($id_post);
	 $categorys=get_the_category($id_post);
	 
		foreach($categorys as $c){
			echo $c->name.'<br>';
			$html.='<li><a href="#" onclick="$(\'#box_description_'.$id_post.'\').toggle()">'.$uu.'</a></li>';
			$html.='<li id="box_description_'.$id_post.'" style="display:none;"><input type="text" value="'.$uu.'"><input type="text" value=""><textarea>'.get_post_field('post_content', $id_post).'</textarea></li>';
		}

    endwhile;

}else{

    echo "not logged in";

}
?>
<style>
/* #### Dark Matter #### */
.dark-matter {
    margin-left: auto;
    margin-right: auto;
    max-width: 500px;
    background: #555;
    padding: 20px 30px 20px 30px;
    font: 12px "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #D3D3D3;
    text-shadow: 1px 1px 1px #444;
    border: none;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}
.dark-matter h1 {
    padding: 0px 0px 10px 40px;
    display: block;
    border-bottom: 1px solid #444;
    margin: -10px -30px 30px -30px;
}
.dark-matter h1>span {
    display: block;
    font-size: 11px;
}
.dark-matter label {
    display: block;
    margin: 0px 0px 5px;
}
.dark-matter label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    font-weight: bold;
}
.dark-matter input[type="text"], .dark-matter input[type="email"], .dark-matter input[type="password"], .dark-matter textarea, .dark-matter select {
    border: none;
    color: #525252;
    height: 25px;
    line-height:15px;
    margin-bottom: 16px;
    margin-right: 6px;
    margin-top: 2px;
    outline: 0 none;
    padding: 5px 0px 5px 5px;
    width: 70%;
    border-radius: 2px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    background: #DFDFDF;
}
.dark-matter select {
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    background: #DFDFDF url('down-arrow.png') no-repeat right;
    appearance:none;
    -webkit-appearance:none;
    -moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';
    width: 70%;
    height: 35px;
    color: #525252;
    line-height: 25px;
}
.dark-matter textarea{
    height:100px;
    padding: 5px 0px 0px 5px;
    width: 70%;
}
.dark-matter .button {
    background: #FFCC02;
    border: none;
    padding: 10px 25px 10px 25px;
    color: #585858;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    text-shadow: 1px 1px 1px #FFE477;
    font-weight: bold;
    box-shadow: 1px 1px 1px #3D3D3D;
    -webkit-box-shadow:1px 1px 1px #3D3D3D;
    -moz-box-shadow:1px 1px 1px #3D3D3D;
}

.dark-matter .button:hover {
    color: #333;
    background-color: #EBEBEB;
}
ul li {
	margin:10px;
}
ul li a{
	color:white;
	font-size:16px;
	text-decoration:none;
}
ul li a:hover{
	color:red;
}
</style>
<form action="" method="post" class="dark-matter">
    <h1>FRONT 
        <span>Post</span>
    </h1>
<?php
echo  '<ul>'.$html.'</ul>';
?>    
</form>
