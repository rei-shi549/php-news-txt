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
h3 {
    color: #333;
}
table {
    border-collapse: collapse;
    border-top: 1px solid #ccc;
    width: 100%;
    max-width: 600px;
    background-color: #fff;
}
th, td {
    border-bottom: 1px solid #ccc;
    padding: 0.5em 1em;
    text-align: left;
}
th {
    background-color: #eee;
}
tr:nth-child(even) {
    background-color: #f9f9f9;
}
.button-area {
    margin-top: 1.5em;
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
<h3>新着情報一覧</h3>

<?php
if(file_exists("news.txt")){
    print "<table>\n";
    $lines=file("news.txt");
    arsort($lines);
    foreach($lines as $key=>$value){
        $data = explode(",",$value);
        $date = htmlspecialchars($data[0]);
        $info = htmlspecialchars($data[1]);
        print("<tr><td class='date'>".$date."</td><td>".$info."</td></tr>");
    }
    print("</table>\n");
} else {
    print("新着情報がありません");
}
?>

<div class="button-area">
    <a href="news_entry.html">戻る</a>
</div>
</body>
</html>