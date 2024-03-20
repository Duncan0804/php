<html>
<head>
<meta charset="UTF-8">
<title>資管晚會報名表</title>
</head>
<body>

<form action="week4homework_receive.php" method="post">
  <p>資管晚會報名表</p>
  姓名：<input type="text" name="sName" placeholder="請輸入您的姓名" required><br>
  科系：<input type="text" name="sMajor" required><br>
  系級：
  <input type="checkbox" name="sLevel" value="113">113級
  <input type="checkbox" name="sLevel" value="114">114級
  <input type="checkbox" name="sLevel" value="115">115級
  <input type="checkbox" name="sLevel" value="116">116級<br>
  性別：
  <input type="radio" name="sGender" value="male">男
  <input type="radio" name="sGender" value="female" checked>女<br>
  興奮程度：<input type="range" id="rangeInput" name="rangeInput" min="0" max="100" value="50" onchange="showValue()">
  <span id="rangeValue">50</span><br>
  生日：<input type="date" name="date" value=""><br>
  飲食備註：
  <select name="food[]" multiple>
    <option value="大豆類過敏">大豆類過敏</option>
    <option value="蠶豆過敏">蠶豆過敏</option>
    <option value="堅果過敏">堅果過敏</option>
    <option value="乳製品過敏">乳製品過敏</option>
    <option value="麩質過敏">麩質過敏</option>
    <option value="酒精過敏">酒精過敏</option>
    <option value="素食者(全素)">素食者(全素)</option>
    <option value="蛋奶素">蛋奶素</option>
    <option value="無">無</option>
  </select><br>
  其他特殊飲食習慣：<textarea name="comment" rows="1" cols="40" placeholder="無請填無"></textarea><br><br>
  Email：<input type="email" name="sEmail"><br>
  填寫意見：<textarea name="sComment" rows="3" cols="25"></textarea><br><br>
  <input type="submit" value="送出回覆">
  <input type="reset" value="重新填寫">
</form>

<script>
function showValue() {
  var rangeValue = document.getElementById("rangeInput").value;
  document.getElementById("rangeValue").innerHTML = rangeValue;
}
</script>

</body>
</html>