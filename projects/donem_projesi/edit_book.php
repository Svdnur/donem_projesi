<?php
session_start();
require_once './config/config.php';
require_once 'includes/auth_validate.php';
$book_id = filter_input(INPUT_GET, 'book_id', FILTER_VALIDATE_INT);
$operation = filter_input(INPUT_GET, 'operation', FILTER_SANITIZE_STRING);
($operation == 'edit') ? $edit = true : $edit = false;
$db = getDbInstance();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = filter_input(INPUT_GET, 'book_id', FILTER_SANITIZE_STRING);
    $data_to_update = filter_input_array(INPUT_POST);
    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    $db = getDbInstance();
    $db->where('id', $book_id);
    $stat = $db->update('books', $data_to_update);
    if ($stat) {
        $_SESSION['success'] = "Book updated successfully!";
        header('location: books.php');
        exit();
    }
}
if ($edit) {
    $db->where('id', $book_id);
    $book = $db->getOne("books");
}
?>
<?php
include_once 'includes/header.php';
?>
    <div id="page-wrapper">
        <div class="row">
            <h2 class="page-header">Update Book</h2>
        </div>
        <?php
        include('./includes/flash_messages.php')
        ?>
        <form class="" action="" method="post" enctype="multipart/form-data" id="book_form">
            <?php
            require_once('./forms/book_form.php');
            ?>
        </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#book_form").validate({
                rules: {
                    author: {
                        required: true
                    },
                    name: {
                        required: true
                    },
                    type: {
                        required: true
                    }
                }
            });
        });
    </script>
<?php include_once 'includes/footer.php'; ?>