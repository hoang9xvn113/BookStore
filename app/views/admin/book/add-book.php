<?php

use Core\Helper;

include_once INCLUDE_PATH . "adminHeader.php" ?>

<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Thêm sách
                        </h3>
                    </div>
                    <div class="card-content">
                        <form action="" method="POST" enctype="multipart/form-data" class="form row justify-content-center">
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên sản phẩm</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="bookName"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Thể loại</label>
                                </div>
                                <div class="col-8">
                                    <select name="genreId" id="" >
                                        <?php if (isset($genreList)): ?>
                                            <?php foreach($genreList as $genre): ?>
                                                <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                                            <?php endforeach ?>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Tên tác giả</label>
                                </div>
                                <div class="col-8">
                                    <input type="text" name="bookAuthor"  id="">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Giá sản phẩm</label>
                                </div>
                                <div class="col-8">
                                    <input type="number" name="bookPrice"  id="" min="0" value="0" step="10000">
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Nội dung sách</label>
                                </div>
                                <div class="col-8">
                                    <textarea name="bookContent" id="" rows="10" ></textarea>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Trạng thái</label>
                                </div>
                                <div class="col-8">
                                    <select name="bookStatus" id="">
                                        <option value="0">Chọn trạng thái </option>
                                        <option value="0">Unactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-7 row">
                                <div class="col-4">
                                    <label for="">Ảnh sách sách</label>
                                </div>
                                <div class="col-8">
                                    <input type="file" name="bookImage" id="imageFile" onchange="loadImage(this);">
                                </div>
                            </div>
                            <div class="col-7">
                                <img id="bookImage" alt="Thêm ảnh vào">
                            </div>
                            <div class="col-7 row">
                                <div class="col-4"></div>
                                <div class="col-8">
                                    <button type="submit" class="btn-2 bg-success">Thêm sách</button>
                                </div>
                            </div>
                            <?php if (isset($status)): ?>
                            <?php Helper::checkAddStatus($status) ?>
                        <?php endif ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include_once INCLUDE_PATH . "adminFooter.php" ?>