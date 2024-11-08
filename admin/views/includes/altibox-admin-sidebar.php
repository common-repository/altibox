<?php
$get_from = 'altibox';

$paypal_svg = '
<svg xmlns="http://www.w3.org/2000/svg" width="124" height="33" viewBox="0 0 124 33"><path fill="#253B80" d="M46.21 6.75h-6.838c-.468 0-.866.34-.94.8L35.668 25.09c-.055.346.213.658.564.658h3.266c.468 0 .866-.34.94-.803l.745-4.73c.073-.463.472-.803.94-.803h2.164c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415C50.224 7.353 48.5 6.75 46.21 6.75zm.79 6.404c-.374 2.454-2.25 2.454-4.062 2.454h-1.032l.724-4.583c.043-.277.283-.48.563-.48h.473c1.235 0 2.4 0 3.002.703.36.42.47 1.044.332 1.906zM66.654 13.075H63.38c-.28 0-.52.204-.564.48l-.145.917-.228-.332c-.71-1.03-2.29-1.373-3.868-1.373-3.62 0-6.71 2.74-7.312 6.586-.313 1.918.132 3.752 1.22 5.03.998 1.177 2.426 1.667 4.125 1.667 2.916 0 4.533-1.875 4.533-1.875l-.146.91c-.055.348.213.66.562.66h2.95c.47 0 .865-.34.94-.803l1.77-11.21c.055-.344-.212-.657-.562-.657zM62.09 19.45c-.317 1.87-1.802 3.126-3.696 3.126-.95 0-1.71-.305-2.2-.883-.483-.574-.667-1.39-.513-2.3.296-1.856 1.806-3.153 3.67-3.153.93 0 1.687.31 2.185.892.5.59.697 1.41.554 2.317zM84.096 13.075h-3.29c-.315 0-.61.156-.788.417l-4.54 6.686-1.923-6.425c-.12-.402-.492-.678-.912-.678H69.41c-.394 0-.667.384-.542.754l3.625 10.637-3.408 4.81c-.268.38.002.9.465.9h3.287c.312 0 .604-.15.78-.407l10.947-15.8c.262-.378-.007-.895-.468-.895z"/><path fill="#179BD7" d="M94.992 6.75h-6.84c-.467 0-.865.34-.938.8L84.448 25.09c-.055.346.213.658.562.658h3.51c.326 0 .605-.238.656-.562l.785-4.97c.073-.464.472-.804.94-.804h2.163c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.97-1.142-2.694-1.746-4.983-1.746zm.79 6.404c-.374 2.454-2.25 2.454-4.063 2.454h-1.032l.725-4.583c.043-.277.28-.48.562-.48h.473c1.234 0 2.4 0 3.002.703.36.42.468 1.044.33 1.906zM115.434 13.075h-3.273c-.28 0-.52.204-.56.48l-.146.917-.23-.332c-.71-1.03-2.29-1.373-3.867-1.373-3.62 0-6.71 2.74-7.31 6.586-.313 1.918.13 3.752 1.218 5.03 1 1.177 2.426 1.667 4.125 1.667 2.916 0 4.533-1.875 4.533-1.875l-.146.91c-.055.348.213.66.564.66h2.95c.467 0 .865-.34.938-.803l1.77-11.21c.055-.344-.213-.657-.564-.657zm-4.565 6.374c-.315 1.87-1.802 3.126-3.696 3.126-.95 0-1.71-.305-2.2-.883-.483-.574-.665-1.39-.513-2.3.298-1.856 1.806-3.153 3.67-3.153.93 0 1.687.31 2.185.892.5.59.7 1.41.554 2.317zM119.295 7.23l-2.807 17.858c-.055.346.213.658.562.658h2.822c.47 0 .867-.34.94-.803l2.767-17.536c.054-.346-.214-.66-.563-.66h-3.16c-.28.002-.52.206-.562.483z"/><path fill="#253B80" d="M7.266 29.154l.523-3.322-1.166-.027H1.06L4.928 1.292c.012-.074.05-.143.108-.192.057-.05.13-.076.206-.076h9.38c3.115 0 5.264.648 6.386 1.927.526.6.86 1.228 1.023 1.918.17.724.172 1.59.006 2.644l-.012.077v.675l.526.298c.443.235.795.504 1.065.812.45.513.74 1.165.864 1.938.126.795.084 1.74-.124 2.812-.24 1.232-.628 2.305-1.152 3.183-.482.81-1.096 1.48-1.825 2-.697.494-1.524.87-2.46 1.11-.905.235-1.938.354-3.07.354h-.73c-.523 0-1.03.188-1.428.525-.4.344-.663.814-.744 1.328l-.055.3-.924 5.854-.043.214c-.01.068-.03.102-.058.125-.026.02-.062.034-.097.034H7.266z"/><path fill="#179BD7" d="M23.048 7.667c-.028.18-.06.362-.096.55-1.237 6.35-5.47 8.545-10.874 8.545H9.326c-.66 0-1.218.48-1.32 1.132l-1.41 8.936-.4 2.533c-.066.428.264.814.696.814h4.88c.58 0 1.07-.42 1.16-.99l.05-.248.918-5.833.06-.32c.09-.572.58-.992 1.16-.992h.73c4.728 0 8.43-1.92 9.512-7.476.452-2.322.218-4.26-.978-5.623-.362-.41-.81-.752-1.336-1.03z"/><path fill="#222D65" d="M21.754 7.15c-.19-.054-.384-.104-.584-.15-.2-.043-.407-.082-.62-.116-.74-.12-1.554-.177-2.425-.177h-7.352c-.18 0-.353.04-.507.115-.34.163-.59.484-.652.877L8.05 17.604l-.045.29c.103-.653.66-1.133 1.32-1.133h2.753c5.405 0 9.637-2.195 10.874-8.545.037-.188.068-.37.096-.55-.313-.166-.652-.308-1.017-.43-.09-.03-.182-.058-.276-.086z"/><path fill="#253B80" d="M9.614 7.7c.06-.394.313-.715.652-.877.155-.074.326-.115.507-.115h7.352c.87 0 1.684.057 2.426.177.213.034.42.073.62.117.2.045.395.095.584.15.094.028.187.057.278.086.365.12.704.264 1.017.43.367-2.348-.004-3.946-1.273-5.393C20.377.682 17.853 0 14.622 0h-9.38c-.66 0-1.223.48-1.325 1.133L.01 25.898c-.077.49.3.932.795.932h5.79l1.455-9.225L9.614 7.7z"/></svg>
';
  ?>
    <style>
    .alti_promote_widget {
        background-color: #fff;
        padding: 10px;
        margin: 15px 0;
        border: 1px solid #E5E5E5;
        position: relative;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        overflow: hidden;
    }

    .alti_promote_widget .dashicons {
        color: #238ECB !important;
    }

    .alti_promote_plugin {
        margin: 5px 0 5px -5px;
        clear: both;
        overflow: hidden;
    }

    .alti_promote_plugin a {
        position: relative;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.04);
        float: left;
        display: block;
        margin-right: 5px;
        width: 100%;
        text-decoration: none;
        border: 5px solid transparent;
    }

    .alti_promote_plugin a:hover {
        background-color: #eee;
        border: 5px solid #eee;
    }

    .alti_promote_plugin img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        display: block;
        float: left;
    }

    .alti_promote_plugin .alti_promote_copy {
        color: #555;
    }

    .alti_promote_plugin .alti_promote_copy strong {
        display: block;
        color: #333;
    }

    .alti_promote_title {
        font-size: 1.2em;
        font-weight: bold;
        color: #222;
        margin-bottom: 12.5px;
    }

    .alti_promote_title span:before {
        color: #222;
    }

    .alti_promote_btn {
        background: rgba(35, 142, 203, 0.3);
        display: inline-block;
        padding: 2.5px 5px;
        border-radius: 2.5px;
        text-decoration: none;
        color: #333;
    }

    .alti_promote_paypal {
        color: #021E73;
        font-weight: bold;
        text-shadow: 2px 2px 0 #1189D6;
        display: inline-block;
        background-color: #fff;
        padding: 0 5px;
        border-radius: 15px;
        font-size: 1.2em;
        line-height: 1.3em;
        font-family: sans-serif;
        border: 1px solid #ccc;
    }

    .alti_promote_paypal_svg svg {
        height: 15px;
        width: 65px;
        vertical-align: middle;
    }
    </style>
    <div class="altibox-sidebar">
        <div class="alti_promote_widget">
            <div class="alti_promote_title">Like this plugin?</div>
            <p><span class="dashicons dashicons-arrow-right-alt2"></span><a target="_blank" class="alti_promote_btn" href="https://wordpress.org/support/view/plugin-reviews/<?php echo $get_from; ?>?rate=5#postform"><strong>Rate it</strong></a> to show your support!</p>
            <p><span class="dashicons dashicons-arrow-right-alt2"></span><a target="_blank" class="alti_promote_btn" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9S74KTRCZCLRE&item_name=<?php echo $get_from; ?>&no_note=0&no_shipping=1&currency_code=USD"><strong>Donate</strong> <span class="alti_promote_paypal_svg"><?php echo $paypal_svg; ?></span></a> to encourage me updating this plugin!</p>
        </div>
        <div class="alti_promote_widget">
            <div class="alti_promote_title">Discover more useful plugins</div>
            <?php $related_plugins = array(
			array(
			'protect-uploads',
			'Protect Uploads',
			'Helps you protect your uploads folder.'
			),
			array(
			'alti-watermark',
			'Watermark',
			'Add watermark on your images.'
			),
			array(
			'altibox',
			'Altibox',
			'Add a minimalist lightbox viewer.'
			),
		); ?>
            <?php foreach ($related_plugins as $related_plugin): ?>
            <?php if( $related_plugin[0] != $get_from ) { ?>
            <div class="alti_promote_plugin">
                <a href="plugin-install.php?tab=search&type=term&s=alexis+blondin+<?php echo urlencode($related_plugin[0]); ?>" title="<?php echo $related_plugin[1]; ?>"><img src="https://plugins.svn.wordpress.org/<?php echo $related_plugin[0]; ?>/assets/icon-128x128.png" alt="<?php echo $related_plugin[1]; ?>">
                <div class="alti_promote_copy">
                    <strong><?php echo $related_plugin[1]; ?></strong>
                    <?php echo $related_plugin[2]; ?>
                </div>
                </a>
            </div>
            <?php } ?>
            <?php endforeach ?>
        </div>
        <div class="alti_promote_widget">
            <div class="alti_promote_title">Developed by</div>
            <a href="http://www.alticreation.com?utm_source=wp_plugin&utm_medium=logo_sidebar&utm_campaign=<?php echo $get_from; ?>"><img src="http://alticreation.com/logos/alticreation_color_01.png" alt="alticreation"></a>
        </div>
    </div>
