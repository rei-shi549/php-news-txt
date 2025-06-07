<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">

<head>
  <style>
    body {
      font-family: sans-serif;
      padding: 2em;
      background-color: #f9f9f9;
    }
    .message {
      max-width: 500px;
      background-color: #fff;
      border: 1px solid #ccc;
      padding: 1em;
      border-radius: 6px;
    }
    .success {
      color: green;
    }
    .error {
      color: red;
    }
    .button-area {
      margin-top: 1em;
    }
    .button-area a {
      padding: 0.5em 1em;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }
    .button-area a:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
<div class="message">
	
<?php
	$date=htmlspecialchars($_POST["date"]);
	$info=htmlspecialchars($_POST["info"]);
	if($date != "" && $info != ""){
		$file=fopen("news.txt","a");
		fputs($file,$date.",".$info."\n");
		fclose($file);
		print("新着情報を登録しました<br>");
	} else {
		print("日付と情報を両方入力してください<br>");
	}
?>

	<div class="button-area">
		<a href="news_entry.html">戻る</a>
		<a href="news_list.php">一覧を見る</a>
	</div>
</div>
</body>
</html>