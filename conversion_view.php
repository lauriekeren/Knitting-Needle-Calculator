<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
    <title>Needle Conversion Chart</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
<img src="needleconversion.png" alt="needle conversion chart" height="75">
</header>
    <main>
 <div id="parent_grid">

<div id="grid_chart_1">
  <div>Metric</div>  <div>US</div>     <div>UK</div>
  
  <div>1.0mm</div>  <div>00000</div>   <div>n/a</div>
  
  <div>1.25mm</div>  <div>0000</div>   <div>n/a</div>
  
  <div>1.5mm</div>  <div>000</div>    <div>n/a</div>
  
  <div>1.75</div>  <div>00</div>      <div>n/a</div>
  
  <div>2mm</div>     <div>0</div>     <div>14</div>
 
  <div>2.25mm</div>  <div>1</div>     <div>13</div>
  
  <div>2.5mm</div>   <div>1.5</div>    <div>n/a</div>
  
  <div>2.75mm</div>  <div>2</div>     <div>12</div>
  
  <div>3mm</div>     <div>2.5</div>   <div>11</div>
  
  <div>3.25mm</div>  <div>3</div>     <div>10</div>
  
  <div>3.5mm</div>   <div>4</div>     <div>n/a</div>
  
  <div>3.75mm</div>  <div>5</div>     <div>9</div>
  
  <div>4mm</div>     <div>6</div>     <div>8</div>
  
  <div>4.5mm</div>   <div>7</div>     <div>7</div>
  
  <div>5mm</div>     <div>8</div>     <div>6</div>
  
  </div>
  <div id="grid_chart_2">
  <div>Metric</div>  <div>US</div>     <div>UK</div>
  <div>5mm</div>     <div>8</div>     <div>6</div>
  
  <div>5.5mm</div>   <div>9</div>     <div>5</div>
  
  <div>6mm</div>     <div>10</div>    <div>4</div>
  
  <div>6.5mm</div>   <div>10.5</div>  <div>3</div>
  
  <div>7mm</div>     <div>10.75</div>   <div>2</div>
  
  <div>7.5mm</div>   <div>10.875</div>   <div>1</div>
  
  <div>8mm</div>     <div>11</div>    <div>0</div>
  
  <div>9mm</div>     <div>13</div>    <div>00</div>
  
  <div>10mm</div>    <div>15</div>    <div>000</div>
  
  <div>12mm</div>    <div>17</div>    <div>n/a</div>
  
  <div>15mm</div>    <div>19</div>    <div>n/a</div>
  
  <div>20mm</div>    <div>36</div>    <div>n/a</div>
  
  <div>25mm</div>    <div>50</div>    <div>n/a</div>
  
  <div>30mm</div>    <div>n/a</div>    <div>n/a</div>
  
  <div>35mm</div>    <div>n/a</div>    <div>n/a</div>
  
  </div>
  <div id="grid_calc">
 <div>
 <h1>Knitting Needle Calculator</h1>
      <p>I&#39;ve created a chart, and all you have to do is look at it to see the needle conversions. But, I am a 
      <br>web development student, and I&#39;m also looking for things to create. <br>So, I&#39;ve created this Knitting Needle 
      Conversion Calculator. :)</p>
      <p>Enter the needle size below and click "Convert!".</p>
      
      <!--FORM-->
    <?php  
//this ensures that the chosen dropdown stays the same. It looks better and 
//is much less confusing this way.    
if (!empty($_GET['given_type'])) {
    $given_type_val = $_GET['given_type'];
} else {
    $given_type_val = "metric";
}

if (!empty($_GET['wanted_type'])) {
    $wanted_type_val = $_GET['wanted_type'];
} else {
    $wanted_type_val = "uk";
}

?>
      <form action="." method="get">
        <label>From:</label>
        <select name="given_type" id="given_type">
    <option value="uk" <?php if ($given_type_val == "uk") echo 'selected="selected"'; ?>>U.K.</option>
    <option value="us" <?php if ($given_type_val == "us") echo 'selected="selected"'; ?>>U.S.</option>
    <option value="metric" <?php if ($given_type_val == "metric") echo 'selected="selected"'; ?>>Metric</option>
  </select>
        <label>To:</label>
        <select name="wanted_type" id="wanted_type">
    <option value="uk" <?php if ($wanted_type_val == "uk") echo 'selected="selected"'; ?>>U.K.</option>
    <option value="us" <?php if ($wanted_type_val == "us") echo 'selected="selected"'; ?>>U.S.</option>
    <option value="metric" <?php if ($wanted_type_val == "metric") echo 'selected="selected"'; ?>>Metric</option>
  </select>
        <label>Size:</label>
        <input type="text" name="value" value="<?php echo htmlspecialchars($value); ?>"><br>
        <h1><?php echo 'Answer: ' . $answer_f; ?></h1>
      
          <input type="submit" value="Convert!" id="buttons"><br>
      </form>

 </div>
 </div>
 </div>
    </main>
   
</body>
<?php include '../footer.php' ?>
</html>