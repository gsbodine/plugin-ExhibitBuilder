<div class="row">
    <div class="imageLeft span9">
        <?php 
            if ($attachment = exhibit_builder_page_attachment(1)) {
                echo exhibit_builder_attachment_markup($attachment, array('imageSize' => 'fullsize'), array('class' => 'permalink span3 img-polaroid pull-left','style'=>'padding:1em;'));
            }
            echo exhibit_builder_page_text(1); 
        ?>
    </div>
</div>

