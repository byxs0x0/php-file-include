<meta charset="utf-8">
<form action="upload.php" method="post" enctype="multipart/form-data" >
	 <input type="file" name="fupload" />
 	<input type="submit" value="upload!" />
</form>
you can upload jpg,png,zip....<br />
<?php
if( isset( $_FILES['fupload'] ) ) {
    $uploaded_name = $_FILES[ 'fupload' ][ 'name' ];
    $uploaded_ext  = substr( $uploaded_name, strrpos( $uploaded_name, '.' ) + 1);
    $uploaded_size = $_FILES[ 'fupload' ][ 'size' ];
    $uploaded_tmp  = $_FILES[ 'fupload' ][ 'tmp_name' ];
    $target_path = "uploads\\".md5(uniqid(rand())).".".$uploaded_ext;
    if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" || strtolower( $uploaded_ext ) == "zip" ) &&
        ( $uploaded_size < 100000 ) ) {
        if( !move_uploaded_file( $uploaded_tmp, $target_path ) ) {// No
            echo '<pre>upload error</pre>';
        }
        else {// Yes!
            echo "<pre>".dirname(__FILE__)."\\{$target_path} succesfully uploaded!</pre>";
        }
    }
    else {
        echo '<pre>you can upload jpg,png,zip....</pre>';
    }
}
 ?>