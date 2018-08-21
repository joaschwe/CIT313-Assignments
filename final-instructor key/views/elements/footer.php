<!-- Le javascript
 ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo BASE_URL ?>views/js/jquery.js"></script>
<script src="<?php echo BASE_URL ?>views/js/bootstrap.min.js"></script>



<?php if ($u->isAdmin()) { ?>
    <script src="<?php echo BASE_URL ?>application/plugins/tinyeditor/tiny.editor.packed.js"></script>
    <script>
        var editor = new TINY.editor.edit('editor', {
            id: 'tinyeditor',
            width: 700,
            height: 350,
            cssclass: 'tinyeditor',
            controlclass: 'tinyeditor-control',
            rowclass: 'tinyeditor-header',
            dividerclass: 'tinyeditor-divider',
            controls: ['bold', 'italic', 'underline', 'strikethrough', '|', 'subscript', 'superscript', '|',
                'orderedlist', 'unorderedlist', '|', 'outdent', 'indent', '|', 'leftalign',
                'centeralign', 'rightalign', 'blockjustify', '|', 'unformat', '|', 'undo', 'redo', 'n',
                'font', 'size', 'style', '|', 'image', 'hr', 'link', 'unlink', '|'],
            footer: true,
            fonts: ['Verdana', 'Arial', 'Georgia', 'Trebuchet MS'],
            xhtml: true,
            cssfile: 'custom.css',
			css:'body{background-color:#ccc;font-family:sans-serif;color:#000;}',
            bodyid: 'editor',
            footerclass: 'tinyeditor-footer',
            toggle: {text: 'source', activetext: 'wysiwyg', cssclass: 'toggle'},
            resize: {cssclass: 'resize'}
        });
    </script>



<?php } ?>

<script>
        $(document).ready(function(){
           $('.post-loader').click(function(event){
             event.preventDefault();
             var el = $(this);
             
             $.ajax({
                url:el.attr('href'),
                type:'GET',
                success:function(data){
                    el.parent().append(data);
                    el.remove();
                }
             });
           });
        });

$(document).ready(function(){

        var postid = {id:$('#pid').val()}

        if(postid.id != 'undefined'){
            getComments();
        }
        //get comments
        function getComments(){
            $.ajax({
            url: "<?php echo BASE_URL; ?>ajax/getComments",
            data: postid,
            type:"POST",
            success: function(response){
                $('#cmain').html('').append(response);

                $('.moveleft').click(function(e){
                    e.preventDefault();
					//var tester = $(this).parent().find("#commentID").val();
					
                    var cmmid = {id:$(this).parent().find("#commentID").val()};

                    $(this).parent().slideUp(function(){
                        $(this).remove();
                    });
					//alert(cmmid);
                    $.ajax({
                        url: "<?php echo BASE_URL ?>ajax/deleteComment",
                        type:"POST",
                        data: cmmid
                    });
                });
            }
            });
        }

        $('.post').click(function(e){
            e.preventDefault();

            var el = $(this);

            $.ajax({
                url: el.attr('href'),
                type: 'GET',
                success: function(data){
                    el.parent().append(data);
                    el.remove();
                }
            });
        });

        $('#submitComment').click(function(e){
            e.preventDefault();

            var data = {data:$('#textComment').val(),
                        userid: $('#uid').val(),
                        postid: $('#pid').val()
                        }

            $.ajax({
                url:"<?php echo BASE_URL; ?>ajax/postComment",
                type: "POST",
                data: data,
                success: function(){
                    $('#textComment').val('');
                    getComments();

                }
            });
        });
    });
        
</script>



</body>
</html>