   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo BASE_URL?>views/js/jquery.js"></script>
    <script src="<?php echo BASE_URL?>views/js/bootstrap.min.js"></script>
    
    <?php
    if( $u->isAdmin() ) { ?>
    	<script src='<?php echo BASE_URL ?>application/plugins/tinyeditor/tiny.editor.packed.js'></script>
    	<script>
    		var edit = new TINY.editor.edit('edit', {
    			id: 'tinyeditor', width:584, height:175, cssclass:'tinyeditor', controlclass: 'tinyeditor-control', rowclass:'tinyeditor-header', dividerclass: 'tinyeditor-divider', controls: ['bold','italic','underline','strikethrough',' -- ','subscript','superscript',' -- ','centeralign','rightalign','blockjustify',' -- ','unformat',' -- ','undo','redo','n','font','size','style',' -- ','image','hr','link','unlink'], footer:true, fonts:['Verdana','Arial'], xhtml:true, cssfile:'custom.css', bodyid: 'editor', footerclass:'tinyeditor-footer', 
    				toggle: {
    					text:'source', activetext:'wysiwyg', cssclass:'toggle'
    				},
    				resize: { cssclass:'resize' }
    		});
    	</script>
    <?php
    } ?> 

  </body>
</html>