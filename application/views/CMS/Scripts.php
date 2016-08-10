        <script src="_/js/jquery-1.12.1.min.js"></script>
		<script src="_/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
                tinymce.init({
                  selector: 'textarea',
                  height: 500,
                  plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code'
                  ],
                  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image'
                });
        </script>
        <script src="_/js/bootstrap.min.js"></script>
        <script src="_/js/ProjectScripts.js"></script>
        <script src="_/js/test.js"></script>
        <script src="http://localhost:35729/livereload.js"></script>
		<script>
		function MyFunction(){
		 var e = document.getElementById("ReplyMessage");
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
		</script>