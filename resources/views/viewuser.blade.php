<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <p id="demo"></p>

<script>
const fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
const citrus = fruits.slice(1, 3);
document.getElementById("demo").innerHTML = citrus;
</script>
    {{-- <div class="grid">
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
    </div>
    
    <div class="grid">
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
      <span class="num"></span>
    </div>
    <script>
        jQuery.fn.reverse = [].reverse;

        jQuery($ => {
        $('.grid').each((i, el) => {
            $(el).find('.num').reverse().text(i => `00${i + 1}.`.slice(-3));
        });
        });
    </script> --}}
</body>
</html>