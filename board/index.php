<?php 
  include $_SERVER['DOCUMENT_ROOT']."/db.php";
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>게시판</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <div id="board_area"> 
    <h1 class="text-center mb-4">게시판</h1>
      <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col" width="10%">번호</th>
          <th scope="col" width="50%">제목</th>
          <th scope="col" width="20%">작성자</th>
          <th scope="col" width="10%">등록일</th>
          <th scope="col" width="10%">조회수</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = mq("SELECT * FROM bbs.boards ORDER BY idx DESC");
          while($board = $sql->fetch_array()) {
            $title = $board["title"]; 
            if(strlen($title) > 30) { 
              $title = mb_substr($title, 0, 30, "utf-8") . "..."; 
            }
        ?>
        <tr>
          <td><?php echo $board['idx']; ?></td>
          <td><a href="/page/board/read.php?idx=<?php echo $board["idx"]; ?>" class="text-decoration-none"><?php echo $title; ?></a></td>
          <td><?php echo $board['name']; ?></td>
          <td><?php echo $board['date']; ?></td>
          <td><?php echo $board['hit']; ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="text-end mt-3">
      <a href="/page/board/write.php" class="btn btn-primary">글쓰기</a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
