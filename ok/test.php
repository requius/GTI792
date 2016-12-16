<!DOCTYPE html>
<html>
<head>
    <title>Avatalk</title>
   <style> 
@font-face {
   font-family: myFirstFont;
   src: url(fonts/solid_3d.ttf);
}

.test{
   font-family: myFirstFont;
}
</style>
</head>
<body>
    <div class="test">
With CSS3, websites can finally use fonts other than the pre-selected "web-safe" fonts.
</div>
    <input name="searchbox" onfocus="if (this.value=='search') this.value = ''" onblur="if (this.value == '') this.value = 'search'" type="text" value="search">
    
</body>
</html>