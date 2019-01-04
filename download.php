<?php

if(isset($_GET['filename']) && strlen($_GET['filename']) > 0) {
    if(file_exists($_GET['filename'])){
        //Get file type and set it as Content Type
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        header('Content-Type: ' . finfo_file($finfo, $_GET['filename']));
        finfo_close($finfo);

        //Use Content-Disposition: attachment to specify the filename
        header('Content-Disposition: attachment; filename='.basename($_GET['filename']));

        //No cache
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');

        //Define file size
        header('Content-Length: ' . filesize($_GET['filename']));

        ob_clean();
        flush();
        readfile($_GET['filename']);
        ignore_user_abort();

        unlink($_GET['filename']);
    }
}