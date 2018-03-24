
<head>
	<link href="/css/image_upload.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<link href="/css/css.css" rel="stylesheet">
	<script src="/js/upload_img.js"></script>


</head>
<body>

<div class="image-editor">
	<form action="/profile/edit/187" method="post" enctype="multipart/form-data"> 
		{{csrf_field()}}
   <input name="image" id="click" type="file" class="center cropit-image-input">
   <div class="cropit-preview"></div>
   <br>
   <input id="zoomer" type="range" class="center cropit-image-zoom-input">
   <button class="center btn btn-success export">Save</button>
</form>
 </div>
 <script>
$(document).ready(function(){

	$('#click').trigger('click');
});
 </script>
</body>
</html>