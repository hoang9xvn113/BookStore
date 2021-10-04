<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Trả lời phản hồi
                        </h3>
                    </div>
                    <div class="card-content">
                        <form action="" method="POST" class="form row">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên khách hàng</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name=""  id="" disabled value="<?= $comment['name'] ?>">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Email</label>
                                </div>
                                <div class="col-8">
                                    <input type="email" name="email"  id="" value="<?= $comment['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Phản hồi của khách</label>
                                </div>
                                <div class="col-8">
                                    <textarea name="" id="" cols="30" rows="10" disabled><?= $comment['message'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tin nhắn trả lời</label>
                                </div>
                                <div class="col-8">
                                    <textarea name="message" id="" cols="30" rows="10"><?= $comment['reply'] ?></textarea>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button type="submit" class="btn-2 bg-success">Gửi phản hồi</button>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($status)): ?>
                            <?php Helper::checkSendStatus($status) ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>