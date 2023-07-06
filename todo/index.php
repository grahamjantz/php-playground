<!-- tutorial: https://www.youtube.com/watch?v=aEwc4SUq6jo -->

<?php
    require 'db_conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do</title>
    <link rel="stylesheet" href="css/styles.css" >
</head>
<body>
    <div class="main-secion">
        <div class="add-section">
            <form action="">
                <input type="text" name="title" id="" placeholder="This field is required"/>
                <button type="submit">Add &nbsp; <span>&#43;</button>
            </form>
        </div>
        <?php
            $todo = $conn->query("SELECT * FROM todos ORDER BY id DESC");
        ?>
        <div class="show-todo-section">
            <?php if($todos->rowCount() > 0){ ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/f.png" width="100%"/>
                        <img src="img/Ellipsis.gif" width="80%"/>
                    </div>
                </div>
            <?php }; ?>
            <?php if($todos->rowCount() <= 0){ ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/f.png" width="100%" />
                        <img src="img/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>
            <div class="to-do-item">
                <input type="checkbox" name=" " id=""/>
                <h2>This is hsafd sf</h2>
                <br/>
                <small>created: 07/06/2023</small>
            </div>
            
        </div>

    </div>
</body>
</html>