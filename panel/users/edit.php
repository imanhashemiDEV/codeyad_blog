<?php require_once "../../functions/helpers.php" ?>
<?php require_once "../../functions/users.php" ?>
<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: ../auth/login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $user = getUserById($id);
}

$error = "";
$message = "";
if (isset($_POST['submit'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        if(isset($_POST['password']) && !empty($_POST['password'])){
            if (checkPassword($_POST['password'])) {
                updateUser($id, $_POST['name'], $_POST['password'],$_FILES['image']);
                //$message = "کاربر ویرایش شد";
                header('location: index.php');
            } else {
                $error = "رمز عبور شما حداقل باید 6 کاراکتر باشد";
            }
        }else{
            updateUser($id, $_POST['name'], $_POST['password'],$_FILES['image']);
            //$message = "کاربر ویرایش شد";
            header('location: index.php');
        }
    } else {
        $error = "لطفا تمام فیلد ها را تکمیل کنید";
    }
}


?>
<?php include "../layouts/head.php" ?>
<?php include "../layouts/navigation.php" ?>
<?php include "../layouts/header.php" ?>
    <main class="main-content">
        <div class="card">
            <div class="card-body">
                <p style="color: red;"><?php if ($error !== "") {
                        echo $error;
                    } ?>  </p>
                <p style="color: green;"><?php if ($message !== "") {
                        echo $message;
                    } ?>  </p>
                <div class="container">
                    <h6 class="card-title">ویرایش کاربر</h6>
                    <form method="POST" action="edit.php?id=<?php echo $user->id ?>" enctype="multipart/form-data">
                        <div class="form-group row">
                            <figure class="avatar avatar">
                                <img src="<?php echo asset('images/') . $user->image ?>" class="rounded-circle"
                                     alt="image">
                            </figure>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">نام و نام خانوادگی</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left" dir="rtl" name="name"
                                       value="<?php echo $user->name ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ایمیل</label>
                            <div class="col-sm-10">
                                <input disabled type="text" class="form-control text-left" dir="rtl" name="email"
                                       value="<?php echo $user->email ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">پسورد</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left" dir="rtl" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="file"> آپلود عکس </label>
                            <input name="image" type="file" class="col-sm-10 form-control-file" id="file">
                        </div>
                        <div class="form-group row">
                            <button type="submit" name="submit" class="btn btn-success btn-uppercase">
                                <i class="ti-check-box m-r-5"></i> ذخیره
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
<?php include "../layouts/footer.php" ?>