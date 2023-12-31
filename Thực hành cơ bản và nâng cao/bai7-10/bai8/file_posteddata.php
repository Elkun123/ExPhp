<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="samples">
    CKEditor &mdash; Posted Data
    </h1>
    <table border="1" cellspacing="0" id="outputSample">
        <colgroup><col width="100" /></colgroup>
        <thead>
            <tr>
            <th>Field&nbsp;Name</th>
            <th>Value</th>
            </tr>
        </thead>
        <?php
        if ( isset( $_POST ) )
                $postArray = &$_POST ; // 4.1.0 or later, use $_POST
        else
        $postArray = &$HTTP_POST_VARS ; // prior to 4.1.0, use HTTP_POST_VARS
        foreach ( $postArray as $sForm => $value )
        {
            if ( get_magic_quotes_gpc() )
            $postedValue = htmlspecialchars( stripslashes( $value ) ) ;
            else
            $postedValue = htmlspecialchars( $value ) ;
            ?>
        <tr>
            <th style="vertical-align: top"><?php echo htmlspecialchars($sForm);
            ?></th>
            <td><pre class="samples"><?php echo $postedValue?></pre></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <div id="footer">
    <hr />
    <p>
    CKEditor - The text editor for the Internet - <a class="samples"
    href="http://ckeditor.com/">http://ckeditor.com</a>
    </p>
    <p id="copy">
    Copyright &copy; 2003-2011, <a class="samples"
    href="http://cksource.com/">CKSource</a> - Frederico Knabben. All rights reserved.
    </p>
    </div>
</body>
</html>