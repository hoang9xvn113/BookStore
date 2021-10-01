    <!-- JS -->
    <script src="<?= JS_PATH . "adminScript.js"  ?>"></script>
    <script>
        function loadImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $image = document.getElementById('bookImage');
        $image.setAttribute("src", e.target.result);
        $image.setAttribute("style", "width: 100%;")};
        reader.readAsDataURL(input.files[0]);
      }
}
    </script>
</body>

</html>