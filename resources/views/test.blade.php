<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tiny.cloud/1/vw3zokhz7kbwxhmtl6uwdc8db3jlldp8h57k1r01rpy2wlgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <textarea id="default-editor">
</textarea>
  <input type="text" >
  <button onclick="checkText()">click
  </button>
  <script>
      function checkText(){
          var myContent = tinymce.get("default-editor").getContent();
          console.log(myContent);
      }
      tinymce.init({
          selector: 'textarea',
          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
      });
  </script>
</body>
</html>
