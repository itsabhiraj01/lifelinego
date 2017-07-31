<?php
// JavaScript:








?>


<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<!-- jQueryUI -->
<script src="//code.com/ui/1.10.4/jquery-ui.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- TinyMCE.js -->
<script src="js/tinymce/tinymce.min.js"></script>

<!-- Dorpzone.js -->
<script src="js/dropzone.js"></script>

<script>
	
    $(document).ready(function() {

        $("#console-debug").hide();

        $("#btn-debug").click(function() {

            $("#console-debug").toggle();

        });

        $(".btn-delete").on("click", function() {

            var selected = $(this).attr("id");
            var pageid = selected.split("del_").join("");

            var confirmed = confirm("are you sure you want to delete this page?");

            if (confirmed == true) {

                $.get("ajax/pages.php?id="+pageid);

                $("#page_"+pageid).remove();
                //alert(selected);

            }
        });

    });

tinymce.init( {
    selector: ".editor",
    theme: "modern",
    plugins: [
    "code advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "save table contextmenu directionality emoticons template paste textcolor"
    ],
    content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage ",
    style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff00000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
        ]
});

</script>