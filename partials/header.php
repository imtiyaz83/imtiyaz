<?php require_once "lib/config.php";
	require_once "lib/database.php";

	$pageUrl = strstr(substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/") + 1), ".", true);
	/* Fetch the CMS page record */
	$query = "select id, page_url, h1_page_heading, meta_title, meta_description, meta_keywords, canonical_url, og_title, og_description, og_url, og_image, og_type, robots, structured_data, sitemap_url, breadcrumbs, page_content, status, created_at, updated_at from cms_pages WHERE page_url ='".$pageUrl."'";
            
	$results = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link rel="stylesheet" type="text/css" href="<?php echo DOCUMENT_ROOT;?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo DOCUMENT_ROOT;?>css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo DOCUMENT_ROOT;?>css/uikit.min.css"> 
	<link rel="stylesheet" type="text/css" href="<?php echo DOCUMENT_ROOT;?>css/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo DOCUMENT_ROOT;?>css/custom.css">
	<title><?php echo !empty($row['meta_title']) ? $row['meta_title'] : '';?></title>
	<meta name="description" content="<?php echo !empty($row['meta_description']) ? $row['meta_description'] : '';?>">
	<meta name="keywords" content="<?php echo !empty($row['meta_keywords']) ? $row['meta_keywords'] : '';?>">
	<meta property="og:title" content="<?php echo !empty($row['og_title']) ? $row['og_title'] : '';?>">
	<meta property="og:description" content="<?php echo !empty($row['og_description']) ? $row['og_description'] : '';?>">
	<meta property="og:image" content="<?php echo !empty($row['og_image']) ? $row['og_image'] : '';?>">
	<meta property="og:url" content="<?php echo !empty($row['og_url']) ? $row['og_url'] : '';?>">
	<script type="application/ld+json">
	 	<?php echo !empty($row['structured_data']) ? $row['structured_data'] : '';?>
	</script>

</head>
<body>
