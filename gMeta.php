<?php 

function gMeta($post) {
    foreach($post['scripts'] as $key => $script) {
        if($script['name'] == '') {
            unset($post['scripts'][$key]);
        }
    }

    foreach($post['files'] as $key => $file) {
        if($file['name'] == '') {
            unset($post['files'][$key]);
        }
    }

    foreach($post['include'] as $key => $include) {
        if($include['resource'] == '') {
            unset($post['include'][$key]);
        }
    }

    foreach($post['config'] as $key => $config) {
        if($config['name'] == '') {
            unset($post['config'][$key]);
        }
    }

    foreach($post['export'] as $key => $export) {
        if($export['name'] == '') {
            unset($post['export'][$key]);
        }
    }

    foreach($post['html'] as $key => $html) {
        if($html['name'] == '') {
            unset($post['html'][$key]);
        }
    }

    foreach($post['settings'] as $key => $setting) {
        if($setting['name'] == '') {
            unset($post['settings'][$key]);
        }
    }

    foreach($post['aclRights'] as $key => $right) {
        if($right['name'] == '') {
            unset($post['aclRights'][$key]);
        }
    }

$metaContent = "<!--
meta.xml generated via http://meta.codecup.pl
generator writed by szymon <szymon@codecup.pl>
copyrights by ccsoftware <codecup.pl> 2018
-->
";

// informacje

$metaContent .= "
<meta>

	<!-- <info /> -->";

	$metaContent .= '
	<info author="' . $post['author'] . '" ';
    $metaContent .= $post['version'] !== '' ? 'version="' . $post['version'] . '" ' : '';
    $metaContent .= $post['name'] !== '' ? 'name="' . $post['name'] . '" ' : '';
    $metaContent .= $post['description'] !== '' ? 'description="' . $post['description'] . '" ' : '';
    $metaContent .= $post['type'] !== '' ? 'type="' . $post['type'] . '"' : '';
    $metaContent .= $post['gamemodes'] !== '' ? 'gamemodes="' . $post['gamemodes'] . '" ' : '';
    $metaContent .= '/>';

    if(count($post['scripts']) > 0) {
    $metaContent .= '

	<!-- <scripts /> -->';

    foreach($post['scripts'] as $script) {
        $metaContent .= '
    <script ';
        $metaContent .= $script['name'] !== '' && isset($script['name']) ? 'name="' . $script['name'] . '" ' : '';
        $metaContent .= $script['type'] !== '' && isset($script['type']) ? 'type="' . $script['type'] . '" ' : '';
        $metaContent .= $script['cache'] !== '' && isset($script['cache']) ? 'cache="' . $script['cache'] . '" ' : '';
        $metaContent .= $script['validate'] !== '' && isset($script['validate']) ? 'validate="' . $script['validate'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if($post['mapFileName'] != '') {
	$metaContent .= '

	<!-- <map/> -->
	<map ';
    $metaContent .= $post['mapFileName'] !== '' && isset($post['mapFileName']) ? 'src="' . $post['mapFileName'] . '" ' : '';
    $metaContent .= $post['mapDimension'] !== '' && isset($post['mapDimension']) ? 'dimension="' . $post['mapDimension'] . '" ' : '';
    $metaContent .= '/>';
    }

    if(count($post['files']) > 0) {
    $metaContent .= '

	<!-- <files /> -->';

    foreach($post['files'] as $file) {
        $metaContent .= '
    <file ';
        $metaContent .= $file['name'] !== '' && isset($file['name']) ? 'src="' . $file['name'] . '" ' : '';
        $metaContent .= $file['download'] !== '' && isset($file['download']) ? 'download="' . $file['download'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if(count($post['include']) > 0) {
    $metaContent .= '

    <!-- <include /> -->';

    foreach($post['include'] as $include) {
        $metaContent .= '
    <include ';
        $metaContent .= $include['resource'] !== '' && isset($include['resource']) ? 'resource="' . $include['resource'] . '" ' : '';
        $metaContent .= $include['minversion'] !== '' && isset($include['minversion']) ? 'minversion="' . $include['minversion'] . '" ' : '';
        $metaContent .= $include['maxversion'] !== '' && isset($include['maxversion']) ? 'maxversion="' . $include['maxversion'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if(count($post['config']) > 0) {
    $metaContent .= '

    <!-- <config /> -->';

    foreach($post['config'] as $config) {
        $metaContent .= '
    <config ';
        $metaContent .= $config['name'] !== '' && isset($config['name']) ? 'name="' . $config['name'] . '" ' : '';
        $metaContent .= $config['type'] !== '' && isset($config['type']) ? 'type="' . $config['type'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if(count($post['export']) > 0) {
    $metaContent .= '

    <!-- <export /> -->';

    foreach($post['export'] as $export) {
        $metaContent .= '
    <export ';
        $metaContent .= $export['name'] !== '' && isset($export['name']) ? 'function="' . $export['name'] . '" ' : '';
        $metaContent .= $export['type'] !== '' && isset($export['type']) ? 'type="' . $export['type'] . '" ' : '';
        $metaContent .= $export['http'] !== '' && isset($export['http']) ? 'http="' . $export['http'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if(count($post['html']) > 0) {
    $metaContent .= '

    <!-- <html /> -->';

    foreach($post['html'] as $html) {
        $metaContent .= '
    <html ';
        $metaContent .= $html['name'] !== '' && isset($html['name']) ? 'src="' . $html['name'] . '" ' : '';
        $metaContent .= $html['default'] !== '' && isset($html['default']) ? 'default="' . $html['default'] . '" ' : '';
        $metaContent .= $html['raw'] !== '' && isset($html['raw']) ? 'raw="' . $html['raw'] . '" ' : '';
        $metaContent .= '/>';
    }
    }

    if(count($post['settings']) > 0) {
    $metaContent .= '

    <!-- <settings /> -->
    ';

    $metaContent .= '<settings>';

    foreach($post['settings'] as $setting) {
        $metaContent .= '
        <setting ';
        $metaContent .= $setting['name'] !== '' && isset($setting['name']) ? 'name="' . $setting['name'] . '" ' : '';
        $metaContent .= $setting['value'] !== '' && isset($setting['value']) ? 'value="' . $setting['value'] . '" ' : '';
        $metaContent .= '/>';
    }

    $metaContent .= '
    </settings>';
    }

    if($post['minMtaVersionClient'] != '' || $post['minMtaVersionServer'] != '') {
    $metaContent .= '

	<!-- <min_mta_version/> -->
	<min_mta_version ';
    $metaContent .= $post['minMtaVersionClient'] !== '' && isset($post['minMtaVersionClient']) ? 'client="' . $post['minMtaVersionClient'] . '" ' : '';
    $metaContent .= $post['minMtaVersionServer'] !== '' && isset($post['minMtaVersionServer']) ? 'server="' . $post['minMtaVersionServer'] . '" ' : '';
    $metaContent .= '/>';

    }

    if(count($post['aclRights']) > 0) {
    $metaContent .= '

    <!-- <aclrequest /> -->
    ';

    $metaContent .= '<aclrequest>';

    foreach($post['aclRights'] as $right) {
        $metaContent .= '
        <right ';
        $metaContent .= $right['name'] !== '' && isset($right['name']) ? 'name="' . $right['name'] . '" ' : '';
        $metaContent .= $right['access'] !== '' && isset($right['access']) ? 'access="' . $right['access'] . '" ' : '';
        $metaContent .= '/>';
    }

    $metaContent .= '
    </aclrequest>';
    }

    if($post['syncMapElementData'] != '') {
    $metaContent .= '

	<!-- <sync_map_element_data/> -->
	<sync_map_element_data>' . $post['syncMapElementData'] . '</sync_map_element_data>';
    }

    if($post['oop'] != '') {
    $metaContent .= '

	<!-- <oop/> -->
	<oop>' . $post['oop'] . '</oop>';
    }

    if($post['downloadPriorityGroup'] != '') {
    $metaContent .= '

	<!-- <download_priority_group/> -->
	<download_priority_group>' . $post['downloadPriorityGroup'] . '</download_priority_group>';
    }

$metaContent .= '

</meta>';

	/**
	 * Generate meta.xml file
	 */
	$dateTime = new DateTime();
	$metaFileName = "meta" . $dateTime->getTimestamp() . ".xml";

	$metaFile = fopen($metaFileName, "w") or die("nie moge otworzyc pliku");
	fwrite($metaFile, $metaContent);
	fclose($metaFile);

	/**
     * Put data to session and redirect
     */
	session_start();
	$_SESSION['fileName'] = $metaFileName;

	header('location: thanks.php');

}