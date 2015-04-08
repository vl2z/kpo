var g=0;
  function handleFileSelect(evt) {
  
    var files = evt.target.files; // FileList object
	
	
	
    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {
      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }
      var reader = new FileReader();
      // Closure to capture the file information.
      reader.onload = (function(theFile) {
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
		 
		   var uploaded = document.getElementById("fileformlabel");
			
          span.innerHTML = ['<div class="row">  <div class="col s12">    <div class="card-panel"><div class="row"><div class="input-field col s6"><img class="thumb" src="', e.target.result,'"id="img',g,'" title="', theFile.name, '"/></div><div class="input-field col s6"> <p> <input type="checkbox" id="',g,'" checked/> <label for="',g,'">',theFile.name,'</label> </p></div></div></div></div></div>'].join('');
          document.getElementById('list').insertBefore(span, null);
		  g=g+1;
		  uploaded.innerHTML ="Количество фотографий: "+g;
        };
		
      })(f);
      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
	
  }
document.getElementById('upload').addEventListener('change', handleFileSelect, false);